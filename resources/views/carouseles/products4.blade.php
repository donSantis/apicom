<div class="container-product">
    <h3 class="title"> Tecnologia</h3>

    <div class="products-container">

        @foreach ($products as $p1)
          
        <div class="product" data-name="p-{{$p1->id}}">
            <img src="{{ route('product.image',['filename'=>$p1->image]) }}"
                                     class="img-fluid "/>
            <h3>{{$p1->title}}</h3>
            <div class="price"> ${{$p1->price}}</div>
        </div>

        @endforeach


    </div>
</div>


<div class="products-preview">
    @foreach ($products as $p1)
    <div class="product-preview">
        <div class="preview " data-target="p-{{$p1->id}}">
            <i class="fas fa-times"></i>
            <img src="{{ route('product.image',['filename'=>$p1->image]) }}"
            class="img-fluid "/>
            <h3>{{$p1->title}}</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>(250)</span>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, minima?</p>
            <div class="price"> ${{$p1->price}}</div>
            <div class="buttons">
                <a href="#" class="buy">Comprar Ahora</a>
                <a href="#" class="cart">Agregar Carro </a>
            </div>
        </div>
    </div>
    @endforeach
</div>