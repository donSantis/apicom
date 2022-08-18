
<div class="content px-3">
    <div class="swiper mySwiper2">
        <div class="swiper-wrapper">
            @foreach($products2 as $p2)
                <div class="swiper-slide">
                    <div class="card mt-3" style="width: 18rem;">
                        <div class="card-body">
                            <div class="container-img-post pb-2 ">
                                <img src="{{ route('product.image',['filename'=>$p2->image]) }}"
                                     class="img-fluid "/>
                            </div>
                            <input type="hidden" value=" {{ $p2->id }}" id="id" name="id">
                            <h5 class="card-title">{{ $p2->title }}</h5>
                            <p class="card-text">{{ $p2->description }}</p>
                            <p class="card-text">{{ $p2->idCategory->title }}</p>
                            <p class="card-text">{{ $p2->idColor->title }}</p>
                            <a href="{{ route('show.product', [$p2->id]) }}"> UWU</a>
                            <button type="submit" class="btn btn-success btn-flat btn-sm ">Añadir Producto</button>
                            <div class="card-footer" style="background-color: white;">
                                <div class="row">
                                    <button class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart">
                                        <i class="fa fa-shopping-cart"></i> agregar al carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
        <div class="swiper-button-next  "></div>
        <div class="swiper-button-prev "></div>
        <div class="swiper-pagination"></div>
    </div>
</div>



