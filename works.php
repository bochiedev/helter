<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<!-- Mirrored from themes.semicolonweb.com/html/canvas/shop-1-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jul 2018 11:52:29 GMT -->
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

<title>Work | Bropen Space</title>
</head>
<body class="stretched">

<div id="wrapper" class="clearfix">


  <?php include_once "include/_php/header.php";?>

  <?php include_once "include/_php/main_header.php";?>




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


<section id="content">
<div class="content-wrap" style="padding-top:0px;">
<div class="container clearfix">
<div class="postcontent nobottommargin col_last">




<h4><a href="training_detail.php">Month One</a></h4>


<div class="table-responsive">
<table class="table">
<thead>
<tr>
<th>#</th>
<th>Title</th>
<th>Date</th>
<th>City</th>
<th>Fee</th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td>BHTIA01</td>
<td><a href="training_detail.php">Training 1</a></td>
<td><?= date("Y-m-d", time()) ." <b>to</b> ". date("Y-m-d", time()); ?></td>
<td>Nairobi</td>
<td>Kshs 3000</td>
<td><a href="training_detail.php" class="button button-mini">View More</a></td>
</tr>
<tr>
<td>BYUIA02</td>
<td><a href="training_detail.php">Training 2</a></td>
<td><?= date("Y-m-d", time()) ." <b>to</b> ". date("Y-m-d", time()); ?></td>
<td>Mombasa</td>
<td>Kshs 2000</td>
<td><a href="training_detail.php" class="button button-mini">View More</a></td>
</tr>
<tr>
<td>BHJSA</td>
<td><a href="training_detail.php">Training 3</a></td>
<td><?= date("Y-m-d", time()) ." <b>to</b> ". date("Y-m-d", time()); ?></td>
<td>Kisumu</td>
<td>Kshs 2899</td>
<td><a href="training_detail.php" class="button button-mini">View More</a></td>
</tr>
</tbody>
</table>
</div>




</div>

<div class="sidebar nobottommargin">
<div class="sidebar-widgets-wrap">
<div class="widget widget_links clearfix">
<h4>Training Categories</h4>
<ul>
<li><a href="#">Categoy 1</a></li>
</ul>
</div>


</div>
</div>
</div>
</div>
</section>
<?php include "include/_php/footer.php";?>
