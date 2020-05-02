<!DOCTYPE html>
<?php include("func.php"); ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Update Teacher</title>
  </head>
  <body>
    <?php include("navbar.php"); ?>

    <div class="container my-5">
        <h3> <center>Teacher-Details  </center></h3>
        <form action="func.php" method="POST">
            <div class="form-group">
                <label for="teachid">Teacher Id: </label>
                <input type="text" class="form-control" id="teachid" placeholder="Enter Teacher-Id" name="tid">
            </div>
            <div class="form-group">
                <label for="fname">Teacher Class1: </label>
                <input type="text" class="form-control" id="email" placeholder="Enter Your Last Name" name="class1">
            </div>
            <div class="form-group">
                <label for="fname">Teacher Class2: </label>
                <input type="text" class="form-control" id="contact" placeholder="Enter Your Last Name" name="class2">
            </div>
            <div class="form-group">
                <label for="teachid">Teacher Class3: </label>
                <input type="text" class="form-control" id="teachid" placeholder="Enter Teacher-Id" name="class3">
            </div>
            <div class="form-group">
                <label for="teachid">Teacher Class4: </label>
                <input type="text" class="form-control" id="teachid" placeholder="Enter Teacher-Id" name="class4">
            </div>
            <input type="submit" name="update_class1" value="Update Class1" class="btn btn-primary" id="inputbtn">
            <input type="submit" name="update_class2" value="Update Class2" class="btn btn-primary" id="inputbtn">
            <input type="submit" name="update_class3" value="Update Class3" class="btn btn-primary" id="inputbtn">
            <input type="submit" name="update_class4" value="Update Class4" class="btn btn-primary" id="inputbtn">
          </form>
    </div>



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>