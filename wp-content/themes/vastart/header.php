<?php
/**
 * The Header for our theme.
 *
 * @package Vastart
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="//gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

	<div id="page">
	
		<?php do_action( 'vastart_header' ); ?>

		<?php do_action( 'vastart_breadcrumbs' ); ?>

		<main id="content">
