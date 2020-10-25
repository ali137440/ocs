<?php
include('dbcon.php');
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$uname=$_POST['uname'];
	$enrollmentno=$_POST['enrollmentno'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	if(!(preg_match("/^[a-zA-Z -]*$/", $name))){
      ?><script type="text/javascript">alert('First Name invalied');</script><?php
    }
     elseif (!(preg_match("/^[A-Za-z][A-Za-z0-9]{5,21}$/", $uname))) {
      ?><script type="text/javascript">alert('User Name is invalied');</script><?php
    }
     
    elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
      ?><script type="text/javascript">alert('Email id inValied');</script><?php
      
    }
     elseif ($password!==$cpassword) {
      ?><script type="text/javascript">alert('Password are Not Match');</script><?php
    }

    else{
    	 $query="INSERT INTO `singup`(`name`, `uname`, `enroll_no`, `email`, `password`) VALUES ('$name','$uname','$enrollmentno','$email','$password')";
      $run=mysqli_query($con,$query);
      if($run==true){
      	?><script type="text/javascript">alert('insert successfully');</script><?php
           header('location:student.php');
      }

    }
}
?>