<!-- PHP FILE FOR A SINGLE POST PAGE -->

<!-- CALL IN HEADER.PHP -->

<?php get_header(); ?>

<section id="content" role="main">

<!-- BEGIN IF/WHILE HAVE POSTS LOOP -->

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- CALL IN ENTRY.PHP -->

	<?php get_template_part( 'entry' ); ?>

<!-- CALL IN COMMENTS TEMPLATE -->

	<?php if ( ! post_password_required() ) comments_template( '', true ); ?>

<!-- END IF/WHILE HAVE POSTS LOOP -->

	<?php endwhile; endif; ?>

<!-- BEGIN POST-FOOTER -->

	<footer class="footer">

	<!-- CALL IN NAV-BELOW-SINGLE.PHP -->

		<?php get_template_part( 'nav', 'below-single' ); ?>

	</footer><!--/.footer-->

</section><!--/#content-->

<!-- CALL IN SIDEBAR.PHP -->

<?php get_sidebar(); ?>

<!-- CALL IN FOOTER.PHP -->

<?php get_footer(); ?>