<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php echo do_shortcode('[gtranslate]'); ?>
	<div class="container">
		<header class="site-header">

			<div class="hd-search">
				<?php get_search_form(); ?> 
			</div>

			<h1>
				<a href="<?php echo home_url(); ?>">
					<?php bloginfo('name'); ?>
				</a>			
			</h1>
			
			


			<nav class="site-nav">
				<?php 
				$args = array(
					"theme_location" => "top_menu"
				);

				wp_nav_menu($args); 
				?>
			</nav>
		</header>

		<nav class="site-nav children-links clearfix">
			<ul>
				<?php 
				$args = array(
					'child_of' => get_parent_id(),
					'title_li' => ''
				);

				wp_list_pages($args); 
				?>
			</ul>
		</nav>
