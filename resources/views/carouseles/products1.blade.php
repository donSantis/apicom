
<div class="content px-3">
    <div class="swiper mySwiper2">
        <div class="swiper-wrapper">
            @foreach($products as $product)
                <div class="swiper-slide">
                    <div class="card mt-3" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->title }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
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



