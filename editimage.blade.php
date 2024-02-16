<!doctype html>
<html lang="en">

<head>
    <title>Image Update</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
   
   .card{
    margin:auto;
   }
   </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    <h1 class="text-danger text-center">Update Image</h1>
        <div class="card text-left w-50 mt-5">
            <div class="card-body">
                <form method ="post" enctype="multipart/form-data" action="/updateimage/{{$datas->id}}">
                    @csrf
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="image" id="" class="form-control" placeholder="" >
                        <img src="{{asset($datas->image)}}" width="150px" alt="">
                    </div>
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" id="" class="form-control" placeholder="" value="{{$datas->title}}">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="text" name="description" id="" class="form-control" placeholder="" value="{{$datas->description}}">
                    </div>
                 
                      <div class="text-center">
                    <button type="submit" class="btn btn-danger ">Update</button>
                    </div>
                  
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
