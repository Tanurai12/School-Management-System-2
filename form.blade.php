<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    @if (Session::has('msg'))
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">{{ session::get('msg') }}</h4>

        </div>
    @endif

    <form id="myForm">
        @csrf

        <label for="name">Name</label>
        <div>
            <input type="text" name="name" id="name" placeholder="" value="">
        </div>

        <button type="button" id="submitBtn">Submit</button>
    </form>



    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#submitBtn').on('click', function() {

                var formData = $('#myForm').serialize();
                $.post('/contact', formData, function(name) {
                    console.log(name);


                });
            });
        });
    </script>

</body>

</html>