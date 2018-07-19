<?php
/*
Template Name: Front Page
*/

get_header(); ?>


<style type="text/css">
	
	.intro-left{
		height:60rem;
		background-color: yellow;
	}
	.intro-right{
		height: 60rem;
		background-color:#fff ;
	}


</style>



	<div id="primary" class="fp-content-area">
		<main id="main" class="site-main" role="main">		
<!-- 				<section id="difference_about"> -->
					<div class="container-fluid"style="position: relative;top: 0;">
						<div class="row px-0">
							<div class="col-12 col-sm-6 intro-left mx-0">
								<ul id="make-difference"class="content-slider">
								  <li>
								      <h3>First Slide</h3>
								      <p>Lorem ipsum Cupidatat quis pariatur anim.</p>
								  </li>
								  <li>
								      <h3>Second Slide</h3>
								      <p>Lorem ipsum Excepteur amet adipisicing fugiat velit nisi.</p>
								  </li>
								  <li>
								      <h3>Second Slide</h3>
								      <p>Lorem ipsum Excepteur amet adipisicing fugiat velit nisi.</p>
								  </li>
								  <li>
								      <h3>Second Slide</h3>
								      <p>Lorem ipsum Excepteur amet adipisicing fugiat velit nisi.</p>
								  </li>
								  <li>
								      <h3>Second Slide</h3>
								      <p>Lorem ipsum Excepteur amet adipisicing fugiat velit nisi.</p>
								  </li>
								  <li>
								      <h3>Second Slide</h3>
								      <p>Lorem ipsum Excepteur amet adipisicing fugiat velit nisi.</p>
								  </li>
								

								</ul>
							</div>
						<div class="col-12 col-sm-6 intro-right mx-0">
							
							<?php echo do_shortcode('[contact-form-7 id="91" title="form1"]')  ?>

							<p><?php the_field("nero");  ?></p>

						</div>
<!-- 				</section> -->
			</div>
		</div>



<script type="text/javascript">
  jQuery(document).ready(function($) {
    $("#make-difference").lightSlider(
    	{
    		loop:true,
    		keyPress:true,
    		vertical:true,
    		item:2,
    		auto:true,
    		speed:1000
    	}); 
  });
</script>





		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
