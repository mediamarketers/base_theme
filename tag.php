<!-- CALL IN HEADER.PHP -->

<?php get_header(); ?>

<!-- BEGIN TAG CONTENT -->

<section id="content" role="main">

<!-- BEGIN TAG CONTENT HEADER -->
	
	<header class="header">

		<h1 class="entry-title"><?php _e( 'Tag Archives: ', 'name_your_theme' ); ?><?php single_tag_title(); ?></h1>

	</header><!--/.header-->

<!-- BEGIN IF/WHILE HAVE POSTS LOOP -->

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- CALL IN ENTRY.PHP -->

	<?php get_template_part( 'entry' ); ?>

<!-- END IF/WHILE HAVE POSTS LOOP -->

	<?php endwhile; endif; ?>

<!-- CALL IN NAV-BELOW.PHP -->

	<?php get_template_part( 'nav', 'below' ); ?>

</section><!--/#content-->

<!-- CALL IN SIDEBAR.PHP -->

<?php get_sidebar(); ?>

<!-- CALL IN FOOTER.PHP -->

<?php get_footer(); ?>