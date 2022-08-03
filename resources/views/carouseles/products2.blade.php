
<div class="content px-3">
    <div class="swiper mySwiper2">
        <div class="swiper-wrapper">
            <form  class="panel form-horizontal"   accept-charset="utf-8" method="post" action="{{ route('cart.store') }}">

            @foreach($products2 as $p2)
                <div class="swiper-slide">
                    <div class="card mt-3" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            {{ csrf_field() }}
                            <input type="hidden" value=" {{ $p2->id }}" id="id" name="id">

                            <h5 class="card-title">{{ $p2->title }}</h5>
                            <p class="card-text">{{     $p2->description }}</p>
                            <p class="card-text">{{     $p2->idCategory->title }}</p>
                            <p class="card-text">{{     $p2->idColor->title }}</p>
                            
                            <button type="submit"  class="btn btn-success btn-flat btn-sm ">Añadir Producto</button>



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

</form>

      
</div>



