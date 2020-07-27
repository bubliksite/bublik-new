
	<div class="container" style="margin-bottom: 3rem;">
        <h1 class="" style="margin-bottom: 2rem;margin-top: 3rem;">Напишите нам</h1>
        <?php echo do_shortcode('[caldera_form id="CF5f1ed2dea9e19"]') ?>
    </div>

<!-- footer -->
	<footer>
		<div class="container-fluid">
			<p class="copyright">© Bublik.site 2019</p>
		</div>
	</footer>
	<!-- end footer -->

	<!-- back to top -->
	<a href="#0" class="cd-top"><i class="ion-android-arrow-up"></i></a>
	<!-- end back to top -->



	<!-- jQuery -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.1.js"></script>
	<!-- Owl -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function(){
			$('.owl-carousel').owlCarousel({
				items: 1,
				nav: true,
				dots: true,
				autoplay: true,
				loop: true,
				navText: ['<i class="fas fa-2x fa-chevron-left"></i>','<i class="fas fa-2x fa-chevron-right"></i>']
			});
		});
	</script>
	<!--  plugins -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/menu.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/animated-headline.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/isotope.pkgd.min.js"></script>

	<!--  custom script -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>

	<!--  masonry -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/masonry.pkgd.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/imagesloaded.pkgd.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                items: 1,
                nav: true,
                loop: true,
                autoplay: false
            });
        });
    </script>

<?php wp_footer(); ?>

</body>

</html>