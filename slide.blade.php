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
            body {
                background-image: url('https://th.bing.com/th/id/R.3beac3abce8f231f5a2603b29b2ecc5e?rik=gawUhxFHhZCiAA&riu=http%3a%2f%2fcdn.wallpapersafari.com%2f5%2f61%2fH2FMkS.jpg&ehk=S1LLD0PbUFOioXZF1aoHL8gQ1V46YBYNmt1AYekN8Qw%3d&risl=&pid=ImgRaw&r=0');
                font-size: 16px;
                font-family: "Roboto", sans-serif;
            }

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

            .card {
                box-shadow: 0px 0px 15px 2px grey;
            }

            .footer {
                background-color: #343a40;
                color: white;
            }

            .contact {
                width: 300px;

                position: absolute;

                z-index: 2;
            }

            .quick-links li {
                list-style-type: none;
                padding: 8px;
            }

            .quick-links li:hover {
                transition: 2s;


            }

            .card:hover {
                transform: scale(1.1);
                transition: 0.5s;

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
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav text-center">

                    @foreach ($menu[0] as $menuItem)
                        <li class="nav-item @if (isset($menu[$menuItem->id])) dropdown @endif ">
                            <a class="nav-link @if (isset($menu[$menuItem->id])) dropdown-toggle @endif "
                                href="{{ $menuItem->url }}" id="navbarDropdown{{ $menuItem->id }}" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ $menuItem->label }}
                            </a>

                            @if (isset($menu[$menuItem->id]))
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown{{ $menuItem->id }}">
                                    @foreach ($menu[$menuItem->id] as $childItem)
                                        <li>
                                            <a class="dropdown-item" href="">{{ $childItem->label }}</a>

                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </nav>
        <div class=" bg-light text-center">
            @foreach ($schoolinfo as $item)
                <h1 class="text-center bg-warning">{{ $item->schoolname }}</h1>
            @endforeach

        </div>
        <section class="head1">
            <div class="container">
                <div class="contact">

                    <div class="card text-left mt-4" style="background:#a1a5a9bd;">
                        <h4 class="text-center  text-light mt-3">Get In Touch</h4>
                        <div class="card-body p-4 ">
                            <form id="myForm" method="post" action="">
                                @csrf
                                <input type="text" class="form-control  " name="name" id=""
                                    placeholder="Your Name">
                                <input type="text" class="form-control mt-2" name="phone" id=""
                                    placeholder="Your Phone Number">
                                <input type="text" class="form-control mt-2" name="email" id=""
                                    placeholder="Your Email Address">
                                <textarea cols="34" class="form-control mt-2" rows="5" value="Message"placeholder="Send us your query"
                                    name="msg"></textarea>
                                <button type="button" class="btn bg-warning form-control mt-2 text-light"
                                    id="submitBtn">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
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


        <section>

            <div class="container  text-center">
                <h2 class="text-bg-danger ">Testimonials</h2>
                <div class="row">
                    {{-- @for ($i = 0; $i < 3; $i++) --}}

                    @foreach ($testis as $testi)
                        <div class="col-12 col-md-4 col-lg-4 col-sm-12  mt-5">

                            <div class="card  p-3 ">
                                <img class="card-img-top m-auto mt-3 mb-4 pt-2" src="{{ asset($testi->img) }}"alt=""
                                    style="width:100px; margin-top:20px; ">
                                <div class="card-body text-left">
                                    <h4 class="card-title text-danger text-center ">{{ $testi->name }}</h4>
                                    <p class="card-text">{{ $testi->msg }}</p>
                                </div>
                            </div>

                        </div>
                    @endforeach

                    {{-- @endfor --}}


                </div>
            </div>

        </section>

        <footer>
            <div class="container-fluid footer mt-5 p-4 text-center ">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-4 col-sm-12  ">
                        <h3>Contact Info</h3>
                        <p> <i class="fa-solid fa-location-dot"></i> Varanasi , UP</p>
                        <p> 7652096144 , 7652096144</i></p>
                    </div>


                    <div class="col-12 col-md-4 col-lg-4 col-sm-12  quick-links">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="" class="text-light">Home</a></li>
                            <li><a href="" class="text-light">About Us</a></li>
                            <li><a href="" class="text-light">Contact Us</a></li>
                            <li><a href="" class="text-light">Labs</a></li>
                            <li><a href="" class="text-light">Library</a></li>

                        </ul>

                    </div>

                    <div class="col-12 col-md-4 col-lg-4 col-sm-12 last ">
                        <h3>Affiliation Letter</h3>
                        <p>University Name</p>

                        <div class="container">
                            <form id="form2">
                                @csrf
                                <div class="form-group ">
                                    <label for="subscriber" class="col-sm-1-12 col-form-label"></label>
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" name="subscribers" id="subscriber"
                                            placeholder="Your Email Address...">
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="button" class="btn btn-warning text-light"
                                            id="btn2">Subscribe</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </footer>
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
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#submitBtn').on('click', function() 
                {
                    var formData = $('#myForm').serialize();
                    $.post('/getintouch', formData, function(name) {
                    });
                    $('#myForm').trigger("reset");
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $('#btn2').on('click', function() {
                    var formData = $('#form2').serialize();
                    $.post('/subscribe', formData, function(name) {
                         $('#form2').trigger("reset");
                    });
                });
            });
        </script>

    </body>

    </html>
@endsection
