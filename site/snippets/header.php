<!-- Website developed by Tristan Bagot -->

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>

	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="dns-prefetch" href="//www.google-analytics.com">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="canonical" href="<?php echo html($page->url()) ?>" />
	<?php if($page->isHomepage()): ?>
		<title><?php echo $site->title()->html() ?></title>
	<?php else: ?>
		<title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
	<?php endif ?>
	<meta name="description" content="<?php echo $site->description()->html() ?>">
	<meta name="robots" content="index,follow" />
	<meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
	<meta name="DC.Title" content="<?php echo $page->title()->html() ?>" />
	<meta name="DC.Description" content="<?php echo $page->description()->html() ?>"/ >
	<?php if($page->isHomepage()): ?>
		<meta property="og:title" content="<?php echo $site->title()->html() ?>" />
	<?php else: ?>
		<meta property="og:title" content="<?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?>" />
	<?php endif ?>
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo html($page->url()) ?>" />
	<?php if(!$site->ogimage()->empty()): ?>
		<meta property="og:image" content="<?= $site->ogimage()->toFile()->width(1200)->url() ?>"/>
	<?php endif ?>
	<meta property="og:description" content="<?php echo $site->description()->html() ?>" />
	<?php if($page->isHomepage()): ?>
		<meta itemprop="name" content="<?php echo $site->title()->html() ?>">
	<?php else: ?>
		<meta itemprop="name" content="<?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?>">
	<?php endif ?>
	<meta itemprop="description" content="<?php echo $site->description()->html() ?>">
	<link rel="shortcut icon" href="<?= url('assets/images/favicon.ico') ?>">
	<link rel="icon" href="<?= url('assets/images/favicon.ico') ?>" type="image/x-icon">

	<?php 
	echo css('assets/css/app.min.css');
	echo js('assets/js/vendor/modernizr.min.js');
	?>
	
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?= url('assets/js/vendor/jquery.min.js') ?>">\x3C/script>')</script>

	<?php if(!$site->customcss()->empty()): ?>
		<style type="text/css">
			<?php echo $site->customcss()->html() ?>
		</style>
	<?php endif ?>

</head>
<body <?php if(!$page->isHomepage()){ echo ' class="page"'; }?>>

	<div class="loader"></div>

	<header>
		<div class="inner">
		<span class="left">
			<span class="contact-btn">
				<a href="<?php echo $pages->find('contact')->url() ?>" data-title="<?php echo $pages->find('contact')->title()->html() ?>" data-target="<?php echo $pages->find('contact')->uri() ?>"><h3><?php echo $pages->find('contact')->title()->html() ?></h3>
				</a></span>
			<span class="socials">
			<?php if (!$site->facebook()->empty()) : ?>
				<a href="<?php echo $site->facebook()->html() ?>" target="_blank">
					<img src="<?php echo url('assets/images/fb.png') ?>" alt="Facebook" width="auto" height="13px">
				</a>
			<?php endif ?>
			<?php if (!$site->instagram()->empty()) : ?>
				<a href="<?php echo $site->instagram()->html() ?>" target="_blank">
					<img src="<?php echo url('assets/images/insta.png') ?>" alt="Instagram" width="auto" height="13px">
				</a>
			<?php endif ?>
				<a href="mailto:contact@maecenas.fr">
					<img src="<?php echo url('assets/images/mail.png') ?>" alt="E-mail" width="auto" height="13px">
				</a>
				</span>
				</span>

				<span class="logo">
					<a href="<?php echo $pages->find('index')->url() ?>" data-title="<?php echo $pages->find('index')->title()->html() ?>" data-target="index">
						<img src="<?php echo $site->image($site->logo())->resize(300)->url() ?>" alt="<?php echo $site->title()->html() ?>" width="100%" height="auto">
					</a>
				</span>

				<nav class="languages" role="navigation">
					<ul>
						<?php foreach($site->languages() as $language): ?>
							<li<?php e($site->language() == $language, ' class="active"') ?>>
							<a href="<?php echo $pages->find('index')->url($language->code()) ?>">
							<h3><?php echo html($language->code()) ?></h3>
							</a>
						</li>
					<?php endforeach ?>
				</ul>
			</nav>
		</div>
	</header>

	<div id="wrapper">
	<div class="inner-content">