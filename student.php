
<?php
session_start();
if(isset($_SESSION['email'])){
    echo"you are already login";
    exit;
}
?>
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

  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  </head>
  <body>
    <div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">

        <h1 style="font-family: Times New Roman">Online Counselling system</h1>
        <!--<a href="#"style="text-decoration: none;text-align: right !important;">ADMIN</a>-->


    </div>
    <form action="#" method="post">
      <fieldset>
       
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
    
  <div>

 <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" action="signin.php" method="post">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="email" class="form-control" name="email" value="" placeholder="Your email id Please">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password Please">
                                    </div>
                                    

                                
                           <!-- <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>-->


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                         <button id="btn-signup" type="submit" name="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Login </button>
                                      
                                      

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>
       
       <?php
      if(isset($_SESSION['email'])){
          $_SESSION['email']=$_POST['email'];
      }?>

        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form" action="signup.php" method="post">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                                
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Student Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" placeholder="Full Name" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">UserName</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="uname" placeholder="User Name"  required="required">
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Enrollment No</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="enrollmentno" placeholder="Enter your Enroll no "  required="required">
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address"  required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" placeholder="Password"  required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Conform Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="cpassword" placeholder="Retype-Password"  required="required">
                                    </div>
                                </div>
                                    
                                

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="submit" name="submit" class="btn btn-info"> &nbsp Sign Up</button>
                                        <!--<span style="margin-left:8px;">or</span>  -->
                                    </div>
                                </div>
                                <!--
                                <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                                    
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
                                    </div>                                           
                                        
                                </div>-->
                                
                                
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 

    </div>


</div>
  
  
    
  
  </div>
</div>
   
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


    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>




