<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Repositories\ProductRepository;
use App\Repositories\CategoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

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
                $msg = "error";
                return $msg;
            }

            $id = $_POST['id_producto'];


            //CONSULTAR EL PRODUCTO
            $product = $this->productRepository->find($id);

            //SI NO EXISTE
            if(!$product){
                $msg = "error";
                return $msg;
            }

            //SI NO EXISTE STOCK DE PRODUCTO
            if ($product['stock'] < 1) {
                $msg = "error";
                return $msg;
            }


            $indice = false;


            if ($indice === false) {

                $product['cantidad_en_carrito'] = 1;

                $product = json_decode(json_encode($product), true);

                $request->session()->put(['cart' => $product]);

                return $request->session()->all();
            }


            //var_dump($product);die();

        }else{
            
            $msg = "error";

            return $msg;
        }
    }

}
