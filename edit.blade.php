@extends('layouts.app')

@section('content')
    <!doctype html>
    <html lang="en">

    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
            integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            #sidebar i {
                font-size: 20px;
            }

            #sidebar {
                position: fixed;
                top: 0px;
                left: -200px;
                width: 200px;
                height: 100vh;
                background: #343a40;
                z-index: 100;
            }

            #sidebar.active {
                left: 0px;
            }

            #sidebar .links a {
                display: block;
                padding: 20px;
                color: white;
                text-align: center;
                border-bottom: 1px solid grey;
                font-family: 'Raleway', 'sans sarif';
                text-decoration: none;

            }

            #sidebar #sidebar-toggle-btn {
                position: absolute;
                cursor: pointer;
                top: 20px;
                left: 250px;
                color: white;
                width: 30px;
                height: 30px border:2px solid red;

            }

            #sidebar-toggle-btn i {
                font-size: 25px;
            }

            .home {
                background: ;
            }

            .links a:hover {
                background: grey;
            }

            body {
                background-image: url('https://i.stack.imgur.com/zGR9G.jpg');
                font-family: 'Raleway', 'sans sarif';

            }
        </style>
    </head>

    <body>

        <div id="sidebar">
            <div id="sidebar-toggle-btn">
                <i class="fa-solid fa-bars" id=""></i>
            </div>

            <div class="links">
                <a href="home" class="home "><i class="fa fa-home p-2" aria-hidden="true "></i> Dashboard</a>
                <a href="slide" class="slide">Home Page</a>
                <a href="form" class="form bg-light text-dark">Add Students</a>
                <a href="stutab" class="stutab">Total Students</a>
                <a href="stutab" class="stutab">Add Instructor</a>
                <a href="stutab" class="stutab">Total Instructors</a>
                <a href="stutab" class="stutab">Courses</a>
                <a href="stutab" class="stutab">Fee Master</a>
                <a href="stutab" class="stutab">Gallery</a>
                <a href="stutab" class="stutab">Settings</a>
                <a href="stutab" class="stutab">Stats(Coming Soon)</a>
            </div>

        </div>

        <div class="container mt-3">
            @if (Session::has('success_msg'))
                <div class="alert alert-success" role="alert">

                    {{ Session::get('success_msg') }}

                </div>
            @endif

            @if (Session::has('failed_msg'))
                <div class="alert alert-danger" role="alert">

                    {{ Session::get('failed_msg') }}

                </div>
            @endif

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-center text-bold">
                            Update Students
                        </div>
                        <div class="card-body">

                            <!-- Registration Form -->
                            <form method="post" action="/update/{{$data->id}}">
                                @csrf



                                <!-- Name Field -->
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}" required>
                                    <span class="text-danger">
                                        @error('name')
                                            {{ '*' . $message }}
                                        @enderror
                                    </span>
                                </div>

                                <!-- Email Address Field -->
                                <div class="form-group">
                                    <label for="email">Email Address:</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{$data->email}}" required>
                                    <span class="text-danger">
                                        @error('email')
                                            {{ '*' . $message }}
                                        @enderror
                                    </span>
                                </div>
                                <!-- Phone Number Field -->
                                <div class="form-group">
                                    <label for="phone">Phone Number:</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value="{{$data->phone}}" required>
                                    <span class="text-danger">
                                        @error('phone')
                                            {{ '*' . $message }}
                                        @enderror </span>
                                </div>
                                {{-- class field --}}

                                <div class="form-group">
                                    <label for="class">Class:</label>
                                    <input type="class" class="form-control" id="class" name="class" value="{{$data->class}}" required>
                                    <span class="text-danger">
                                        @error('class')
                                            {{ '*' . $message }}
                                        @enderror
                                    </span>
                                </div>

                                {{-- Address field --}}

                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <input type="address" class="form-control" id="address" name="address" value="{{$data->address}}" required>
                                    @error('address')
                                        {{ '*' . $message }}
                                    @enderror
                                </div>


                                <!-- Submit Button -->
                                <div class="row justify-content-center">
                                    <div class="col-auto">
                                        <button type="submit " class="btn btn-dark mr-auto justify-content-center">Update
                                            Student</button>
                                    </div>
                                </div>

                            </form>
                            <!-- End Registration Form -->

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.getElementById("sidebar-toggle-btn").addEventListener("click", function() {
                document.getElementById("sidebar").classList.toggle("active");
            });
        </script>
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