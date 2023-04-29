<?php
/*
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package psp
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title('-', 'echo', 'right'); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class('preload'); ?>>
<?php wp_body_open(); ?>

<?php get_template_part( 'template-parts/site', 'skip-nav' ); ?>

<header id="site-header" class="header">
	<div class="header__container | content width-df">
		<div class="header__logo">
            <a href="/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" width="283" height="73" alt="Portland Sport Psychology">
            </a>
        </div>

		<nav class="nav-traditional" aria-label="Main Navigation">
			<?php get_template_part( 'template-parts/site', 'navigation' ); ?>
        </nav>

		<div class="header__nav">
            <a class="overlay-nav-toggle" href="#" aria-label="Toggle Navigation Menu">
                <?php include('assets/icon-navigation.svg'); ?>
            </a>
        </div>
	</div>

	<div class="overlay-nav">
        <nav class="mobile-nav" aria-label="Main Navigation Mobile">
			<?php get_template_part( 'template-parts/site', 'navigation' ); ?>
        </nav>
    </div>
</header>

<div class="thumb-cta">
    <a href="contact">Schedule Consultation</a>
	<a href="waksmans-workbook">Waksman's Workbook</a>
</div>
