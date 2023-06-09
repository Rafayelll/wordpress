<?php 
get_header();

if( have_posts() ){
	while( have_posts() ){
		the_post();
		?>

		<article class="post">

			
			<h2>	
				<a href="<?php the_permalink();?>">
					<?php the_title();?>		
				</a>
			</h2>

			<p class="post-info">

				<?php the_time("l, F j, Y");?> | by

				<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>">
					<?php the_author(); ?>
				</a> | posted in 

				<?php
				$cats = get_the_category();

				if( $cats ){
					foreach( $cats as $category ){
						$link = get_category_link($category->term_id);
						echo "<a href='$link'>" . $category->name . "</a> ";
					}
				}
				?>

			</p>

			<?php the_content(); ?>

		</article>

		<?php
	}
}
else{
	echo "No content found";
}

get_footer();
?>