
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>Online Counselling System</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/layout.css" type="text/css">
<link rel="stylesheet" href="styles/style.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
<script src="assets/vendors/jquery.min.js"></script>

 <script src="assets/owlcarousel/owl.carousel.js"></script>
 <script src="assets/eocjs-newsticker.js"></script>
 <script src="assets/eocjs-newsticker.css"></script>
 
  <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">

  
  </head>
  <body>
    <div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">

        <h1><a href="#">Online Counselling system </a></h1>
        <!--<a href="#" style="text-decoration: none;text-align: right !important;">ADMIN</a>-->


    </div>
    <form action="#" method="post">
      <fieldset>
        <legend>Search:</legend>
        <input type="text" value="Search Our Website&hellip;" onFocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;">
        <input type="submit" id="sf_submit" value="submit">
      </fieldset>
    </form>
    <nav>
      <ul>
        <li><a href="index.php" style="text-decoration: none">HOME</a></li>
        <li><a href="student.php"style="text-decoration: none">STUDENTS</a></li>
        <li><a href="collegeinfo.php"style="text-decoration: none">COLLEGE INFO</a></li>
        <li><a href="howapply.php"style="text-decoration: none">HOW TO APPLY</a></li>
        <li><a href="notice.php"style="text-decoration: none">NOTICE</a></li>
        <li><a href="contact.php"style="text-decoration: none">CONTACT</a></li>
        <li><a href="about.php"style="text-decoration: none">ABOUT</a></li>
       
      </ul>
    </nav>
  </header>
</div>
<!-- content -->

<div class="wrapper row2">
  <div id="container" class="clear">
    
  <div style="padding-left:150px;">
<div class="rown">
<h1>Counseling Registration</h1>
</div>
<hr class="line1">
<nav>
<ul class="nav nav-tabs" id="myTab" >
  <li class="nav-item">
    <a class="nav-link active"  href="student_dashboard.php"  style="font-size: 13px">Personal Details</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="communication.php" style="font-size: 13px">Communication Details</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="academic.php" style="font-size: 13px">Academic Details</a>
  </li>
   <li class="nav-item">
    <a class="nav-link " href="document.php" style="font-size: 13px">Documents Upload</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Confirm.php" style="font-size: 13px">Confirm Page</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="feepayment.php" style="font-size: 13px">Fee Payment</a>
  </li>
  
 
</ul>

</nav>
<br>
<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-10">
      <div class="card ">
        <div class="card-body">
          <form action=".php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">First Name<span style="color :red;">*</span></label>
    <input type="text" class="form-control" name="fname" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your First Name"required="required" value="<?php echo  @$_POST['fname'];?>">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last Name<span style="color :red;">*</span></label>
    <input type="text" class="form-control" name="lname" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Last Name"required="required"  value="<?php echo  @$_POST['lname'];?>">
    
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Fathers Name<span style="color :red;">*</span></label>
    <input type="text" class="form-control" name="fathername" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Last Name"required="required"  value="<?php echo  @$_POST['lname'];?>">
    
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Mothers Name<span style="color :red;">*</span></label>
    <input type="text" class="form-control" name="mname" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Last Name"required="required"  value="<?php echo  @$_POST['lname'];?>">
    
  </div>
  
  
  <div class="form-group">
    <label for="exampleInputEmail1">Email Address<span style="color :red;">*</span></label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email Address"required="required"  value="<?php echo  @$_POST['email'];?>">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Date of Birth<span style="color :red;">*</span></label>
    <input type="text" class="form-control" name="dob" id="date" aria-describedby="emailHelp"required="required"  value="<?php echo  @$_POST['dob'];?>">
    
  </div>
   
  <label for="exampleInputEmail1">Gender<span style="color :red;">*</span></label> &nbsp;&nbsp;&nbsp;&nbsp;
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Transgender">
  <label class="form-check-label" for="inlineRadio3">Transgender</label>
</div>

  <div class="form-group">
    <label for="exampleInputEmail1">Mobile No<span style="color :red;">*</span></label>
    <input type="text" class="form-control" name="phone" id="exampleInputEmail1" maxlength="10" aria-describedby="emailHelp" placeholder="Enter your phone no"required="required"  value="<?php echo  @$_POST['phone'];?>">
    
  </div><!--
   <div class="row">
      <button type="submit"  name="otp" class="btn btn-success" style="margin-left: 20px">Generat OTP</button>  &nbsp;&nbsp;&nbsp;&nbsp;<input type="otp" name="otp" placeholder="Enter your OTP"> &nbsp;&nbsp;&nbsp;<button type="submit"  name="var" class="btn btn-info">Verified OTP</button>  
    </div><br>-->
    <br>
                <input type="checkbox" name="name" value="on">   All the above details are true best of my knowlwdge and I Agree all the term &amp; Condition.<br><br>

  <div class="container">
     <div class="row">
        <div class="col d-flex justify-content-center">
      <button type="submit"  name="submit" class="btn btn-primary">Next</button>
         </div>
      </div>
     </div>
  
</form>
</div>
</div>
</div>
</div>
</div>

<hr class="line1">

</div>
  
  
    
  
  </div></div>
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->

<!-- Footer -->
<div class="wrapper row3">
  <footer id="footer" class="clear">
     <p class="fl_left ">Copyright &copy; 2020 - All Rights Reserved - <a href="#">Kinghaider</a></p><br>
    <p class="fl_right">Created By <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">Haider Ali</a></p>
    <strong>Telephone : </strong>(033) 2683 5790 , (033) 2685 5001,<br> <strong>Fax :</strong> (033) 2685 5001.<br>
<strong>Website :</strong> <a href="#" >www.onlinecounselling.org</a><br/>

   
  </footer>
</div>

<script type="text/javascript" src="jquery/jquery.js"></script>
<script type="text/javascript" src="jquaryui/jquery-ui.js"></script>


    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>




