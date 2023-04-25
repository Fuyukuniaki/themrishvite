<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body>
	<?php $the_category = get_the_category(); ?>
	<header id="<?php echo 'o-' . $the_category; ?>">
		<?php wp_nav_menu(array('menu' => 'mainMenu')); ?>
	</header>
