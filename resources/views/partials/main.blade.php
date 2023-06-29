<main>
    <div class=" row main-container">
        @foreach ($arrComics as $comic)
            <div class="comic col-2">
                <img src="{{ Vite::asset($comic['thumb']) }}" alt="">
                <p>{{ $comic['series'] }}</p>
            </div>
        @endforeach
    </div>
    <div class="load">
        <button class="main-btn">LOAD MORE</button>
    </div>
</main>

<section class="shop-container">
    <div class="row shop ">
        <div class="col-auto shop-link">
            <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}" alt="">
            <p>DIGITAL COMICS</p>
        </div>
        <div class="col-auto shop-link">
            <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}" alt="">
            <p>DC MERCHANDISE</p>
        </div>
        <div class="col-auto shop-link">
            <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}" alt="">
            <p>SUBSCRIPTION</p>
        </div>
        <div class="col-auto shop-link">
            <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}" alt="">
            <p>COMIC SHOP LOCATOR</p>
        </div>
        <div class="col-auto shop-link">
            <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg') }}" alt="">
            <p>DC POWER VISA</p>
        </div>
    </div>
</section>
