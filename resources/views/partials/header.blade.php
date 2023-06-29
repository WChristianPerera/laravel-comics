<header>
    <div class="header-container">
        <div class="nav-container">
            <img class="logo" src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="">
            
            <ul class="nav-bar">
                @foreach ($arrMenu as $item)
                    <li><a href="">{{ $item['title'] }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</header>
        
<div class="jumbotron">
    <button class="header-btn"><a href="">CURRENT SERIES</a></button>
</div>
