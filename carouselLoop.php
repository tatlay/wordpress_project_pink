
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