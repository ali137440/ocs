
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
    <a class="nav-link  " href="communication.php" style="font-size: 13px">Communication Details</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="academic.php" style="font-size: 13px">Academic Details</a>
  </li>
   <li class="nav-item">
    <a class="nav-link " href="document.php" style="font-size: 13px">Documents Upload</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="Confirm.php" style="font-size: 13px">Confirm Page</a>
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
      <div  class="card ">
        <div class="card-body">
          

       <form action=".php" method="post" enctype="multipart/form-data">
          
               
                <div class="heading">
                    <h3>Secondary Details:</h3>
                </div>
                 <div class="form-group">
    <label for="exampleInputEmail1">Name of Board or University<span style="color :red;">*</span></label>
    <select name="state" id="stateB" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="required" value="<?php echo  @$_POST['state'];?>">



                            <option value="" selected>-SELECT FROM THE LIST- </option>
                            <option value="">W.B.B.S.E</option>
                             <option value="">I.C.S.C</option>
                              <option value="">I.S.C</option>
                               <option value="">C.B.S.C</option>
                          </select>
    
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Year of Passing <span style="color :red;">*</span></label>
    <select name="state" id="stateB" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="required" value="<?php echo  @$_POST['state'];?>">



                            <option value="" selected>-SELECT FROM THE LIST- </option>
                            <option value="">2005</option>
                             <option value="">2006</option>
                              <option value="">2007</option>
                               <option value="">2008</option>
                                <option value="">2009</option>
                             <option value="">2010</option>
                              <option value="">2011</option>
                               <option value="">2012</option>
                                <option value="">2013</option>
                             <option value="">2014</option>
                              <option value="">2015</option>
                               <option value="">2016</option>
                          </select>
    
    </div>

 <div class="form-group">
    <label for="exampleInputEmail1">Percentage of Marks<span style="color :red;">*</span></label>
     <input type="text" class="form-control" name="pin" id="exampleInputEmail1" maxlength="6" aria-describedby="emailHelp" placeholder="Enter your Aggregate Marks"required="required"  value="<?php echo  @$_POST['pin'];?>">
    
    </div>
     <div class="heading">
                    <h3> Higher Secondary Details:</h3>
                </div>
                 <div class="form-group">
    <label for="exampleInputEmail1">Name of Board or University<span style="color :red;">*</span></label>
    <select name="state" id="stateB" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="required" value="<?php echo  @$_POST['state'];?>">



                            <option value="" selected>-SELECT FROM THE LIST- </option>
                            <option value="">W.B.B.S.E</option>
                             <option value="">I.C.S.C</option>
                              <option value="">I.S.C</option>
                               <option value="">C.B.S.C</option>
                          </select>
    
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Year of Passing <span style="color :red;">*</span></label>
    <select name="state" id="stateB" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="required" value="<?php echo  @$_POST['state'];?>">



                            <option value="" selected>-SELECT FROM THE LIST- </option>
                            <option value="">2005</option>
                             <option value="">2006</option>
                              <option value="">2007</option>
                               <option value="">2008</option>
                                <option value="">2009</option>
                             <option value="">2010</option>
                              <option value="">2011</option>
                               <option value="">2012</option>
                                <option value="">2013</option>
                             <option value="">2014</option>
                              <option value="">2015</option>
                               <option value="">2016</option>
                                <option value="">2017</option>
                              <option value="">2018</option>
                               <option value="">2019</option>
                          </select>
    
    </div>

 <div class="form-group">
    <label for="exampleInputEmail1">Percentage of Marks<span style="color :red;">*</span></label>
     <input type="text" class="form-control" name="pin" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Aggregate Marks"required="required"  value="<?php echo  @$_POST['pin'];?>">
    
    </div>
          <div class="heading">
                    <h3> Joint Entrance Exam:</h3>
                </div>         
               <div class="form-group">
    <label for="exampleInputEmail1">Enrollment No<span style="color :red;">*</span></label>
     <input type="text" class="form-control" name="pin" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Enrollment number "required="required"  value="<?php echo  @$_POST['pin'];?>">
    
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Ranks<span style="color :red;">*</span></label>
     <input type="text" class="form-control" name="pin" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your General Ranks"required="required"  value="<?php echo  @$_POST['pin'];?>">
    
    </div>
    <div class="heading">
                    <h3> Enter your College Preferences:</h3>
                </div>         
               <div class="form-group">
   <label for="exampleInputEmail1">Preference 1:<span style="color :red;">*</span></label>
    <select name="state" id="stateB" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="required" value="<?php echo  @$_POST['state'];?>">



                            <option value="" selected>-SELECT FROM THE LIST- </option>
                            <option value="">Kalyani Government Engneering College</option>
                             <option value="">Jadavpur University</option>
                              <option value="">RCC Institute Of Technology</option>
                               <option value="">University Of Kalyani</option>
                                <option value="">University Of Calcutta</option>
                             <option value="">Techno India</option>
                              <option value="">Vidyasagar University of Technology</option>
                               <option value="">Heriteg College</option>
                          </select>
    </div>
    <div class="form-group">
   <label for="exampleInputEmail1">preference 2:<span style="color :red;">*</span></label>
    <select name="state" id="stateB" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="required" value="<?php echo  @$_POST['state'];?>">



                             <option value="" selected>-SELECT FROM THE LIST- </option>
                            <option value="">Kalyani Government Engneering College</option>
                             <option value="">Jadavpur University</option>
                              <option value="">RCC Institute Of Technology</option>
                               <option value="">University Of Kalyani</option>
                                <option value="">University Of Calcutta</option>
                             <option value="">Techno India</option>
                              <option value="">Vidyasagar University of Technology</option>
                               <option value="">Heriteg College</option>
                          </select>
    </div>
    <div class="form-group">
   <label for="exampleInputEmail1">preference 3:<span style="color :red;">*</span></label>
    <select name="state" id="stateB" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="required" value="<?php echo  @$_POST['state'];?>">



                           <option value="" selected>-SELECT FROM THE LIST- </option>
                            <option value="">Kalyani Government Engneering College</option>
                             <option value="">Jadavpur University</option>
                              <option value="">RCC Institute Of Technology</option>
                               <option value="">University Of Kalyani</option>
                                <option value="">University Of Calcutta</option>
                             <option value="">Techno India</option>
                              <option value="">Vidyasagar University of Technology</option>
                               <option value="">Heriteg College</option>
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




