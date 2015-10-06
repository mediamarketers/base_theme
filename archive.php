<!-- CALL IN HEADER.PHP -->

<?php get_header(); ?>

<!-- ARCHIVE CONTENT BEGINS HERE -->

<section id="content" role="main">

<!-- ARCHIVE CONTENT HEADER -->

	<header class="header">
		
		<!-- TITLE -->
		
		<h1 class="entry-title"><?php 
		if ( is_day() ) { printf( __( 'Daily Archives: %s', 'name_your_theme' ), get_the_time( get_option( 'date_format' ) ) ); }
		elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'name_your_theme' ), get_the_time( 'F Y' ) ); }
		elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'name_your_theme' ), get_the_time( 'Y' ) ); }
		else { _e( 'Archives', 'name_your_theme' ); }
		?></h1>
		
	</header><!--/.header-->

<!-- DISPLAY POST DATA FOR ARCHIVE -->

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- CALL IN ENTRY.PHP -->	
	
	<?php get_template_part( 'entry' ); ?>
	
<!-- END LOOP -->
	
	<?php endwhile; endif; ?>

<!-- DISPLAY ARCHIVE NAVIGATION -->

	<?php get_template_part( 'nav', 'below' ); ?>

</section>

<!-- CALL IN SIDEBAR.PHP -->

<?php get_sidebar(); ?>

<!-- CALL IN FOOTER.PHP -->

<?php get_footer(); ?>