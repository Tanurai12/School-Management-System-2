@extends('layouts.app')

@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    </div> --}}


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
              position:absolute;
                top: 0px;
                left: -300px;
                width: 300px;
                height: 150vh;
                background: #343a40;
                z-index: 100;
                transition: 0.5s;

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
                left: 350px;
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

            .card {
                margin: auto;
            }

            body {
                background-image: url('https://i.stack.imgur.com/zGR9G.jpg');
                font-family: 'Raleway', 'sans sarif';
            }

            #upload-modal {
                display: none;
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: #fff;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 10px;
                z-index: 1;
            
               
            }



            #upload-btn {
                cursor: pointer;
                padding: 10px;
                background-color: #007bff;
                color: #fff;
                border: none;
                border-radius: 5px;
                outline: none;
            }

            /* Style the close button */
            .close-btn {
                cursor: pointer;
                position: absolute;
                top: 10px;
                right: 10px;
                font-size: 18px;
            }
            .links a{
                padding:20px;
            }
        </style>
    </head>

    <body id="body">

        <div id="sidebar">
            <div id="sidebar-toggle-btn">
                <i class="fa-solid fa-bars" id=""></i>
            </div>

            <div class="links">
                 <a href="home" class="home "><i class="fa fa-home " aria-hidden="true"
                        style="left:-40px;"></i> Dashboard</a>
                <a href="slide" class="slide">Home Page</a>

                <a href="form" class="form">Add Student</a>
                <a href="stutab" class="stutab">Total Students</a>
                {{-- <a href="stutab" class="stutab">Add Instructor</a>
                <a href="stutab" class="stutab">Total Instructors</a> --}}
                <a href="stutab" class="stutab">Academics</a>
                <a href="stutab" class="stutab">Fee Collection</a>
                <a href="displayImage" class="displayImage form bg-light text-dark">Gallery</a>
                <a href="displayImage" class="displayImage">Examinations</a>
                <a href="displayImage" class="displayImage">Attendance</a>
                <a href="displayImage" class="displayImage">Homework</a>

                <a href="disp-name-logo" class="disp-name-logo">Settings</a>
                <a href="stutab" class="stutab">Stats(Coming Soon)</a>
            </div>
        </div>
        <div class="container mr-4">

            <form action=" ">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">

                            <input type="search" name="search" id="" class="form-control"
                                placeholder="Search By Title" width="50%" value="{{ $search }}">
                        </div>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-warning font-weight-bold">Search<i class="fa-solid fa-magnifying-glass ml-2"></i></button>
                    </div>
                </div>
            </form>



        </div>
        <div class="container mr-4">
            @if (Session::has('success_msg'))
                <div class="alert alert-success" role="alert">

                    {{ Session::get('success_msg') }}

                </div>
            @endif

            <div id="upload-modal" >
                <span class="close-btn" onclick="closeModal()">&times;</span>
                <form action="{{ url('/upload') }}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="image" id="" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" id="" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="text" name="description" id="" class="form-control" placeholder="">
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-info">Upload</button>
                    </div>
                </form>
            </div>

            @if (Session::has('upd_msg'))
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">{{ session::get('upd_msg') }}</h4>

                </div>
            @endif
            @if (Session::has('del_msg'))
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">{{ session::get('del_msg') }}</h4>

                </div>
            @endif
            @if (Session::has('msg'))
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">{{ session::get('msg') }}</h4>

                </div>
            @endif

            <table class="table table-striped table-inverse table-responsive w-80">
                <thead class="thead-inverse">
                    <tr width="100%">


                        <th width="10%">Id</th>
                        <th width="20%">Image</th>
                        <th width="10%">Title</th>
                        <th width="20%">Description</th>
                        <th width="15%">Operation</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                        <tr>
                            <td scope="row">{{ $data->id }}</td>
                            <td><img src="{{ asset($data->image) }}" width="50%" alt="img"></td>
                            <td>{{ $data->title }}</td>
                            <td>{{ $data->description }}</td>
                            <td><a href="editimage/{{ $data->id }}" class="btn btn-outline-primary">Edit</a>
                                <a href="/deleteimage/{{ $data->id }}" class="btn btn-outline-danger"
                                    onclick="return confirm('Are you sure to delete?');">Delete</a>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
            <button id="upload-btn " onclick="openModal()" class="btn btn-secondary">Add Image</button>



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
        <script>
            function openModal()
            {
                document.getElementById('upload-modal').style.display = 'block';
                document.body.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';

            }

            function closeModal() 
            {
                document.getElementById('upload-modal').style.display = 'none';
            }
        </script>
        <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Toggle the sidebar based on page load
            document.getElementById("sidebar").classList.toggle("active");
        });
    </script>

    </body>

    </html>
@endsection