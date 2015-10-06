<!-- CALL IN THE HEADER.PHP -->

<?php get_header(); ?>

<!-- CATEGORY CONTENT BEGINS HERE -->

<section id="content" role="main">

<!-- CATEGORY CONTENT HEADER -->

	<header class="header">
		
	<!-- CATEGORY TITLE -->
		
		<h1 class="entry-title"><?php _e( 'Category Archives: ', 'name_your_theme' ); ?><?php single_cat_title(); ?></h1>
		
	<!-- CATEGORY DESCRIPTION -->
		
		<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
	
	</header><!--/.header-->
	
	<!-- START WORDPRESS POSTS LOOP -->
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<!-- CALL IN ENTRY.PHP -->
	
	<?php get_template_part( 'entry' ); ?>

	<?php endwhile; endif; ?>

	<!-- DISPLAY CATEGORY.PHP NAVIGATION -->

	<?php get_template_part( 'nav', 'below' ); ?>

</section><!--/#content-->

<!-- CALL IN THE SIDEBAR.PHP -->

<?php get_sidebar(); ?>

<!-- CALL IN THE FOOTER.PHP -->

<?php get_footer(); ?>