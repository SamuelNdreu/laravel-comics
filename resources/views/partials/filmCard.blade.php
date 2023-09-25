<link rel="stylesheet" href="{{ Vite::asset('resources/scss/partials/cardStyle.scss') }}">

@section('film-cards')
    <section class="central-main">
        <div class="card-wrapper container">
            @foreach ($comics as $item)
                <div class="card-element">
                    <img src=" {{ $item['thumb'] }}" alt="" class="img-fluid">
                    <h2>{{ $item['title'] }}</h2>
                </div>
            @endforeach
        </div>
    </section>
@endsection