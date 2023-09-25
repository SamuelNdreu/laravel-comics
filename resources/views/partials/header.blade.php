@php
    
    $navItem = [
        [
            "text"=>"Characters"
        ],
        [
            "text"=>"Comics"
        ],
        [
            "text"=>"Movies"
        ],
        [
            "text"=>"Tv"
        ],
        [
            "text"=>"Games"
        ],
        [
            "text"=>"Collectibles"
        ],
        [
            "text"=>"Videos"
        ],
        [
            "text"=>"Fans"
        ],
        [
            "text"=>"News"
        ],
        [
            "text"=>"Shop"
        ],
    ]
    
@endphp

<link rel="stylesheet" href="{{ Vite::asset('resources/scss/partials/headerStyle.scss') }}">




<header>
    

    <div class="top-bar">
    </div>
    <div class="wrapper">
        <div class="container">
            <div class="img-wrapper">
                <img src="{{ Vite::asset('resources/assets/img/dc-logo.png') }}" alt="">
            </div>
            <nav>
                <ul>
                    @foreach ($navItem as $item)
                    <li><a href="#">{{ $item['text'] }}</a></li>
                    @endforeach
                </ul>
            </nav>
            <form action="">
                <input class="" type="search" name="" id="" placeholder="Search">
            </form>
        </div>
    </div>
</header>