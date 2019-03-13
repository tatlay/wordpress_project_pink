<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">




						<footer class="contact">
    
<!-- Footer included by developer -->
						    <p class="backToTop"><a href="#body"><strong>&uarr;</strong>
						    </br>Back to Top</h3></a>
						    
						    <aside class="contactAside">
						    <h1 class="contactTitle">Contact Us</h1>
						    <p class="contactP">Headteacher: Name</br>
						    Address</br>
						    T:<a <a href="tel:020 7837 0739"> 020 7837 0739</a></br>
						    <a href="mailto:admin@email.com">admin@email.com</a></p>

						    <h1 class="twitterTitle">Follow Us</h1>
						    <a href="#"><p class="twitterP"> <img src="/wp-content/uploads/2019/03/footer_twitter.png" alt="follow us on twitter">&nbsp@TWITTER_NAME</p></a>
						    </aside>

						    <aside class="linksAside">
						    <h1 class="linksTitle">Quick Links</h1>
						    <ul>
						      <li><a href="#">Offstead report</a></li>
						      <li><a href="#">Exam Result</a></li>
						      <li><a href="#">School Email</a></li>
						      <li><a href="#">Prospectus</a></li>
						      <li><a href="#">Sixth Form</a></li>
						      <li><a href="#">Newsletter</a></li>
						      <li><a href="#">CC4 Anywhere</a></li>
						      <li><a href="#">Vacancies</a></li>
						      <li><a href="#">Parent Comms</a></li>
						      <li><a href="#">Library Catalogue</a></li>
						    </aside>


						    <aside class="mapAside">
						    <h1 class="mapsTitle">Map</h1>
						    <img src="/wp-content/uploads/2019/03/map.png" alt="Map of the venue">
						    <div class="getDirections"><a href="#">Get Directions &nbsp;&#8594;</a></div>
						    </aside>
						    <h7 class="privacy"><a href="#">Privacy Policy</a> &#183; <a href="#">Terms of Use</a> &#183; <a href="#">Sitemap</a> &#183; <a href="#">High Visibility Version</a> &#183; <a href="#">Cookie Usage</a></h3>

						  </footer>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

  <script>
    $(document).ready(function() {
        $('#Carousel').carousel({
            interval: 5000
    })
  });

  </script>
    <script>
    $(document).ready(function() {
        $('#Karousel').carousel({
            interval: false
    })
  });
  </script>
    <script>
    $(document).ready(function() {
        $('#Tarousel').carousel({
            interval: 5000
    })
  });
  </script>



<?php wp_footer(); ?>

</body>

</html>

