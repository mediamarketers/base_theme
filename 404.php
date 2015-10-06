<!-- CALL IN HEADER.PHP -->

<?php get_header(); ?>

<!-- 404 CONTENT BEGINS HERE -->

<section id="content" role="main">

<!-- 404 POST NOT FOUND ARTICLE -->

	<article id="post-0" class="post not-found">

	<!-- 404 ARTICLE HEADER -->

		<header class="header">
			
		<!-- TITLE -->
			
			<h1 class="entry-title"><?php _e( 'Not Found', 'name_your_theme' ); ?></h1>
		
		</header><!--/.header-->

<!-- 404 ENTRY CONTENT -->

		<section class="entry-content">
		
		<!-- 404 DISPLAY MESSAGE -->
		
			<p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'name_your_theme' ); ?></p>
		
		<!-- CALL IN SEARCH FORM -->
		
			<?php get_search_form(); ?>
		
		</section><!--/entry-content-->
		
	</article><!--/#post-0--/.post--/.not-found-->
	
</section><!--/#content-->

<!-- CALL IN SIDEBAR.PHP -->

<?php get_sidebar(); ?>

<!-- CALL IN FOOTER.PHP -->

<?php get_footer(); ?>