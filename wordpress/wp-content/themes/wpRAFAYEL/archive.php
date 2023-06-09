<?php 
get_header();
?>

<h2>
	Archive results

	<?php  
	
	if( is_category() ){
		single_cat_title();
	}
	elseif( is_author() ){
		echo "author";
	}
	elseif( is_day() ){
		echo "day";
	}

	?>	
</h2>

<?php
if( have_posts() ){
	while( have_posts() ){
		the_post();
		
		get_template_part("content");

	}
}
else{
	echo "No content found";
}

get_footer();
?>