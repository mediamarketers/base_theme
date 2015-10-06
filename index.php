<!-- GENERAL INDEX FILE FOR STATIC PAGE -->

<!-- CALL IN HEADER.PHP -->

<?php get_header(); ?>

<section id="content" role="main">

<!-- BEGIN IF/WHILE HAVE POSTS LOOP -->

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- CALL IN ENTRY.PHP -->

	<?php get_template_part( 'entry' ); ?>

<!-- CALL IN COMMENTS.PHP -->

	<?php comments_template(); ?>

<!-- END IF/WHILE HAVE POSTS LOOP -->

	<?php endwhile; endif; ?>

<!-- POST-FOOTER NAVIGATION -->

	<?php get_template_part( 'nav', 'below' ); ?>

</section><!--/#content-->

<!-- CALL IN SIDEBAR.PHP -->

<?php get_sidebar(); ?>

<!-- CALL IN FOOTER.PHP -->

<?php get_footer(); ?>