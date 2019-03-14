<article class="Calender">

<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div id="Karousel" class="carousel slide">
          <ol class="carousel-indicators">
          <li data-target="#Karousel" data-slide-to="0" class="active"></li>
          <li data-target="#Karousel" data-slide-to="1"></li>
          <li data-target="#Karousel" data-slide-to="2"></li>
          <li data-target="#Karousel" data-slide-to="3"></li>
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
                        'category_name' => 'calender',
                        'post_type' => 'post',
                        'posts_per_page' => 4,
                        'orderby' => 'meta_value', //takes a value from the custom field below
                        'meta_key' => 'date',
                        'order' => 'ASC',
                        'paged' => $i,
                        );
                        ?>
                        <div class="row">
                        <?php $result = new WP_Query( $query_args );
                          if ( $result->have_posts()):
                          while ( $result->have_posts() ) : $result->the_post(); 
                        ?>
                          <div class="col-md-3"><h1 class="largeCalender">
                            <?php 
                              $rawDay = get_field( 'date' );    
                              $day = strtotime($rawDay);
                              $newformat = date('j', $day);
                              echo $newformat;
                            ?>  
                          </h1>
                            <h3>
                            <?php 
                              $rawMonth = get_field( 'date' );    
                              $month = strtotime($rawMonth);
                              $newformat = date('F', $month);
                              echo $newformat;
                            ?>
                            </h3>
                            <div class="purpleCircle"></div>
                            <ul>
                                          <li><?php the_title( );
                               ?>
                                          </li>
                                          <time class="time"> &#128344; <?php the_field( 'start_time' );?>
                                          -<?php the_field( 'end_time' );?>
                                               
                                          </time>

                                      </ul>
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
              <a data-slide="prev" href="#Karousel" class="left carousel-control">‹</a>
              <a data-slide="next" href="#Karousel" class="right carousel-control">›</a>
          </div><!--.Carousel-->
        </div><!-- col-md-12 -->
      </div> <!-- row -->
    </div><!--.container-->  
</article>

<script>
    $(document).ready(function() {
        $('#Karousel').carousel({
            interval: 0
    })
  });

</script>