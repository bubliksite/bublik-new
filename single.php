
<?php get_header(); ?>

<!-- top-bar -->
<div class="top-bar" style="background: linear-gradient( rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(<?php echo CFS()->get('background'); ?>); background-size: contain; background-attachment: fixed; background-position: center center;">
	<h1><?php the_title(); ?></h1>
	<p><a href="//<?php echo CFS()->get('url'); ?>" target="_blank"> / <?php echo CFS()->get('url'); ?></a></p>
</div>
<!-- end top-bar -->

<!-- main-container -->
<div class="container">
    <h5><a href="/">< вернуться назад</a></h5>
</div>
<div class="container main-container">

	<div class="owl-carousel">
	  <?php $images = CFS()->get('images'); ?>
	  <?php foreach ($images as $image): ?>
			<img src="<?php echo $image['image']; ?>" />
	  <?php endforeach ?>
	</div>
	<div class="col-md-12">
        <?php $types = CFS()->get('type'); ?>
		<h3 class="text-uppercase"><?php echo the_title(); ?></h3>
		<h5><?php foreach ( $types as $type ) { echo $type; }?></h5>
		<div class="h-30"></div>
	</div>
	<div class="col-md-9">
        <h5>Задача:</h5>
		<p style="font-family: 'Roboto', sans-serif; font-size: 1.8rem; line-height: 3rem;" >
			<?php echo CFS()->get('task') ?>
		</p>
        <br>
        <h5>Что сделали:</h5>
        <p style="font-family: 'Roboto', sans-serif; font-size: 1.8rem; line-height: 3rem;" >
            <?php echo CFS()->get('whattodo') ?>
        </p>
        <br>
        <h5>Сроки:</h5>
        <p style="font-family: 'Roboto', sans-serif; font-size: 1.8rem; line-height: 3rem;" >
            <?php echo CFS()->get('terms') ?>
        </p>
        <p><br></p>
        <h5><a href="#footer">Закажите себе такой же сайт!</a></h5>
    </div>

	<div class="col-md-3">
		<ul class="cat-ul">
            <?php $tools = CFS()->get('loop_tools'); ?>
            <?php foreach($tools as $tool) : ?>
			<li><i class="ion-ios-circle-filled"></i> <?php echo $tool['tool']; ?></li>
            <?php endforeach ?>
		</ul>
		<div class="h-10"></div>
	</div>
</div>
<!-- end main-container -->

<?php get_footer(); ?>