<?php 
/*
Template Name: Woo Commerce Page
*/
?>
<?php get_header(); ?>

<?php get_template_part('includes/breadcrumbs', 'page'); ?>

<div id="content-area" class="fullwidth clearfix">
	<div id="left-area">
		<?php woocommerce_content(); ?>
		<?php if ( 'on' == et_get_option('flexible_show_pagescomments') ) comments_template('', true); ?>
	</div> <!-- end #left_area -->
</div> 	<!-- end #content-area -->

<?php get_footer(); ?>