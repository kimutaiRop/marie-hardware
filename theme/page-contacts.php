<!DOCTYPE html>

<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>Contacts | Marie Hardware</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Marie Hardware UI description" name="description">
  <meta content="Marie Hardware UI keywords" name="keywords">
  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <?php
  include('head.php');
  ?>
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="corporate">
    <?php
  include('header.php');
  $error = "";
  $success_message='';
  if($_SERVER["REQUEST_METHOD"] == "POST") {

      //get username and password sent from form 
      //make table called messages
      $name = mysqli_real_escape_string($db,$_POST['name']);
      $email = mysqli_real_escape_string($db,$_POST['email']); 
      $message = mysqli_real_escape_string($db,$_POST['message']); 
      
      $sql = "INSERT INTO `messages` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";
      if(mysqli_query($db,$sql)){
        $success_message="your mesage was sent succesfully, we shall get back to you soon";
      }else{
        $success_message ="your message was not sent please try again after some time";
      }
      // If result matched $myusername and $mypassword, table row must be 1 row
    
   }

  ?>

    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="javascript:;">Pages</a></li>
            <li class="active">Contacts</li>
        </ul>
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12">
            <h1>Contacts</h1>
            <div class="content-page">
              <div class="row">
              
                <div class="col-md-9 col-sm-9">
                  <h2>Contact Form</h2>
                  <?php 
                  echo "<span class='alert alert-succcess' style='color:green;'>", $success_message , "</span>";
                  ?>
                  <p>Write to us to make an order or an inquiry.</p>
                  
                  <!-- BEGIN FORM-->
                  <form  role="form" method="POST" action="">
                    <div class="form-group">
                      <label for="contacts-name">Name</label>
                      <input type="text" name="name" class="form-control" id="contacts-name">
                    </div>
                    <div class="form-group">
                      <label for="contacts-email">Email</label>
                      <input type="email" name="email" class="form-control" id="contacts-email">
                    </div>
                    <div class="form-group">
                      <label for="contacts-message">Message</label>
                      <textarea class="form-control" rows="5" name='message' id="contacts-message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="icon-ok"></i> Send</button>
                    <button type="button" class="btn btn-default">Cancel</button>
                  </form>
                  <!-- END FORM-->
                </div>

                <div class="col-md-3 col-sm-3 sidebar2">
                  <h2>Our Contacts</h2>
                  <address>
                    <p>Marie hardware store<br>
                    P.O BOX 0100-1500<br>
                    NAIROBI,KENYA<br>
                    TEL : 0707079023</p>
                    </div>
                  </address>
                  <address>
                    <strong>Email</strong><br>
                    <a href="mailto:info@email.com">info@mariehardware.com</a><br>
                    <a href="mailto:support@example.com">support@mariehardware.com</a>
                  </address>
                  <ul class="social-icons margin-bottom-40">
                    <li><a href="javascript:;" data-original-title="facebook" class="facebook"></a></li>
                    <li><a href="javascript:;" data-original-title="github" class="github"></a></li>
                    <li><a href="javascript:;" data-original-title="Goole Plus" class="googleplus"></a></li>
                    <li><a href="javascript:;" data-original-title="linkedin" class="linkedin"></a></li>
                    <li><a href="javascript:;" data-original-title="rss" class="rss"></a></li>
                  </ul>       
                </div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
      </div>
    </div>
<?php
include('footer.php')
?>
    
</body>
<!-- END BODY -->
</html>