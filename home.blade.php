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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
        <script src="https://cdn.tiny.cloud/1/chxeldgd7kdsjw7p9dzb0e7nn3e392h1p9pr8nh3dkbka376/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>
        <style>
            #sidebar i {
                font-size: 20px;
            }

            #sidebar {
                position: absolute;
                top: 0px;
                left: -300px;
                width: 300px;
                height: 350vh;
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
        </style>
    </head>

    <body>

        <div id="upload-modal">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            <form action="{{ url('/uploadTestimonial') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="image" id="" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Name :</label>
                    <input type="text" name="name" id="" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Message</label>
                    <input type="text" name="msg" id="" class="form-control" placeholder="">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-info">Upload</button>
                </div>
            </form>
        </div>
        <div id="sidebar">
            <div id="sidebar-toggle-btn">
                <i class="fa-solid fa-bars" id=""></i>
            </div>

            <div class="links">
                <a href="home" class="home bg-light text-dark"><i class="fa fa-home p-2 " aria-hidden="true"
                        style="left:-40px;"></i> Dashboard</a>
                <a href="form" class="form">Add Student</a>
                <a href="slide" class="slide">Home Page</a>

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
            </div>
        </div>
        <div class="container mr-4 ">
            <div class="row mt-5 ">
                <div class="col-xs-1-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="card col-md-3 col-lg-3 col-sm-12 col-12 bg-warning mt-5 ">
                                    <div class="card-body ">
                                        <h4 class="card-title font-weight-bold">Total Students <i
                                                class="fa fa-user  ml-2 text-light" aria-hidden="true"></i></h4>
                                        <p class="card-text counter font-weight-bold text-lg font-weight-bold text-lg"
                                            style="font-size:25px;">0</p>
                                    </div>
                                </div>
                                <div class="card col-md-3 col-lg-3 col-sm-12 col-12 bg-info mt-5 ">
                                    <div class="card-body ">
                                        <h4 class="card-title font-weight-bold">Total Teachers <i
                                                class="fa fa-user-circle text-light ml-2" aria-hidden="true"></i></h4>
                                        <p class="card-text counter font-weight-bold text-lg font-weight-bold text-lg">0</p>
                                    </div>
                                </div>
                                <div class="card col-md-3 col-lg-3 col-sm-12 col-12 bg-success mt-5 ">
                                    <div class="card-body ">
                                        <h5 class="card-title font-weight-bold">Total Registration <i
                                                class="fa fa-registered text-light " aria-hidden="true"></i></h5>
                                        <p class="card-text counter font-weight-bold text-lg">0</p>
                                    </div>
                                </div>

                            </div>

                            {{-- row 2 --}}

                            <div class="row ">
                                <div class="card col-md-3 col-lg-3 col-sm-12 col-12 bg-danger mt-5 ">
                                    <div class="card-body ">
                                        <h4 class="card-title font-weight-bold">Total Revenue <i
                                                class="fas fa-money-bill text-light ml-2  "></i></h4>
                                        <p class="card-text counter font-weight-bold text-lg">0</p>
                                    </div>
                                </div>
                                <div class="card col-md-3 col-lg-3 col-sm-12 col-12 bg-primary mt-5 ">
                                    <div class="card-body  ">
                                        <h4 class="card-title font-weight-bold">Visitors In A Year</h4>
                                        <p class="card-text counter font-weight-bold text-lg">0</p>
                                    </div>
                                </div>

                                <div class="card col-md-3 col-lg-3 col-sm-12 col-12 bg-dark mt-5 ">
                                    <div class="card-body ">
                                        <h5 class="card-title font-weight-bold text-light">Upcoming Events <i
                                                class="fas fa-award    "></i>
                                        </h5>
                                        <p class="card-text text-light counter font-weight-bold text-lg">0</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-top: 20px; width:100%;">
            <h1 style="text-align: center;"></h1>
            <div class="container  mr-4">
                <div id="barchart" style="width: 100%; height: 400px; "></div>
            </div>
        </div>

        <div class="container mr-4 mt-5">
            <h1 class="text-center ">Subscribers</h1>
            <table class="table  w-100">
                <thead>
                    <tr>
                        <th>S. No.</th>
                        <th>Subscribers</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($subs as $sub)
                        <tr>
                            <td scope="row">{{ $sub->id }}</td>
                            <td scope="row">{{ $sub->subscribers }}</td>


                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

        <div class="container mr-4 mt-5">
         <h1 class="text-center ">Get In Touch's Messages</h1>
         <form action=" ">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">

                            <input type="search" name="search" id="" class="form-control"
                                placeholder="Search By Name" width="50%" value="{{ $query }}">
                        </div>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-warning font-weight-bold">Search<i class="fa-solid fa-magnifying-glass ml-2"></i></button>
                    </div>
                </div>
            </form>
           
            <table class="table  w-100">
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Email Address</th>
                        <th>Message</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($msgs as $msg)
                        <tr>
                            <td scope="row">{{ $msg->id }}</td>
                            <td scope="row">{{ $msg->name }}</td>
                            <td scope="row">{{ $msg->phone }}</td>
                            <td scope="row">{{ $msg->email }}</td>
                            <td scope="row">{{ $msg->msg }}</td>


                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="container mr-4">
            <h3>All Testimonial</h3>
            <table class="table table-striped table-inverse table-responsive w-80">
                <thead class="thead-inverse">
                    <tr width="100%">


                        <th width="10%">Id</th>
                        <th width="20%">Image</th>
                        <th width="10%">Name</th>
                        <th width="20%">Message</th>
                        <th width="15%">Operation</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($testis as $testi)
                        <tr>
                            <td scope="row">{{ $testi->id }}</td>
                            <td><img src="{{ asset($testi->img) }}" width="50%" alt="img"></td>
                            <td>{{ $testi->name }}</td>
                            <td>{{ $testi->msg }}</td>
                            <td><a href="editimage/{{ $testi->id }}" class="btn btn-outline-primary">Edit</a>
                                <a href="/deleteimage/{{ $testi->id }}" class="btn btn-outline-danger"
                                    onclick="return confirm('Are you sure to delete?');">Delete</a>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
            <button id="upload-btn " onclick="openModal()" class="btn btn-secondary">Add Image</button>
        </div>
        <script>
            function openModal() {
                document.getElementById('upload-modal').style.display = 'block';
                document.body.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';

            }

            function closeModal() {
                document.getElementById('upload-modal').style.display = 'none';
            }
        </script>


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
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="jquery.counterup.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="chxeldgd7kdsjw7p9dzb0e7nn3e392h1p9pr8nh3dkbka376"
            crossorigin="anonymous"></script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Toggle the sidebar based on page load
                document.getElementById("sidebar").classList.toggle("active");
            });
        </script>
        <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['bar']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Students', 'Teachers', 'Staff', 'Revenue', 'Expanses'],

                    @php
                        foreach ($products as $product) {
                            echo "['" . $product->total_students . "', '" . $product->total_teachers . "', '" . $product->total_staff . "', '" . $product->total_revenues . "', '" . $product->total_expenses . "'],";
                        }
                    @endphp
                ]);

                var options = {
                    chart: {
                        title: 'School Management System Bar Graph !',
                        subtitle: 'Expanese & Revenue Comparison',
                    },
                    bars: 'vertical'
                };
                var chart = new google.charts.Bar(document.getElementById('barchart'));
                chart.draw(data, google.charts.Bar.convertOptions(options));
            }
        </script>

        <script>
            const counterElement = document.querySelector('.counter');
            let count = 0;

            function updateCounter() {
                {{-- while(count!=50) --}}
                count++;

                // Update the counter element with the new count
                counterElement.textContent = count;

                // Call the function recursively after a certain delay (e.g., 1000 milliseconds or 1 second)
                setTimeout(updateCounter, 1);
            }


            updateCounter();
        </script>
        <script>
            tinymce.init({
                selector: 'textarea',
                plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
                mergetags_list: [{
                        value: 'First.Name',
                        title: 'First Name'
                    },
                    {
                        value: 'Email',
                        title: 'Email'
                    },
                ],
                ai_request: (request, respondWith) => respondWith.string(() => Promise.reject(
                    "See docs to implement AI Assistant")),
            });
        </script>
        <div class="container mr-4">
            <textarea>
           Welcome to TinyMCE!
         </textarea>
        </div>
    </body>
@endsection
