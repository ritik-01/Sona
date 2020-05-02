<?php
include("func.php");
$con=mysqli_connect("localhost","root","","smsdb");
//   $contact=$_POST['contact'];
 $query="select teacher.*, salary.salary, salary.cabin from teacher INNER JOIN salary ON teacher.tid=salary.tid;";
 echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Teacher-Data</title>
  </head>
  <body style="background-color:#3498DB;color:white;text-align:center;">';
  include("navbar.php");
  echo '
  <nav class="navbar navbar-light bg-light">
  <form class="form-inline" action="teach_search.php" method="POST">
    <input class="form-control mr-sm-2" type="search" placeholder="Enter Teacher id" aria-label="Search" style="margin-left:1150px;" name="tid">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="teach_search">Search</button>
  </form>
</nav>
  <div class="container" style="text-align:left;">
  <center><h3 class="my-4">Teacher Details</h3></center><br>
  <table class="table table-hover">
  <thead>
    <tr>
      <th>Teacher id</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Contact</th>
      <th>Class1</th>
      <th>Class2</th>
      <th>Class3</th>
      <th>Class4</th>
      <th>Salary</th>
      <th>Cabin</th>
  </thead>
  <tbody>
  ';
  if ($result = $con->query($query)){
  while($query_executed = $result->fetch_assoc()){
    $fname=$query_executed['fname'];
  $lname=$query_executed['lname'];
  $tid=$query_executed['tid'];
  $email=$query_executed['email'];
  $class1=$query_executed['class1'];
  $class2=$query_executed['class2'];
  $class3=$query_executed['class3'];
  $class4=$query_executed['class4'];
  $contact=$query_executed['contact'];
  $salary=$query_executed['salary'];
  $cabin=$query_executed['cabin'];
    echo '<tr>
      <td>'.$tid.'</td>
      <td>'.$fname.'</td>
      <td>'.$lname.'</td>
      <td>'.$email.'</td>
      <td>'.$contact.'</td>
      <td>'.$class1.'</td>
      <td>'.$class2.'</td>
      <td>'.$class3.'</td>
      <td>'.$class4.'</td>
      <td>'.$salary.'</td>
      <td>'.$cabin.'</td>
    </tr>';
  }
}
echo '</tbody></table></div> 
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>';

?>