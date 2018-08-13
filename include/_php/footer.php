
<footer id="footer" class="dark">

<div id="copyrights">
<div class="container clearfix">
<div class="col_half">
<img src="images/footer-logo.png" alt="" class="footer-logo">
Copyrights &copy; <?= Date('Y'); ?> All Rights Reserved by Bropen space.
</div>
<div class="col_half col_last tright">
<div class="copyrights-menu copyright-links fright clearfix">
<a href="#">Home</a>/<a href="#">About Us</a>/<a href="#">Services</a>/<a href="#">Trainings</a>/<a href="#">FAQs</a>/<a href="#">Contact Us</a>
</div>

</div>
</div>
</div>
</footer>
</div>

<div id="gotoTop" class="icon-angle-up"></div>

<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/functions.js"></script>
<script data-cfasync="false" src="../../cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script>


<script src="include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
<script src="include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
<script src="include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
<script src="include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
<script>

		var tpj=jQuery;
		tpj.noConflict();

		tpj(document).ready(function() {

			var apiRevoSlider = tpj('#rev_slider_ishop').show().revolution(
			{
				sliderType:"standard",
				jsFileLocation:"include/rs-plugin/js/",
				sliderLayout:"fullwidth",
				dottedOverlay:"none",
				delay:9000,
				navigation: {},
				responsiveLevels:[1200,992,768,480,320],
				gridwidth:1140,
				gridheight:500,
				lazyType:"none",
				shadow:0,
				spinner:"off",
				autoHeight:"off",
				disableProgressBar:"on",
				hideThumbsOnMobile:"off",
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				debugMode:false,
				fallbacks: {
					simplifyAll:"off",
					disableFocusListener:false,
				},
				navigation: {
					keyboardNavigation:"off",
					keyboard_direction: "horizontal",
					mouseScrollNavigation:"off",
					onHoverStop:"off",
					touch:{
						touchenabled:"on",
						swipe_threshold: 75,
						swipe_min_touches: 1,
						swipe_direction: "horizontal",
						drag_block_vertical: false
					},
					arrows: {
						style: "ares",
						enable: true,
						hide_onmobile: false,
						hide_onleave: false,
						tmp: '<div class="tp-title-wrap">	<span class="tp-arr-titleholder">{{title}}</span> </div>',
						left: {
							h_align: "left",
							v_align: "center",
							h_offset: 10,
							v_offset: 0
						},
						right: {
							h_align: "right",
							v_align: "center",
							h_offset: 10,
							v_offset: 0
						}
					}
				}
			});

			apiRevoSlider.bind("revolution.slide.onloaded",function (e) {
				SEMICOLON.slider.sliderParallaxDimensions();
			});

		}); //ready

    // FAQ tabs

    jQuery(document).ready(function($){
			var $faqItems = $('#faqs .faq');
			if( window.location.hash != '' ) {
				var getFaqFilterHash = window.location.hash;
				var hashFaqFilter = getFaqFilterHash.split('#');
				if( $faqItems.hasClass( hashFaqFilter[1] ) ) {
					$('#portfolio-filter li').removeClass('activeFilter');
					$( '[data-filter=".'+ hashFaqFilter[1] +'"]' ).parent('li').addClass('activeFilter');
					var hashFaqSelector = '.' + hashFaqFilter[1];
					$faqItems.css('display', 'none');
					if( hashFaqSelector != 'all' ) {
						$( hashFaqSelector ).fadeIn(500);
					} else {
						$faqItems.fadeIn(500);
					}
				}
			}

			$('#portfolio-filter a').click(function(){
				$('#portfolio-filter li').removeClass('activeFilter');
				$(this).parent('li').addClass('activeFilter');
				var faqSelector = $(this).attr('data-filter');
				$faqItems.css('display', 'none');
				if( faqSelector != 'all' ) {
					$( faqSelector ).fadeIn(500);
				} else {
					$faqItems.fadeIn(500);
				}
				return false;
		   });
		});

    // google map

    jQuery('#google-map').gMap({
      address: 'Melbourne, Australia',
      maptype: 'ROADMAP',
      zoom: 14,
      markers: [
        {
          address: "Melbourne, Australia",
          html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
          icon: {
            image: "images/icons/map-icon-red.png",
            iconsize: [32, 39],
            iconanchor: [32,39]
          }
        }
      ],
      doubleclickzoom: false,
      controls: {
        panControl: true,
        zoomControl: true,
        mapTypeControl: true,
        scaleControl: false,
        streetViewControl: false,
        overviewMapControl: false
      }
    });



	</script>


</body>

</html>
