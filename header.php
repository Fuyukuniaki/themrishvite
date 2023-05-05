<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<?php $the_category = get_the_category();
	if ($the_category): ?>
		<body class="l-body p-body c-<?php echo $the_category ;?>">
<?php else :?>
		<body class="l-body p-body">
<?php endif; ?>

	<header class="l-header">
		<nav class="p-header__nav">
			<?php wp_nav_menu(array('menu' => 'mainMenu')); ?>
		</nav>
		<section class="p-header__title">
			<figure class="p-main-visual">
				<?php if(is_front_page()): ?>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/main-visual.jpg" alt="好きな仕事を 好きな人と好きな人のために | main visual">
					<figcaption class="c-main-visual--front-page">
						<h2 class="c-main-visual--front-page__text">好きな仕事を<br>好きな人と好きな人のために</h2>
					</figcaption>
				<?php else: ?>
					<figcaption class="c-main-visual--sub-page">
						<h2 class="c-main-visual--sub-page__text"><?php echo $the_category->title ; ?></h2>
					</figcaption>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $the_category ; ?>.jpg" alt="<?php echo $the_category->title ; ?> | main visual">
				<?php endif; ?>
			</figure>
		</section>
	</header>
