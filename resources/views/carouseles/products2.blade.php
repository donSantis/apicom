
<div class="content px-3">
    <div class="swiper mySwiper2">
        <div class="swiper-wrapper">
            @foreach($products2 as $p2)
                <div class="swiper-slide">
                    <div class="card mt-3" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $p2->title }}</h5>
                            <p class="card-text">{{     $p2->description }}</p>
                            <p class="card-text">{{     $p2->idCategory->title }}</p>
                            <p class="card-text">{{     $p2->idColor->title }}</p>
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



