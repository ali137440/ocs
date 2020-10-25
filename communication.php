
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
    <a class="nav-link"  href="student_dashboard.php"  style="font-size: 13px">Personal Details</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  active" href="communication.php" style="font-size: 13px">Communication Details</a>
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
<!--
   <div class="row">
      <button type="submit"  name="otp" class="btn btn-success" style="margin-left: 20px">Generat OTP</button>  &nbsp;&nbsp;&nbsp;&nbsp;<input type="otp" name="otp" placeholder="Enter your OTP"> &nbsp;&nbsp;&nbsp;<button type="submit"  name="var" class="btn btn-info">Verified OTP</button>  
    </div><br>-->
 <div class="form-group">
    <label for="exampleInputEmail1">Address<span style="color :red;">*</span></label>
    <input type="text" class="form-control" name="address" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your parmanent address"required="required"  value="<?php echo  @$_POST['address'];?>">
    
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">City<span style="color :red;">*</span></label>
    <input type="text" class="form-control" name="city" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your parmanent city name"required="required"  value="<?php echo  @$_POST['city'];?>">
    
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">District<span style="color :red;">*</span></label>
    <select name="district" id="distO" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="required" value="<?php echo  @$_POST['district'];?>">
                            <option value="0">- SELECT FROM THE LIST -</option>

                            <option value="20">ALIPURDUAR</option>

                            <option value="13">BANKURA</option>

                            <option value="08">BIRBHUM</option>

                            <option value="03">COOCH BEHAR</option>

                            <option value="05">DAKSHIN DINAJPUR</option>

                            <option value="01">DARJEELING</option>

                            <option value="12" selected="selected">HOOGHLY</option>

                            <option value="16">HOWRAH</option>

                            <option value="02">JALPAIGURI</option>

                            <option value="24">JHARGRAM</option>

                            <option value="21">KALIMPONG</option>

                            <option value="17">KOLKATA</option>

                            <option value="06">MALDAH</option>

                            <option value="07">MURSHIDABAD</option>

                            <option value="10">NADIA</option>

                            <option value="11">NORTH 24 PARGANAS</option>

                            <option value="22">PASCHIM BARDHAMAN</option>

                            <option value="23">PURBA BARDHAMAN</option>

                            <option value="15">PASCHIM MEDINIPUR</option>

                            <option value="19">PURBA MEDINIPUR</option>

                            <option value="14">PURULIA</option>

                            <option value="18">SOUTH 24 PARGANAS</option>

                            <option value="04">UTTAR DINAJPUR</option>

                        </select>
    
    
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Pincode<span style="color :red;">*</span></label>
     <input type="text" class="form-control" name="pin" id="exampleInputEmail1" maxlength="6" aria-describedby="emailHelp" placeholder="Enter your pincode/zip code"required="required"  value="<?php echo  @$_POST['pin'];?>">
    
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">State<span style="color :red;">*</span></label>
    <select name="state" id="stateB" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="required" value="<?php echo  @$_POST['state'];?>">



                            <option value="WEST BENGAL" selected>WEST BENGAL</option>
                            <option value="other">Others</option>
                          </select>
    
    </div>
      <div class="form-group">
    <label for="exampleInputEmail1">Country<span style="color :red;">*</span></label>
     <select name="country" id="stateB" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="required" value="<?php echo  @$_POST['country'];?>">



                            <option value="INDIA" selected>INDIA</option>
                            <option value="other">Others</option>
                          </select>
    </div>
     
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




