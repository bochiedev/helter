<!DOCTYPE html>
<html dir="ltr" lang="en-US">

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

<title>Contact  | Bropen</title>
</head>
<body class="stretched">

<div id="wrapper" class="clearfix">

  <?php include_once "include/_php/header.php";?>

  <?php include_once "include/_php/main_header.php";?>


<section id="content">
<div class="content-wrap" style="padding-top:0px;">
<div class="container clearfix">

<div class="col_full">
<div class="fancy-title title-dotted-border">
<h3>Send us an Email</h3>
</div>
<div class="contact-widget" data-alert-type="inline">
<div class="contact-form-result"></div>
<form class="nobottommargin" id="template-contactform" name="template-contactform" action="http://themes.semicolonweb.com/html/canvas/include/sendemail.php" method="post">
<div class="form-process"></div>
<div class="col_one_third">
<label for="template-contactform-name">Name <small>*</small></label>
<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
</div>
<div class="col_one_third">
<label for="template-contactform-email">Email <small>*</small></label>
<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
</div>
<div class="col_one_third col_last">
<label for="template-contactform-subject">Subject</label>
<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
</div>

<div class="clear"></div>
<div class="col_full">
<label for="template-contactform-message">Message <small>*</small></label>
<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
</div>
<div class="col_full hidden">
<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
</div>
<div class="col_full">
<button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d nomargin">Submit</button>
</div>
</form>
</div>
</div>


<div class="clear"></div>

</div>
</div>
</section>

<?php include "include/_php/footer.php";?>
