<div class="carousel-inner">
	<div class="item active">
		<div class="row">
<?php
for ($i = 1; $i <= 3; $i++) {
	$query_args = array(
		'category_name' => 'news',
		'post_type' => 'post',
		'posts_per_page' => 3,
		'paged' => $i,
	);
	$result = new WP_Query( $query_args );

			if ( $result->have_posts()){
				while ( $result->have_posts() ) : $result->the_post(); ?>
			<div class="col-md-4">
			<a href="#" class="thumbnail">
				
			<?php the_post_thumbnail( 'thumbnail' );
			?>
			<p class="newsContent">
			<?php the_title();
			?> </p>
			</a>
		</div>
		<?php endwhile;
		wp_reset_query();
		}
?>
 

<?php
}
?>
