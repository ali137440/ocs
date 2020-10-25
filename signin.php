<?php
include('dbcon.php');
if(isset($_POST['submit'])){
	
	$email=$_POST['email'];
	$password=$_POST['password'];
  $query="SELECT * FROM `singup` WHERE `email`='$email' AND `password`='$password'";
  $run=mysqli_query($con,$query);
  if(mysqli_fetch_assoc($run)){
     $_SESSION['email']=$email;
    ?><script type="text/javascript">alert('login success!');</script><?php
    header('location:student_dashboard.php');
  }
  else{
    ?><script type="text/javascript">alert('login Not success!');</script><?php
     header('location:student.php');
  }

}
?>