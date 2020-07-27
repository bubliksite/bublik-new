<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property=”og:image” content=”/logo.png” />
	<meta name="description" content="Хотите красивый и недорогой сайт в Санкт-петербурге, тогда вам сюда.">

	<title><?php bloginfo('name'); wp_title(); ?></title>
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/fav.png" type="image/x-icon">

	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	
	<!-- modernizr -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>   
	
	<!-- Yandex.Metrika counter  <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(55085884, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/55085884" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	 /Yandex.Metrika counter -->

	<?php wp_head(); ?>

</head>
<body>

	<!-- Preloader -->
	<div id="preloader">
		<div class="pre-container">
			<div class="spinner">
				<div class="double-bounce1"></div>
				<div class="double-bounce2"></div>
			</div>
		</div>
	</div>
	<!-- end Preloader -->

	<div class="">
		<!-- box header -->
		<header class="box-header">
			<div class="box-logo">
				<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" width="50" alt="Logo"></a>
			</div>
			<!-- box-nav -->
			<a class="box-primary-nav-trigger" href="#0">
				<span class="box-menu-text">Меню</span><span class="box-menu-icon"></span>
			</a>
			<!-- box-primary-nav-trigger -->
		</header>
		<!-- end box header -->

		<!-- nav -->
		<nav>
			<ul class="box-primary-nav">

				<!--
				<li><a href="index.php">начало</a> <i class="ion-ios-circle-filled color"></i></li>
				<li><a href="#portfolio">портфолио</a></li>
				-->

				<li class="box-label">Контакты</li>
				<li class="box-label"><a href="mailto:sergey@bublik.site">sergey@bublik.site</a></li>
				<li class="box-social"><a href="tel: +7 (911) 979-06-58"><i class="ion-ios-telephone"></i></a></li>
				<li class="box-social"><a href="https://t.me/tobeserge"><i class="fab fa-telegram-plane"></i></a></li>
				<li class="box-social"><a href="https://wa.me/79119790658"><i class="ion-social-whatsapp"></i></a></li>
				<li class="box-social"><a href="https://m.me/serzh.solntsev"><i class="ion-social-facebook"></i></a></li>
			</ul>
		</nav>
		<!-- end nav -->