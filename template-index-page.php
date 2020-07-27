<?php 

/*
Template name: Главная страница
Template Post Type: page
Theme URI: http://bublik.site
Description: Тема главной страницы
Author: Serge Solntsev
Author URI: http://bublik.site
Version: 2.1
*/

 ?>

 <?php get_header(); ?>

		<!-- box-intro -->
		<section class="box-intro">
			<div class="table-cell">
				<h1 class="box-headline letters rotate-2">
					<span class="box-words-wrapper">
						<?php $labels = CFS()->get('loop_labels'); ?>
						<?php $i = 0; ?>
						<?php foreach ($labels as $label) : ?>
							<b class="<?php echo ($i == 0) ? 'is-visible' : '' ?>"><?php echo $label['label']; ?>.</b>
							<?php $i++; ?>
						<?php endforeach ?>
					</span>
				</h1>
				<h5>это то, что мы делаем</h5>
			</div>

			<div class="mouse">
				<div class="scroll"></div>
			</div>
		</section>
		<!-- end box-intro -->
	</div>

	<!-- portfolio div -->
	<div class="portfolio-div" id="portfolio">
		<div class="portfolio">
			<div class="no-padding portfolio_container">

				<?php $n = 1; ?>
				<?php $posts = new WP_Query(array('post_type'=>'post')); ?>
				<?php if ( $posts->have_posts() ) :  while ( $posts->have_posts() ) : $posts->the_post(); ?>
					<!-- single work -->
					<div class="<?php echo (((($n%10) == 3) or (($n%10) == 6)) ? 'col-md-6 col-sm-12' : 'col-md-3 col-sm-6'); ?>">
						<a href="<?php echo the_permalink(); ?>" class="portfolio_item">
							<img src="<?php the_post_thumbnail_url(); ?>" alt="image" class="img-responsive" />
							<div class="portfolio_item_hover">
								<div class="portfolio-border clearfix">
									<div class="item_info">
										<span><?php echo the_title(); ?></span>
										<?php $types = CFS()->get('type'); ?>
										<em><?php foreach ( $types as $type ) { echo $type; }?></em>
									</div>
								</div>
							</div>
						</a>
					</div>
					<?php $n++; ?>
					<!-- end single work -->
				<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_query(); ?>

			</div>
			<!-- end portfolio_container -->
		</div>
		<!-- portfolio -->
	</div>
	<!-- end portfolio div -->

 <?php get_footer(); ?>