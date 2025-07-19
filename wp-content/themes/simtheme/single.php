

<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Dosth
 */
get_header();
?>
<div class="content-container">

<!--  <h2 class="posttitle" style="font-family: 'Noto Sans';font-size:30px;font-weight:600;padding-top:35px;padding-left:138px;padding-right:140px;"><?php the_title(); ?></h2>
 -->       <div class="container">
            <div class="row">
			  <?php while( have_posts() ): ?>
        <?php the_post(); 
		//<?php the_title();?>
		
        <?php if ( has_post_thumbnail() ) :
            $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' ); ?>
            <div class="full-width-featured-image" style="background-image:url(<?php echo $featured_image[0]; ?>);">
			
                
            </div>
			 <h2 class="posttitle" style="font-family: 'Noto Sans';font-size:30px;font-weight:600;padding-left:20px!important;padding-right:20px;"><?php the_title(); ?></h2>
			 
        <?php endif; ?>
			
			<h2 class="postcontent"><?php the_content(); ?></h2>
            
        </div>
    <?php endwhile; ?>
	
</div>
 

<?php get_footer(); ?>