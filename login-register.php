<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<!-- Mirrored from themes.semicolonweb.com/html/canvas/login-register-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jul 2018 11:43:44 GMT -->
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="SemiColonWeb" />

<link href="../../../fonts.googleapis.com/css90e1.css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="css/dark.css" type="text/css" />
<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
<link rel="stylesheet" href="css/animate.css" type="text/css" />
<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
<link rel="stylesheet" href="css/responsive.css" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<title>Login | Bropen Space</title>
</head>
<body class="stretched">

<div id="wrapper" class="clearfix">

  <?php include_once "include/_php/header.php";?>

  <?php include_once "include/_php/main_header.php";?>

<section id="content">
<div class="content-wrap" style="padding-top:0px;">
<div class="container clearfix">
<div class="tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 500px;">
<ul class="tab-nav tab-nav2 center clearfix">
<li class="inline-block"><a href="#tab-login">Login</a></li>
<li class="inline-block"><a href="#tab-register">Register</a></li>
</ul>
<div class="tab-container">
<div class="tab-content clearfix" id="tab-login">
<div class="card nobottommargin">
<div class="card-body" style="padding: 40px;">
<form id="login-form" name="login-form" class="nobottommargin" action="#" method="post">
<h3>Login to your Account</h3>
<div class="col_full">
<label for="login-form-username">Username:</label>
<input type="text" id="login-form-username" name="login-form-username" value="" class="form-control" />
</div>
<div class="col_full">
<label for="login-form-password">Password:</label>
<input type="password" id="login-form-password" name="login-form-password" value="" class="form-control" />
</div>
<div class="col_full nobottommargin">
<button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
<a href="#" class="fright">Forgot Password?</a>
</div>
</form>
</div>
</div>
</div>
<div class="tab-content clearfix" id="tab-register">
<div class="card nobottommargin">
<div class="card-body" style="padding: 40px;">
<h3>Register for an Account</h3>
<form id="register-form" name="register-form" class="nobottommargin" action="#" method="post">
<div class="col_full">
<label for="register-form-name">Name:</label>
<input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" />
</div>
<div class="col_full">
<label for="register-form-email">Email Address:</label>
<input type="text" id="register-form-email" name="register-form-email" value="" class="form-control" />
</div>
<div class="col_full">
<label for="register-form-username">Choose a Username:</label>
<input type="text" id="register-form-username" name="register-form-username" value="" class="form-control" />
</div>
<div class="col_full">
<label for="register-form-phone">Phone:</label>
<input type="text" id="register-form-phone" name="register-form-phone" value="" class="form-control" />
</div>
<div class="col_full">
<label for="register-form-password">Choose Password:</label>
<input type="password" id="register-form-password" name="register-form-password" value="" class="form-control" />
</div>
<div class="col_full">
<label for="register-form-repassword">Re-enter Password:</label>
<input type="password" id="register-form-repassword" name="register-form-repassword" value="" class="form-control" />
</div>
<div class="col_full nobottommargin">
<button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<?php include "include/_php/footer.php";?>
