@extends('layouts.app')

@section('content')
    <!doctype html>
    <html lang="en">

    <head>
        <title>School Setting</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <style>
            #sidebar i {
                font-size: 20px;
            }

            #sidebar {
                position: absolute;
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
                z-index: 0;

            }

            #sidebar-toggle-btn i {
                font-size: 25px;
            }

            .links a:hover {
                background: grey;
            }
        </style>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        <div id="sidebar">
            <div id="sidebar-toggle-btn">
                <i class="fa-solid fa-bars" id=""></i>
            </div>

            <div class="links">
                <a href="home" class="home "><i class="fa fa-home p-2 " aria-hidden="true" style="left:-40px;"></i>
                    Dashboard</a>
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

                <a href="disp-name-logo" class="disp-name-logo form bg-light text-dark">Settings</a>
                <a href="stutab" class="stutab">Stats(Coming Soon)</a>
            </div>
        </div>

        <div class="container w-50">
        <h3 class="text-bg-secondary text-center ">Add Name And Logo</h3>
            <form action="logo" method="post" enctype="multipart/form-data">
            @csrf
                <div class="form-group row">
                    <label for="schoolname" class="col-sm-1-12 col-form-label">SchoolName</label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="schoolname" id="schoolname" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="logo" class="col-sm-1-12 col-form-label">School Logo</label>
                    <div class="col-sm-1-12">
                        <input type="file" class="form-control" name="logo" id="logo" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="container mt-5  w-50">

            @if (Session::has('msg'))
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">{{ Session::get('msg') }}</h4>

                </div>
            @endif
            <h3 class="text-bg-secondary text-center "> Name And Logo :</h3>
            <table class="table table-striped table-inverse table-responsive text-center mt-5 w-100">
                <thead class="thead-inverse">

                    <tr>
                        <th>Id</th>
                        <th>School Name</th>
                        <th>School Logo</th>
                        <th>Operation</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                        <tr>
                            <td scope="row">{{ $data->id }}</td>
                            <td> {{ $data->schoolname }} </td>
                            <td><img src="{{ asset($data->logo) }}" alt="" width="50px"></td>
                            <td><a href="/editlogoname/{{ $data->id }}" class="btn btn-info">Edit</a></td>

                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>

<div class="container mt-5 w-50">

<h3 class="text-bg-secondary text-center ">Add Nav Bar To Home Page</h3>
        <form action="formNav" method="post">
        @csrf
            <div class="form-group row">
                <label for="label" class="col-sm-1-12 col-form-label">Navigation Name :</label>
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="label" id="label" placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <label for="label" class="col-sm-1-12 col-form-label">URL :</label>
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="url" id="url" placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <label for="parent_id" class="col-sm-1-12 col-form-label">Parent Id :</label>
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="parent_id" id="parent_id" placeholder="">
                </div>
            </div>
            
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Add Nav</button>
                </div>
            </div>
        </form>
      </div>

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
            document.getElementById("sidebar-toggle-btn").addEventListener("click", function() {
                document.getElementById("sidebar").classList.toggle("active");
            });
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Toggle the sidebar based on page load
                document.getElementById("sidebar").classList.toggle("active");
            });
        </script>
    </body>

    </html>
@endsection
