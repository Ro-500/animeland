<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Kanit:100,200" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link href="{{ asset('css/app.css')}}" rel="stylesheet">
        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
        <div class="row col-md-12">
            <div class="col-md-12 text-center  mt-5">
                <h1 class="mx-auto">Anime Land</h1>
                <h3 class="mx-auto">We Serve Awesome Anime</h3>
            </div>
            <div class="row col-md-12 mt-5">
                <form class="col-lg-6 col-10 offset-lg-3 offset-1" action="{{route('search')}}">
                    <div class="input-group">
                        <input name="q" type="text" class="form-control" placeholder="Search" aria-label="Product name">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
            <div class="row col-md-12 mt-5">
                <div class="col-md-8 offset-md-2 row mx-auto container">
                    @php
                        use App\anime;
                        $animes = anime::all()->take(6);
                    @endphp
                    @foreach ($animes as $anime)
                    <div class="col-xl-4 col-lg-6 mt-3">
                        <div class="card">
                            <img class="card-img-top" style="height:200px;background-image:url('/img/{{ $anime->img }}');background-size:cover;background-position:center;">
                            <div class="card-body">
                                <h4 class="card-title">{{ $anime->name }}</h4>
                                <p class="card-text" style="height:150px;overflow-y:auto;overflow-x:auto;text-align:justify;text-indent:30px;">{{ $anime->synosis }}</p>
                                <a href="/anime/{{ $anime->name }}" class="btn btn-primary col-12">Watch it</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div >
        <div class="navbar col-12 mx-auto mt-5 p-3" align="center">
            <div class="col-md-8 mx-auto row">
                <div class="col-6">Weerapat JangJan</div><div class="col-6">60070161</div>
                <div class="col-6">Tanakit Intaniyom</div><div class="col-6">60070141</div>
                <div class="col-6">Warinthorn Thananaporn</div><div class="col-6">60070156</div>
                <div class="col-6">Suppawat Hanthapanawong</div><div class="col-6">60070166</div>
                <div class="col-6">Korrawich Banyam</div><div class="col-6">60070123</div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>
