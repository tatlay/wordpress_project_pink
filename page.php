<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

<?php include 'carouselLoop.php';?>	<!-- Loops the news carousel -->

<article class="Calender">

<?php include 'carouselCalender.php';?>	<!-- Loops the calender carousel -->

</article>




<article class="twitter_section">
			<div class="pink_twitter_container">
		<!-- shortcode for twitter feed -->
		<?php echo do_shortcode("[rotatingtweets screen_name='@develop_me_uk']"); ?>
		</div><!--.container-->


		</div><!-- .row -->

	</div><!-- #content -->
</article>
<!-- end test -->
			<!-- News Carousel -->					<!-- Calender Carousel -->
			<!-- Twitter  Carousel -->



<script>
    $(document).ready(function() {
        $('#Carousel').carousel({
            interval: 0
    })
  });

</script>

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
