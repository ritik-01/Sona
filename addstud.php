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
  <title>Add Student</title>
</head>

<body>
  <?php include("navbar.php"); ?>

  <div class="container my-5">
    <h3>
      <center>Student-Details </center>
    </h3>
    <div class="card">
      <div class="card-body">
        <form action="studadd.php" method="POST">
          <div class="form-group my-4">
            <label for="teachid">Student ID: </label>
            <input type="text" class="form-control" id="studid" placeholder="Enter Teacher-Id" name="sid" required>
          </div>
          <div class="form-group">
            <label for="fname">Student First Name: </label>
            <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter Your First Name"
              required>
          </div>
          <div class="form-group">
            <label for="fname">Student Last Name: </label>
            <input type="text" class="form-control" id="lname" placeholder="Enter Your Last Name" name="lname" required>
          </div>
          <div class="form-group">
            <label for="fname">Student Email Address: </label>
            <input type="email" class="form-control" id="email" placeholder="Enter Your Email Address" name="email">
          </div>
          <div class="form-group">
            <label for="fname">Student Contact Number: </label>
            <input type="tel" class="form-control" id="contact" placeholder="Enter Your Contact Number" name="contact">
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
          <input type="submit" name="sub_stud" value="Create new Admission" class="btn btn-primary" id="inputbtn">
        </form>
      </div>
    </div>
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