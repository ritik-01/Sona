<?php 
include("func.php");
$con=mysqli_connect("localhost","root","","smsdb");
//   $contact=$_POST['contact'];
if(isset($_POST['stud_search'])){
    $rno=$_POST['search'];
    $query="select * from room where rno='$rno';";
 echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Student-Data</title>
  </head>
  <body style="background-color:#3498DB;color:white;text-align:center;">';
  
  include("navbar.php"); 
  
  echo '
  <nav class="navbar navbar-light bg-light">
  <form class="form-inline" action="stud_search.php" method="post">
    <input class="form-control mr-auto" type="search" name="search" placeholder="Enter Student id" aria-label="Search" style="margin-left:1350px;" >
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="stud_search">Search</button>
  </form>
</nav>
  <div class="container" style="text-align:left;">
  <center><h3 class="my-5">Room Details</h3></center><br>
  <table class="table table-hover">
  <thead>
    <tr>
      <th>Room Number</th>
      <th>Lecture1</th>
      <th>Lecture2</th>
      <th>Lecture3</th>
      <th>Lecture4</th>
      <th>Lecture5</th>
      <th>Lecture6</th>
  </thead>
  <tbody>
  ';
  if ($result = $con->query($query)){
  while($query_executed = $result->fetch_assoc()){
    $rno=$query_executed['rno'];
    $lec1=$query_executed['lec1'];
    $lec2=$query_executed['lec2'];
    $lec3=$query_executed['lec3'];
    $lec4=$query_executed['lec4'];
    $lec5=$query_executed['lec5'];
    $lec6=$query_executed['lec6'];
    echo '<tr>
      <td>'.$rno.'</td>
      <td>'.$lec1.'</td>
      <td>'.$lec2.'</td>
      <td>'.$lec3.'</td>
      <td>'.$lec4.'</td>
      <td>'.$lec5.'</td>
      <td>'.$lec6.'</td>
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
}
?>