<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="author" content="SemiColonWeb" />

<link href="../../../fonts.googleapis.com/css90e1.css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="css/dark.css" type="text/css" />
<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
<link rel="stylesheet" href="css/animate.css" type="text/css" />
<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
<link rel="stylesheet" href="css/responsive.css" type="text/css" />


<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/settings.css" media="screen" />
<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/layers.css">
<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/navigation.css">

<title>Home | Bropen</title>

</head>
<body class="stretched">

<div id="wrapper" class="clearfix">

<?php include_once "include/_php/header.php";?>

<?php include_once "include/_php/main_header.php";?>


<section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix">
<div class="slider-parallax-inner">
<div class="swiper-container swiper-parent">
<div class="swiper-wrapper">
<div class="swiper-slide dark" style="background-image: url('images/slider/swiper/1.jpg');">
<div class="container clearfix">
<div class="slider-caption slider-caption-center">
<h2 data-caption-animate="fadeInUp">Welcome to BropenSpace</h2>
<p class="d-none d-sm-block" data-caption-animate="fadeInUp" data-caption-delay="200">Training Courses</p>
</div>
</div>
</div>
<div class="swiper-slide dark">
<div class="container clearfix">
<div class="slider-caption slider-caption-center">
<h2 data-caption-animate="fadeInUp">Beautifully Flexible</h2>
<p class="d-none d-sm-block" data-caption-animate="fadeInUp" data-caption-delay="200">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
</div>
</div>

</div>
<a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>
</div>
</section>

<section id="content" style="background:#292929!important;">
<div class="content-wrap" style="padding:20px">
<div class="container clearfix" >

<div class="col_one_sixth">
  <label for="template-contactform-service">Category</label>
<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
<option value="">-- Select One --</option>
<option value="Customer Service">Customer Service</option>
<option value="Human Resource Management">Human Resource Management</option>
<option value="Health, Safety & Environment">Health, Safety & Environment</option>
<option value="Financing & Budgeting">Financing & Budgeting</option>
</select>
</div>

<div class="col_one_sixth">
  <label for="template-contactform-service">Venue</label>
  <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
  <option value="">-- Select One --</option>
  <option value="Wordpress">Nairobi</option>
  <option value="PHP / MySQL">Mombasa</option>
  <option value="HTML5 / CSS3">Kisumu</option>
  <option value="Graphic Design">Eldoret</option>
  </select>
</div>

<div class="col_one_sixth">
  <label for="template-contactform-service">Month</label>
<select  name="" class="sm-form-control">
<option value="">-- Select One --</option>
<option value="January">January</option>
<option value="February">February</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select>
</div>

<div class="col_one_sixth">
  <label for="template-contactform-service">Year</label>
<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
<option value="">-- Select One --</option>
<option value="<?= Date('Y'); ?>"><?= Date('Y'); ?></option>
<option value="<?= Date('Y'); ?>"><?= Date('Y')+1; ?></option>
<option value="<?= Date('Y'); ?>"><?= Date('Y')+2; ?></option>

</select>
</div>

<div class="col_one_sixth">
  <label for="template-contactform-service">Duration</label>
<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
<option value="">-- Select One --</option>
<!-- <option value="Wordpress">1-Day</option> -->
<option value="2-Day">2-Day</option>
<option value="3-Day">3-Day</option>
<option value="4-Day">4-Day</option>
<option value="5-Day">5-Day</option>
</select>
</div>
<div class="col_one_sixth col_last">
  <label for="template-contactform-service">&nbsp; &nbsp; &nbsp;</label>


  <button type="button" class="button button-mini btn-sm btn-block">Search</button>
</div>

</div>
</div>
</section>


<section id="content" >
<div class="content-wrap" >
<div class="container clearfix" >


</div>
</div>
</section>


<?php include "include/_php/footer.php";?>
