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
//the loop declarations
$query_args = array(
	'category_name' => 'news',
	'post_type' => 'post',
	'posts_per_page' => 3,
	'paged' => 1,
);

$result = new WP_Query( $query_args );

$query_args1 = array(
	'category_name' => 'news',
	'post_type' => 'post',
	'posts_per_page' => 3,
	'paged' => 2,
);

$result1 = new WP_Query( $query_args1 );

$query_args2 = array(
	'category_name' => 'news',
	'post_type' => 'post',
	'posts_per_page' => 3,
	'paged' => 3,
);

$result2 = new WP_Query( $query_args2 );


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

<article class="news">


    <h1 class="newsTitle">News</h1>
  
    <div class="container">
      <div class="row">
          <div class="col-md-12">
                  <div id="Carousel" class="carousel slide">
                   
                  <ol class="carousel-indicators">
                      <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                      <li data-target="#Carousel" data-slide-to="1"></li>
                      <li data-target="#Carousel" data-slide-to="2"></li>
                      <li data-target="#Carousel" data-slide-to="3"></li>
                  </ol>
                   
                  <!-- Carousel items -->
                <div class="carousel-inner">
                	<div class="item active">
                      	<div class="row">
						<?php
						if ( $result->have_posts()){
							while ( $result->have_posts() ) : $result->the_post(); ?>
					     	<div class="col-md-4">
	                        		<a href="#" class="thumbnail">
										<?php the_post_thumbnail( 'thumbnail' );?>
										<p class="newsContent">
		                        		<?php the_title();?> 
				                        </p>
				                    </a>
			                </div>
	            			<?php endwhile;
							wp_reset_query();
							}
						?>
		            </div>
		        </div>    
				
		        <div class="item">
                      <div class="row">
						<?php
						if ( $result2->have_posts()){
							while ( $result2->have_posts() ) : $result2->the_post(); ?>
					     	<div class="col-md-4">
	                        		<a href="#" class="thumbnail">
										<?php the_post_thumbnail( 'thumbnail' );?>
										<p class="newsContent">
		                        		<?php the_title();?> 
				                        </p>
				                    </a>
			                </div>
	            			<?php endwhile;
							wp_reset_query();
							}
						?>
		            </div>
                  </div><!--.item-->
                   
                  <div class="item">
                      <div class="row">
						<?php
						if ( $result1->have_posts()){
							while ( $result1->have_posts() ) : $result1->the_post(); ?>
					     	<div class="col-md-4">
	                        		<a href="#" class="thumbnail">
										<?php the_post_thumbnail( 'thumbnail' );?>
										<p class="newsContent">
		                        		<?php the_title();?> 
				                        </p>
				                    </a>
			                </div>
	            			<?php endwhile;
							wp_reset_query();
							}
						?>
		            </div>
                  </div><!--.item-->

                                  <div class="item">
                      <div class="row">
						<?php
						if ( $result->have_posts()){
							while ( $result->have_posts() ) : $result->the_post(); ?>
					     	<div class="col-md-4">
	                        		<a href="#" class="thumbnail">
										<?php the_post_thumbnail( 'thumbnail' );?>
										<p class="newsContent">
		                        		<?php the_title();?> 
				                        </p>
				                    </a>
			                </div>
	            			<?php endwhile;
							wp_reset_query();
							}
						?>
		            </div>
                  </div><!--.item-->



                  </div><!--.carousel-inner-->
                    <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                    <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                  </div><!--.Carousel-->
                   
          </div>
      </div>
  </div><!--.container-->  
  
  </article>
<!-- start test -->
		<article class="news">
		
		

		</article>
<!-- end test -->
			<!-- News Carousel -->					<!-- Calender Carousel -->
			<!-- Twitter  Carousel -->

		<div class="pink_twitter_container">
		<!-- shortcode for twitter feed -->
		<?php echo do_shortcode("[rotatingtweets screen_name='@develop_me_uk']"); ?>
		</div><!--.container-->


		</div><!-- .row -->

	</div><!-- #content -->
<script>
    $(document).ready(function() {
        $('#Carousel').carousel({
            interval: 0
    })
  });

  </script>

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
