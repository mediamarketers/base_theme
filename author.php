<!-- CALL IN THE HEADER.PHP -->

<?php get_header(); ?>

<!-- AUTHOR CONTENT BEGINS HERE -->

<section id="content" role="main">

<!-- AUTHOR CONTENT HEADER AND TITLE -->

	<header class="header">
	
		<?php the_post(); ?>
		
		<!-- ENTRY TITLE -->
	
		<h1 class="entry-title author"><?php _e( 'Author Archives', 'name_your_theme' ); ?>: <?php the_author_link(); ?></h1>
		
		<!-- AUTHOR META -->
		
		<?php if ( '' != get_the_author_meta( 'user_description' ) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . get_the_author_meta( 'user_description' ) . '</div>' ); ?>
		
		<!-- REWIND WORDPRESS POSTS DATA PULLED FROM DATABASE -->
		
		<?php rewind_posts(); ?>
	
	</header>

<!-- IF WORDPRESS HAS POSTS GIVE US... -->

	<?php while ( have_posts() ) : the_post(); ?>

<!-- ...THE POST CONTENT -->

	<?php get_template_part( 'entry' ); ?>

<!-- END THE IF CLAUSE -->

	<?php endwhile; ?>

<!-- CALL IN NAV-BELOW.PHP -->

	<?php get_template_part( 'nav', 'below' ); ?>

</section>

<!-- CALL IN THE SIDEBAR.PHP -->

<?php get_sidebar(); ?>

<!-- CALL IN THE FOOTER.PHP -->

<?php get_footer(); ?>