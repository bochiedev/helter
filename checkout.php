<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<!-- Mirrored from themes.semicolonweb.com/html/canvas/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jul 2018 11:53:56 GMT -->
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

<title>Checkout | Brospen Space</title>
<script>
		$(function() {
			$( "#processTabs" ).tabs({ show: { effect: "fade", duration: 400 } });
			$( ".tab-linker" ).click(function() {
				$( "#processTabs" ).tabs("option", "active", $(this).attr('rel') - 1);
				return false;
			});
		});
	</script>
</head>
<body class="stretched">

<div id="wrapper" class="clearfix">

  <?php include_once "include/_php/header.php";?>

  <?php include_once "include/_php/main_header.php";?>


<section id="content">
<div class="content-wrap" style="padding-top:0px;">
<div class="container clearfix">

  <div id="processTabs" class="ui-tabs ui-corner-all ui-widget ui-widget-content">
  <ul class="process-steps bottommargin clearfix ui-tabs-nav ui-corner-all ui-helper-reset ui-helper-clearfix ui-widget-header" role="tablist">
  <li role="tab" tabindex="0" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active ui-state-active" aria-controls="ptab1" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true">
  <a href="#ptab1" class="i-circled i-bordered i-alt divcenter ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1">1</a>
  <h5>Review Cart</h5>
  </li>
  <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="ptab2" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false">
  <a href="#ptab2" class="i-circled i-bordered i-alt divcenter ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2">2</a>
  <h5>Choose Payment Method</h5>
  </li>
  <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="ptab3" aria-labelledby="ui-id-3" aria-selected="false" aria-expanded="false">
  <a href="#ptab3" class="i-circled i-bordered i-alt divcenter ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-3">3</a>
  <h5>Complete Payment</h5>
  </li>
  <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="ptab4" aria-labelledby="ui-id-4" aria-selected="false" aria-expanded="false">
  <a href="#ptab4" class="i-circled i-bordered i-alt divcenter ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-4">4</a>
  <h5>Order Complete</h5>
  </li>
  </ul>
  <div>
  <div id="ptab1" aria-labelledby="ui-id-1" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="false">
  <div class="table-responsive">
  <table class="table cart">
  <thead>
  <tr>
  <th class="cart-product-remove">&nbsp;</th>
  <th class="cart-product-thumbnail">&nbsp;</th>
  <th class="cart-product-name">Product</th>
  <th class="cart-product-price">Unit Price</th>
  <th class="cart-product-quantity">Quantity</th>
  <th class="cart-product-subtotal">Total</th>
  </tr>
  </thead>
  <tbody>
  <tr class="cart_item">
  <td class="cart-product-remove">
  <a href="#" class="remove" title="Remove this item"><i class="icon-trash2"></i></a>
  </td>
  <td class="cart-product-thumbnail">
  <a href="#"><img src="images/shop/thumbs/small/dress-3.jpg" alt="Pink Printed Dress" width="64" height="64"></a>
  </td>
  <td class="cart-product-name">
  <a href="#">Pink Printed Dress</a>
  </td>
  <td class="cart-product-price">
  <span class="amount">$19.99</span>
  </td>
  <td class="cart-product-quantity">
  <div class="quantity clearfix">
  <input value="-" class="minus" type="button">
  <input step="1" min="1" name="quantity" value="1" title="Qty" class="qty" size="4" type="text">
  <input value="+" class="plus" type="button">
  </div>
  </td>
  <td class="cart-product-subtotal">
  <span class="amount">$19.99</span>
  </td>
  </tr>
  <tr class="cart_item">
  <td class="cart-product-remove">
  <a href="#" class="remove" title="Remove this item"><i class="icon-trash2"></i></a>
  </td>
  <td class="cart-product-thumbnail">
  <a href="#"><img src="images/shop/thumbs/small/shoes-2.jpg" alt="Checked Canvas Shoes" width="64" height="64"></a>
  </td>
  <td class="cart-product-name">
  <a href="#">Checked Canvas Shoes</a>
  </td>
  <td class="cart-product-price">
  <span class="amount">$24.99</span>
  </td>
  <td class="cart-product-quantity">
  <div class="quantity clearfix">
  <input value="-" class="minus" type="button">
  <input step="1" min="1" name="quantity" value="1" title="Qty" class="qty" size="4" type="text">
  <input value="+" class="plus" type="button">
  </div>
  </td>
  <td class="cart-product-subtotal">
  <span class="amount">$24.99</span>
  </td>
  </tr>
  </tbody>
  </table>
  </div>
  <a href="#" class="button button-3d nomargin fright tab-linker" rel="2">Checkout ⇒</a>
  </div>
  <div id="ptab2" aria-labelledby="ui-id-2" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" style="display: none;" aria-hidden="true">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, deleniti, atque soluta ratione blanditiis maxime at architecto laudantium eius eaque distinctio dolorem voluptatem nam ab molestias velit nemo. Illo, hic.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, modi, odit, aspernatur veritatis ipsum molestiae impedit iusto blanditiis voluptatem ab voluptas ullam expedita repellendus porro assumenda non deserunt repellat eius rem dolorem corporis temporibus voluptatibus ut! Quod, corporis, tempora, dolore, sint earum minus deserunt eveniet natus error magnam aliquam nemo.</p>
  <div class="line"></div>
  <a href="#" class="button button-3d nomargin tab-linker" rel="1">Previous</a>
  <a href="#" class="button button-3d nomargin fright tab-linker" rel="3">Pay Now</a>
  </div>
  <div id="ptab3" aria-labelledby="ui-id-3" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" style="display: none;" aria-hidden="true">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, sit, culpa, placeat, tempora quibusdam molestiae cupiditate atque tempore nemo tenetur facere voluptates autem aliquid provident distinctio beatae odio maxime pariatur eos ratione quae itaque quod. Distinctio, temporibus, cupiditate, eaque vero illo molestiae vel doloremque dolorum repellat ullam possimus modi dicta eum debitis ratione est in sunt et corrupti adipisci quibusdam praesentium optio laborum tempora ipsam aut cum consectetur veritatis dolorem.</p>
  <div class="line"></div>
  <a href="#" class="button button-3d nomargin tab-linker" rel="2">Previous</a>
  <a href="#" class="button button-3d nomargin fright tab-linker" rel="4">Complete Order</a>
  </div>
  <div id="ptab4" aria-labelledby="ui-id-4" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" style="display: none;" aria-hidden="true">
  <div class="alert alert-success">
  <strong>Thank You.</strong> Your order will be processed once we verify the Payment.
  </div>
  </div>
  </div>
  </div>
</div>
</div>
</section>



<?php include "include/_php/footer.php";?>
