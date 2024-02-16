<!doctype html>
<html lang="en">

<head>
    <title>Image Upload</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <style>
   
   .container{
    margin:auto;
   }
   </style> --}}
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        @if (Session::has('success_msg'))
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">{{ Session::get('success_msg') }}</h4>

            </div>
        @endif
        <div class="card text-left w-50 mt-5">
            <div class="card-body">
                <form method ="post" enctype="multipart/form-data" action="{{ url('/upload') }}">
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
                    <div class="form-group">
                        <label for="">Status</label>
                        <input type="che" name="status" id="" class="form-control" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>


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
</body>

</html>