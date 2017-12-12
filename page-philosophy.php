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

	<div class="container_content" >
		<div class="row">
			<div class="col-12">
				<main>

					<?php
					while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

					endwhile; // End of the loop.
					?>

				</main><!-- #main -->

				<h3>Contact Us</h3>
			</div>
		</div>



		<form class="contactForm" action="index.html" method="post">
			<div class="row">
				<div class="col-6">
					<label for="name">Name:</label>
					<input type="text" name="" value="">
				</div>
				<div class="col-6">
					<label for="lastName">Last Name:</label>
					<input type="text" name="" value="">
				</div>

				<div class="col-12">
					<label for="email">Email Address:</label>
					<input type="text" name="" value="">
				</div>

				<div class="col-12">
					<label for="subject">Subject:</label>
					<input type="text" name="" value="">
				</div>

				<div class="col-12">
					<label for="message">Message:</label>
					<textarea name="name" rows="8" cols="80"></textarea>
				</div>

				<div class="col-12">
						<input class="Contact_button" type="submit" name="" value="Submit">
				</div>

			</div>

		</form>
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
