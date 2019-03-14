
<article class="news"><!-- news article -->
	<h1 class="newsTitle">News</h1>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="Carousel" class="carousel slide">
					<ol class="carousel-indicators">
					<li data-target="#Carousel" data-slide-to="0" class="active"></li>
					<li data-target="#Carousel" data-slide-to="1"></li>
					<li data-target="#Carousel" data-slide-to="2"></li>
					</ol>
						<div class="carousel-inner"><!-- Carousel items -->

<?php
									for ($i = 1; $i <= 3; $i++):
									
										$activeState = '';
										if ($i < 2)
									{
										$activeState .= 'active';
									}
								?>
									<div class="item <?php echo $activeState?>">
										<?php
											
												$query_args = array(
												'category_name' => 'news',
												'post_type' => 'post',
												'posts_per_page' => 3,
												'paged' => $i,
												);
												?>
												<div class="row">
												<?php $result = new WP_Query( $query_args );
													if ( $result->have_posts()):
													while ( $result->have_posts() ) : $result->the_post(); 
												?>
													<div class="col-md-4">
														<a href="#" class="thumbnail">
														<?php the_post_thumbnail( 'thumbnail' );
														 ?>
														<p class="newsContent">
														<?php the_title();
														?></p>
														</a>
													</div> <!-- col-md-4 -->
												
													<?php 
													endwhile;
													wp_reset_query();
													endif; //closes the conditional statement
													?>
													
												</div> <!-- row --> 
											
									</div><!--.item-->			
										<?php	                
										endfor;
										?>
							</div><!--.carousel-inner-->
							<a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
							<a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
					</div><!--.Carousel-->
				</div><!-- col-md-12 -->
			</div> <!-- row -->
		</div><!--.container-->  
</article>

<script>
    $(document).ready(function() {
        $('#Carousel').carousel({
            interval: 0
    })
  });

</script>