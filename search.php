<!-- CALL IN HEADER.PHP -->

<?php get_header(); ?>

<!-- BEGIN SEARCH CONTENT AREA -->

<section id="content" role="main">

<!-- BEGIN IF HAVE POSTS FOR SEARCH LOOP -->

	<?php if ( have_posts() ) : ?>

<!-- BEGIN SEARCH CONTENT HEADER -->

	<header class="header">

	<!-- SEARCH TITLE SECTION -->

		<h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'name_your_theme' ), get_search_query() ); ?></h1>

	</header><!--/.header-->

<!-- BEGIN WHILE HAVE POSTS LOOP -->

	<?php while ( have_posts() ) : the_post(); ?>

<!-- DISPLAY ENTRY.PHP -->

	<?php get_template_part( 'entry' ); ?>

<!-- END WHILE HAVE POSTS LOOP -->

	<?php endwhile; ?>

<!-- DISPLAY NAV-BELOW.PHP -->

	<?php get_template_part( 'nav', 'below' ); ?>

<!-- BEGIN ELSE LOOP -->

	<?php else : ?>

<!--  BEGIN SEARCH ARTICLE -->

	<article id="post-0" class="post no-results not-found">

	<!--  BEGIN SEARCH ARTICLE HEADER -->

		<header class="header">

		<!-- POST TITLE -->

			<h2 class="entry-title"><?php _e( 'Nothing Found', 'name_your_theme' ); ?></h2>

		</header><!--/.header-->

	<!-- BEGIN POST TEXT -->

		<section class="entry-content">

		<!-- CUSTOM SEARCH MESSAGE FOR NO SEARCH RESULTS -->

			<p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'name_your_theme' ); ?></p>
			<?php get_search_form(); ?>

		</section><!--/.entry-content-->

	</article><!--/#post-0--/.post--/.no-results--/.not-found-->

<!-- END IF/WHILE LOOP -->

	<?php endif; ?>

</section><!--/#content-->

<!-- CALL IN SIDEBAR.PHP -->

<?php get_sidebar(); ?>

<!-- CALL IN FOOTER.PHP -->

<?php get_footer(); ?>