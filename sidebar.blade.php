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
            background: black;
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

        }

        #sidebar #sidebar-toggle-btn {
         
            cursor: pointer;
            top: 30px;
            left: 250px;
        }
    </style>
</head>

<body>

    <div id="sidebar">
        <div id="sidebar-toggle-btn">
            <i class="fa-solid fa-bars" id=""></i>
        </div>

        <div class="links">
            <a href="#">Home</a>
            <a href="#">Form</a>
            <a href="#">Student Table</a>
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