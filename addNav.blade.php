<!doctype html>
<html lang="en">
  <head>
    <title>Add Nav</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
      <div class="container mt-5">
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Toggle the sidebar based on page load
            document.getElementById("sidebar").classList.toggle("active");
        });
    </script>
  </body>
</html>