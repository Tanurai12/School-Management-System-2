@extends('layouts.app')
@section('content')
    <!doctype html>
    <html lang="en">

    <head>
        <title>Slide Bar</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
            integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            .head1 {

                margin-top: 10px;
                scroll-snap-align: start;

            }

            .head1 img {
                height: 500px;
            }

            .nav-links {
                padding: 25px;
                color: black;
                font-size: 20px;
                font-weight: bold;
                font-family: 'Raleway', 'sans-sarif';
            }

            .nav-links:hover {
                text-decoration: none;
                font-size: 22px;
                transition: 0s;

            }
        </style>


    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="slide">
                @foreach ($schoolinfo as $item)
                    <img src="{{ asset($item->logo) }}"width="70" height="70" alt="">
            </a>
            @endforeach

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav">
                @foreach ($menu[0] as $menuItem)
                    <li class="nav-item @if (isset($menu[$menuItem->id])) dropdown @endif ">
                        <a class="nav-link @if (isset($menu[$menuItem->id])) dropdown-toggle @endif " href="#" id="navbarDropdown{{ $menuItem->id }}"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ $menuItem->label }}
                        </a>

                        @if (isset($menu[$menuItem->id]))
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown{{ $menuItem->id }}">
                                @foreach ($menu[$menuItem->id] as $childItem)
                                    <li>
                                        <a class="dropdown-item" href="#">{{ $childItem->label }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>

        </nav>
        <div class=" bg-light text-center">
            @foreach ($schoolinfo as $item)
                <h1 class="text-center bg-info">{{ $item->schoolname }}</h1>
            @endforeach

        </div>
        <section class="head1">
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">

                        @if ($datas)
                            @foreach ($datas as $data)
                                <div class="carousel-item @if ($loop->first) active @endif">
                                    <img src="{{ asset($data->image) }}" class="d-block w-100" alt="slide image">
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
            </div>
        </section>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
    </body>

    </html>
@endsection