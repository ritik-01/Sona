<?php
include('func.php');
$con=mysqli_connect("localhost","root","","smsdb");
if(isset($_POST['stud_search'])){
  $sid=$_POST['search'];
  $query="select student.*, fees.fees from student INNER JOIN fees ON student.sid=fees.sid where student.sid='$sid' OR Class='$sid';";
  $result=mysqli_query($con,$query);
 echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Search</title>
  </head>
  <body style="background-color:#3498DB;color:white;text-align:center;">';
  include('navbar.php');
  echo'
  <nav class="navbar navbar-light bg-light">
  <form class="form-inline" action="stud_search.php" method="POST">
    <input class="form-control mr-sm-2" type="search" placeholder="Enter Student id" aria-label="Search" style="margin-left:1350px;" name="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="stud_search">Search</button>
  </form>
</nav>
  <div class="container" style="text-align:left;">
  <center><h3 class="my-5">Student Details</h3></center><br>
  <table class="table table-hover">
  <thead>
    <tr>
    <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Contact</th>
      <th>Student id</th>
      <th>Department</th>
      <th>Class</th>
      <th>Fees</th>
    </tr>
  </thead>
  <tbody>
  ';
  while($row=mysqli_fetch_array($result)){
    $fname=$row['fname'];
    $lname=$row['lname'];
    $tid=$row['sid'];
    $dept=$row['dept'];
    $qual=$row['class'];
    $email=$row['email'];
    $contact=$row['contact'];
    $fees=$row['fees'];
    echo '<tr>
    <td>'.$fname.'</td>
    <td>'.$lname.'</td>
    <td>'.$email.'</td>
    <td>'.$contact.'</td>
    <td>'.$tid.'</td>
    <td>'.$dept.'</td>
    <td>'.$qual.'</td>
    <td>'.$fees.'</td>
    </tr>';
  }
echo '</tbody></table></div> 
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>';
}

?>