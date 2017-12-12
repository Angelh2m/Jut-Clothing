<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jut
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="">
				<div class="flexHeader" >

					<div class="flexHeader__element__One ">

						<div style="
							background: url('<?php bloginfo('template_url'); ?>/img/Jut-Clothing/_header-jut.jpg ');
							background-position: center;
							background-size: cover;
							overflow: hidden;
							position: relative;
							 ">
							 <div class="flexHeader__floating-text">
								 <h2>Polo shirts is our specialty</h2>
								 <em>Shop Now</em>
							 </div>


						</div>

						<!-- <img
						src="<?php bloginfo('template_url'); ?>/img/clay1.jpg"
						alt=""> -->

					</div>


					<div class="flexHeader__element__Two">

						<div style="
							background: url('<?php bloginfo('template_url'); ?>/img/Jut-Clothing/banner1.jpg ');
							background-position: center;
							background-size: cover;
							position: relative;

							 ">
							 <div class="flexHeader__floating-text">
								 <h2>Woman's collection</h2>
								 <em>Coming Soon</em>
							 </div>

							<!-- <img
							src="<?php bloginfo('template_url'); ?>/img/clay2.jpg"
							alt=""> -->

						</div>

						<div
						style="
							background: url('<?php bloginfo('template_url'); ?>/img/Jut-Clothing/banner2.jpg ');
							background-position: center;
							background-size: cover;
							position: relative;
							 ">

							 <div class="flexHeader__floating-text">
								<h2>Backpacks</h2>
								<em>Coming Soon</em>
							</div>



						</div>

					</div>
				</div>
			</div>

			<!-- Intro -->
			<div class="intro__text">
				<h3>Hello</h3>
				<h1>We are Jut! A new clothing company compromised to deliver the highest quality clothing that matches your personality.</h1>
			</div>

			<img
			src="<?php bloginfo('template_url'); ?>/img/header_clothing.png"
			alt="">

			<div class="intro__text">
				<h3>Monthly Dispatch</h3>
				<p>Sign up to receive updates from our studio, promotions,
					and sneak peaks of upcoming products.</p>
				<form class="newsletter" action="index.html" method="post">

						<input class="" type="text" name="" value="Email Address">

					<button class="Contact_button" type="button" name="button">Submit</button>

				</form>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
