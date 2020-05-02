<?php
session_start();
$con=mysqli_connect("localhost","root","","smsdb");
if(isset($_POST['login_submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from logindb where username='$username' and password='$password';";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		$_SESSION['username']=$username;
		header("Location:admin-panel.php");
	}
	else
		header("Location:error.php");
}
if(isset($_POST['del_teach']))
{
  $tid=$_POST['tid'];
	$query="delete from teacher where tid='$tid';";
  $result=mysqli_query($con,$query);
  $query1="delete from salary where tid='$tid';";
  $result1=mysqli_query($con,$query1);
  $query2="delete from subject where tid='$tid';";
	$result2=mysqli_query($con,$query2);
	if($result)
        header("Location:admin-panel.php");
    else{
        header("Location:delteach.php");
    }
}
if(isset($_POST['admin_del']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  if($username == $_SESSION['username'])
    return header("Location:error.php");
  $query="delete from logindb where username='$username' and password='$password';";
  $result = mysqli_query($con, $query);
  if($result){
    header("Location:admin-panel.php");
  }
  else
    header("Location:error.php");
}
if(isset($_POST['del_stud']))
{
  $sid=$_POST['sid'];
  $dept = $_POST['sec'];
  $class = $_POST['class'];
  $query="delete from student where sid='$sid' and dept='$dept' and class='$class';";
  $query1="delete from fees where sid='$sid';";
  $result1=mysqli_query($con,$query1);
	$result=mysqli_query($con,$query);
	if($result)
        header("Location:admin-panel.php");
    else{
        header("Location:delstud.php");
    }
}
if(isset($_POST['admin_new']))
{
    $username=$_POST['username'];
	$password=$_POST['password'];
	$query="insert into logindb(username,password) values('$username','$password');";
	$result=mysqli_query($con,$query);
	if($result)
        header("Location:admin-panel.php");
    else{
        header("Location:error.php");
    }
}
if(isset($_POST['stud_fee']))
{
  $sid=$_POST['sid'];
  $fees=$_POST['fees'];
  $query="update fees set fees='$fees' where sid='$sid';";
  $result=mysqli_query($con,$query);
  if($result)
    header("Location:fees.php");
  else
    header("Location:error.php");
}
if(isset($_POST['update_class1']))
{
  $tid=$_POST['tid'];
  $class1=$_POST['class1'];
	$query="update teacher set class1='$class1' where tid='$tid';";
	$result=mysqli_query($con,$query);
	if($result)
    header("Location:updated.php");
  else
    header("Location:error.php");
}
if(isset($_POST['update_class2']))
{
  $tid=$_POST['tid'];
  $class1=$_POST['class2'];
	$query="update teacher set class2='$class1' where tid='$tid';";
	$result=mysqli_query($con,$query);
	if($result)
    header("Location:updated.php");
  else
    header("Location:error.php");
}
if(isset($_POST['update_class3']))
{
  $tid=$_POST['tid'];
  $class1=$_POST['class3'];
	$query="update teacher set class3='$class1' where tid='$tid';";
	$result=mysqli_query($con,$query);
	if($result)
    header("Location:updated.php");
  else
    header("Location:error.php");
}
if(isset($_POST['update_class4']))
{
  $tid=$_POST['tid'];
  $class1=$_POST['class4'];
	$query="update teacher set class4='$class1' where tid='$tid';";
	$result=mysqli_query($con,$query);
	if($result)
    header("Location:updated.php");
  else
    header("Location:error.php");
}
if(isset($_POST['update_stud']))
{
  $sid=$_POST['sid'];
  $dept=$_POST['sec'];
  $class=$_POST['class'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
	$query="update student set dept='$dept', class='$class', email='$email', contact='$contact' where sid='$sid';";
	$result=mysqli_query($con,$query);
	if($result)
    header("Location:updated.php");
  else
    header("Location:error.php");
}
if(isset($_POST['subject_add']))
{
  $tid=$_POST['tid'];
  $subject=$_POST['subject'];
  $class=$_POST['class'];
  $sec=$_POST['sec'];
	$query="insert into subject (tid,class,section,subject) values('$tid','$class','$sec','$subject');";
	$result=mysqli_query($con,$query);
	if($result)
    header("Location:updated.php");
  else
    header("Location:error.php");
}
if(isset($_POST['add_room']))
{
  $rno=$_POST['rno'];
	$query="insert into room (rno) values('$rno');";
	$result=mysqli_query($con,$query);
	if($result)
    header("Location:updated.php");
  else
    header("Location:error.php");
}
if(isset($_POST['del_room']))
{
  $rno=$_POST['rno'];
	$query="delete from room where rno='$rno';";
	$result=mysqli_query($con,$query);
	if($result)
    header("Location:updated.php");
  else
    header("Location:error.php");
}
if(isset($_POST['assign_room']))
{
  $rno=$_POST['rno'];
  $class=$_POST['class'];
  $timing=$_POST['timing'];
  $query1 = "select * from room where rno='$rno';";
  $result1=mysqli_query($con,$query1);
  while($row=mysqli_fetch_array($result1)){
    $time=$row[$timing];
  }
  if($time=='empty'){
	$query="update room set $timing='$class' where rno='$rno';";
	$result=mysqli_query($con,$query);
	if($result)
    header("Location:updated.php");
  else
    header("Location:error.php");
  }
  else
    header("Location:error.php");
}
if(isset($_POST['up_salary'])){
  $tid=$_POST['tid'];
  $salary=$_POST['salary'];
  $cabin=$_POST['cabin'];
  $query="update salary set salary='$salary', cabin='$cabin' where tid='$tid';";
  $result=mysqli_query($con,$query);
  if($result)
    header("Location:updated.php");
  else
    header("Location:error.php");
}

function display_admin_panel(){
    echo '<!DOCTYPE html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
      </head>
      <body id="ab1">';

        include("navbar.php");
    echo'
        <div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;">
          <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-4">
              <div class="card">
                <img src="images/System.jpg" class="card-img-top">
                <div class="card-body">
                  <center>
                  <h5>Create New Admin</h5><br>
                  <form class="form-group" method="post" action="func.php">
                    <div class="row">
                      <div class="col-md-4"><label>Username: </label></div>
                      <div class="col-md-8"><input type="text" name="username" class="form-control" placeholder="Enter Username" required/></div><br><br>
                      <div class="col-md-4"><label>Password: </label></div>
                      <div class="col-md-8"><input type="password" class="form-control" name="password" placeholder="Enter Password" required/></div><br><br><br>
                    </div>
                    <input type="submit" id="inputbtn" name="admin_new" value="Create New" class="btn btn-primary">
                    <input type="submit" id="inputbtn" name="admin_del" value="Delete Admin" class="btn btn-primary">
                  </form>
                </center>
                </div>
              </div>
            </div>
            <div class="col-md-2"></div>
             
          </div>
        </div>
    
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
      </body>
    </html>';
}

?>