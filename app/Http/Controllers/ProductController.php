<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Repositories\ProductRepository;
use App\Repositories\CategoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

class ProductController extends AppBaseController
{
    /** @var ProductRepository $productRepository*/
    private $productRepository;

    public function __construct(ProductRepository $productRepo,
                                CategoryRepository $categoryRepo)
    {
        $this->productRepository = $productRepo;
        $this->categoryRepository = $categoryRepo;
    }

    /**
     * Display a listing of the Product.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $products = $this->productRepository->all();

        return view('products.index')
            ->with('products', $products);
    }

    public function index2(Request $request)
    {

        $products = $this->productRepository->all();
        $products2 = $this->productRepository->all();
        $categories = $this->categoryRepository->all();

        return view('welcome', [
            'products' => $products,
            'products2' => $products2,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new Product.
     *
     * @return Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created Product in storage.
     *
     * @param CreateProductRequest $request
     *
     * @return Response
     */
    public function store(CreateProductRequest $request)
    {
        $input = $request->all();

        $product = $this->productRepository->create($input);

        Flash::success('Product saved successfully.');

        return redirect(route('products.index'));
    }

    /**
     * Display the specified Product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        return view('products.show')->with('product', $product);
    }

    public function showProduct($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('home'));
        }

        $categories = $this->categoryRepository->all();

        return view('products.show-product', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for editing the specified Product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        return view('products.edit')->with('product', $product);
    }

    /**
     * Update the specified Product in storage.
     *
     * @param int $id
     * @param UpdateProductRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductRequest $request)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        $product = $this->productRepository->update($request->all(), $id);

        Flash::success('Product updated successfully.');

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified Product from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        $this->productRepository->delete($id);

        Flash::success('Product deleted successfully.');

        return redirect(route('products.index'));
    }

    public function addToCart(Request $request)
    {
        //comprobamos el request post
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            //inicio de $_SESSION
            session_start();

            //si el post no contiene id de producto
            if (!isset($_POST["id_producto"])) {
                Flash::success('Product not found.');
                $msg = "error";
                return $msg;
            }

            //se guarda el post id_producto hecho en ajax
            $id = $_POST['id_producto'];


            //CONSULTAR EL PRODUCTO
            $product = $this->productRepository->find($id);

            //SI NO EXISTE
            if(!$product){
                Flash::success('Product not found.');
                $msg = "error";
                return $msg;
            }

            //SI NO EXISTE STOCK DE PRODUCTO
            if ($product['stock'] < 1) {
                Flash::success('Producto sin stock.');
                $msg = "error";
                return $msg;
            }


            $indice = false;

            


            if ($indice === false) {

                //crea atributo en el arreglo product indicando la cantidad de productos en el carrito
                $product['cantidad_en_carrito'] = 1;

                $product = json_decode(json_encode($product), true);

                //crea la session cart.product con el obj  product
                $request->session()->push('cart.product', $product);

                 //vardumpl laravel   para debugear
                //dd(session()->get('cart'));

                $sess = (session()->get('cart'));
                return $sess;
            }


            //var_dump($product);die();

        }else{
            
            $msg = "error";

            return $msg;
        }
    }

    public function getImageProduct($filename)
    {
        $file = Storage::disk('product')->get($filename);
        return new Response($file, 200);
    }

    public function save(Request $request)
    {
        $validate = $this->validate($request, [
            'title' => 'required|string|max:255',
        ]);

        // Recoger datos del formulario
        $title = $request->input('title');
        $idUser = 1;
        $idCategory = 1;
        $idColor = 1;
        $idBrand = 1;
        $idSize = 1;
        $idGender = 1;
        $sku = ' ';
        $description = ' ';
        $price = ' ';
        $stock = ' ';
        $state = ' ';
        $image_path = $request->file('image_path');

        $product = new Product();

        if ($image_path) {
            // Poner nombre unico
            $image_path_name = time() . $image_path->getClientOriginalName();

            // Guardar en la carpeta storage (storage/app/users)
            Storage::disk('product')->put($image_path_name, File::get($image_path));

            // Seteo el nombre de la imagen en el objeto
            $product->image = $image_path_name;
        }else{
            $product->image = "sin-imagen";
        }


        $product->title = $title;
        $product->id_gender = $idGender;
        $product->id_size = $idSize;
        $product->description = $description;
        $product->id_user = $idUser ;
        $product->id_category = $idCategory ;
        $product->id_color = $idColor;
        $product->id_brand = $idBrand ;
        $product->sku = $sku ;
        $product->price = $price ;
        $product->stock = $stock ;
        $product->state = $state ;

        $product->save();

        Flash::success('Product saved successfully.');

        return redirect(route('home'));
    }


}

