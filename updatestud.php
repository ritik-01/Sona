<!DOCTYPE html>
<?php include("func.php"); ?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
    integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <title>Update Student</title>
</head>

<body>
  <?php include("navbar.php"); ?>

  <div class="container my-5">
    <h3>
      <center>Update Student-Details </center>
    </h3>
    <form action="func.php" method="POST">
      <div class="form-group">
        <label for="teachid">Student ID: </label>
        <input type="text" class="form-control" id="sid" placeholder="Enter Student-Id" name="sid">
      </div>
      <div class="form-group">
        <label for="fname">Student Email Id: </label>
        <input type="email" class="form-control" id="email" placeholder="Enter Your Email-Id" name="email">
      </div>
      <div class="form-group">
        <label for="fname">Student Contact Number: </label>
        <input type="number" class="form-control" id="contact" placeholder="Enter Your Last Name" name="contact">
      </div>
      <div class="form-group">
        <label for="dept">Student Section:</label>
        <select class="form-control" id="sec" name="sec">
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
        </select>
      </div>
      <div class="form-group">
        <label for="qual">Student Class: </label>
        <select class="form-control" id="class" name="class">
          <option value="I">I</option>
          <option value="II">II</option>
          <option value="III">III</option>
          <option value="IV">IV</option>
          <option value="V">V</option>
          <option value="VI">VI</option>
          <option value="VII">VII</option>
          <option value="VIII">VIII</option>
          <option value="IX">IX</option>
          <option value="X">X</option>
        </select>
      </div>
      <input type="submit" name="update_stud" value="Update Student" class="btn btn-primary" id="inputbtn">
    </form>
  </div>



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
    integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
    integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
    crossorigin="anonymous"></script>
</body>

</html>