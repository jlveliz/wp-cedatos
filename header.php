<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
	<title><?php echo get_the_title(); ?> - <?php bloginfo( 'title' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>
