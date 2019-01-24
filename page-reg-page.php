<!DOCTYPE>
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>Create new account | Marie Hardware</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Marie Hardware UI description" name="description">
  <meta content="Marie Hardware UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <?php
  include('head.php')
  ?>
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="corporate">
  <?php
    // make table called users with fields idusers, username, first_name, last_name.
   include("header.php");
   $error = "";
   if($_SERVER["REQUEST_METHOD"] == "POST") {

      //get username and password sent from form 
      
      $first_name = mysqli_real_escape_string($db,$_POST['first_name']);
      $last_name = mysqli_real_escape_string($db,$_POST['last_name']);
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword_1 = mysqli_real_escape_string($db,$_POST['password1']); 
      $mypassword_2= mysqli_real_escape_string($db,$_POST['password2']);
      if($mypassword_1 == $mypassword_1){
        $mypassword = $mypassword_1;
         $sql = "INSERT INTO `users` (`username`, `password`, `first_name`, `last_name`) VALUES ('$myusername', '$mypassword', '$first_name', '$last_name')";
         mysqli_query($db,$sql);
         header("location: index.php");
      }
   }
?>
    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="javascript:;">Pages</a></li>
            <li class="active">Create new account</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-3 col-sm-3">
            <ul class="list-group margin-bottom-25 sidebar-menu">
              <li class="list-group-item clearfix"><a href="page-reg-page.php"><i class="fa fa-angle-right"></i> Login/Register</a></li>
              <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Restore Password</a></li>
              <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> My account</a></li>
              <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Newsletter</a></li>
            </ul>
          </div>
          <!-- END SIDEBAR -->

          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-9">
            <h1>Create an account</h1>
            <div class="content-form-page">
              <div class="row">
                <div class="col-md-7 col-sm-7">
                  <form class="form-horizontal" role="form" method="POST" action="">
                    <fieldset>
                      <legend>Your personal details</legend>
                      <div class="form-group">
                        <label for="firstname" class="col-lg-4 control-label">First Name <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" required name="first_name" class="form-control" id="firstname">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="lastname" class="col-lg-4 control-label">Last Name <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" required name="last_name" class="form-control" id="lastname">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="col-lg-4 control-label">Email <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" required name="username" class="form-control" id="email">
                        </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>Your password</legend>
                      <div class="form-group">
                        <label for="password" class="col-lg-4 control-label">Password <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="password" required name="password1" class="form-control" id="password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="confirm-password" class="col-lg-4 control-label">Confirm password <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="password" required name="password2" class="form-control" id="confirm-password">
                        </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>Newsletter</legend>
                      <div class="checkbox form-group">
                        <label>
                          <div class="col-lg-4 col-sm-4">Sign up for Newsletter</div>
                          <div class="col-lg-8 col-sm-8">
                            <input type="checkbox">
                          </div>
                        </label>
                      </div>
                    </fieldset>
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">                        
                        <button type="submit" class="btn btn-primary">Create an account</button>
                        <button type="button" class="btn btn-default">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-md-4 col-sm-4 pull-right">
                  <div class="form-info">
                    <h2><em>Important</em> Information</h2>
                    <p>Please use valid details only</p>

                    <p>This will help us serve you better.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>
<?php
include('footer.php')
?>
</body>
<!-- END BODY -->
</.php>