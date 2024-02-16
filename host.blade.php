<!doctype html>
<html lang="en">

<head>
    <title>Host Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .form-control:focus
        {
            background-color: #96d3ec;
            border-color: #96d3ec;
            color: white;
        }
        .first
        {
            border:1px solid lightgrey;
            padding:10px;
        }
    </style>
</head>

<body>

    <div class="container">
    
        <div class="first w-50 mt-5 ">
        <h2>Players</h2>
            <div class="form-group">
                <label for="">Name :</label>
                <input type="text" name="" id="" class="form-control" placeholder=""
                    aria-describedby="helpId" class="bg-warning" value=" {{ Auth::user()->name }}">
            </div>
            <div class="form-group">
                <label for="">IP address :</label>
                <input type="text" name="" id="" class="form-control" placeholder=""
                    aria-describedby="helpId" class="bg-warning" value="{{ $_SERVER['REMOTE_ADDR'] }} ">
            </div>
        <a href="" type="submit" class="btn btn-warning text-light mt-5">Host Game</a>
        </div>


        <button type="button" name="btn" id="btn-1" class="btn btn-primary mt-5 ml-5 btn-lg">0</button>

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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#btn-1').on('click', function() {
                var randomNumber = Math.floor(Math.random() * 10) + 1;

                $.ajax({
                    type: 'get',
                    url: 'senddata/' + randomNumber + '/1',
                    data: {},

                });

                $('#btn-1').text(randomNumber);
                $('#btn-1').prop('disabled', true);
                setTimeout(function() {
                    $('#btn-1').prop('disabled', false);
                }, 20000);
            });
        });
    </script>
</body>

</html>
