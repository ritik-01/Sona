<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body style="background-color:#3498DB;color:white;padding-top:100px;text-align:center;">
    <h3>Student has been added.</h3><br><br>
    <a href="admin-panel.php" class="btn btn-outline-light">Return to admin panel</a>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
<?php
include("func.php");
if(isset($_POST['sub_stud'])){
  $sid=$_POST['sid'];
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $dept=$_POST['sec'];
  $class=$_POST['class'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $query="insert into student(fname,lname,sid,dept,class,email,contact) values ('$fname','$lname','$sid','$dept','$class','$email','$contact');";
  $query1 = "insert into fees(sid) values ('$sid');";
  $result1=mysqli_query($con,$query1);
  $result=mysqli_query($con,$query);
  if($result)
    header("Location:studadd.php");
  else
    header("Location:error.php");
}
?>