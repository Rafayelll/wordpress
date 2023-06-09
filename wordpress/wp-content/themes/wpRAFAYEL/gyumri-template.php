<?php  
/*
Template Name: Gyumri
*/

get_header();

if( have_posts() ){
	while( have_posts() ){
		the_post();
		?>

		<article class="post gyumri">
			<h2>					
				<?php the_title();?>				
			</h2>

			<?php
			if( is_page('contacts') ){
				echo "շնորհավոր մարտի 8";
			}			
			?>

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