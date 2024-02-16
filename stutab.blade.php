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
                position: absolute;
                top: 0px;
                left: -300px;
                width: 300px;
                height: 100vh;
                background: #343a40;
                z-index: 100;
                transition:0.5s;

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
                left: 320px;
                color: white;
                width: 30px;
          

            }

            #sidebar-toggle-btn i 
            {
                font-size: 25px;
            }

            .home 
            {
                background: ;
            }

            .links a:hover 
            {
                background: grey;
            }
            body{
                background-image:url('https://i.stack.imgur.com/zGR9G.jpg');
                font-family:'Raleway','sans sarif';

            }
        </style>
    </head>

    <body>

        <div id="sidebar">
            <div id="sidebar-toggle-btn">
                <i class="fa-solid fa-bars" id=""></i>
            </div>

            <div class="links">
                 <a href="home" class="home bg-light text-dark"><i class="fa fa-home p-2 " aria-hidden="true"
                        style="left:-40px;"></i> Dashboard</a>
                                        <a href="slide" class="slide">Home Page</a>

                <a href="form" class="form">Add Student</a>
                <a href="stutab" class="stutab">Total Students</a>
                {{-- <a href="stutab" class="stutab">Add Instructor</a>
                <a href="stutab" class="stutab">Total Instructors</a> --}}
                <a href="stutab" class="stutab">Academics</a>
                <a href="stutab" class="stutab">Fee Collection</a>
                <a href="displayImage" class="displayImage">Gallery</a>
                <a href="displayImage" class="displayImage">Examinations</a>
                <a href="displayImage" class="displayImage">Attendance</a>
                <a href="displayImage" class="displayImage">Homework</a>

                <a href="disp-name-logo" class="disp-name-logo">Settings</a>
                <a href="stutab" class="stutab">Stats(Coming Soon)</a>
            </div>

        </div>

        <div class="container mt-5 text-center mr-auto ">
        @if (Session::has('del_msg'))
            <div class="alert alert-danger" role="alert">

                {{ Session::get('del_msg') }}

            </div>
        @endif

            <div class="row justify-content-center ml-5">
                <table class="table ml-5">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">S. No.</th>
                            <th scope="col">Student Name</th>
                            <th scope="col">Email Id</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Class</th>
                            <th scope="col">Address</th>
                           <th scope="col">Operation</th>


                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($datas as $data)
                         <tr>
                            <th >{{$data->id}}</th>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->phone}}</td>
                            <td>{{$data->class}}</td>
                            <td>{{$data->address}}</td>
                            <td><a href="/edit/{{$data->id}}" class="btn btn-primary">Edit</a><a href="/delete/{{$data->id}}" class="btn btn-danger ml-2" onclick="return confirm('Are you sure to delete this record?');">Delete</a></td>
                        </tr>
                    @endforeach
                       
                        
                    </tbody>
                </table>


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
        <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Toggle the sidebar based on page load
            document.getElementById("sidebar").classList.toggle("active");
        });
    </script>
    </body>

    </html>
@endsection