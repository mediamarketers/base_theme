<!-- GENERAL/DEFAULT SITE PAGE TEMPLATE -->

<!-- CALL IN HEADER.PHP -->

<?php get_header(); ?>

<!-- PAGE CONTENT BEGINS HERE -->

<section id="content" role="main">

<!-- BEGIN IF/WHILE HAVE POSTS LOOP -->

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- PAGE ARTICLE -->

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- ARTICLE HEADER -->

		<header class="header">

		<!-- TITLE -->

			<h1 class="entry-title"><?php the_title(); ?></h1>
			
		<!-- EDIT POST LINK -->
			
			<?php edit_post_link(); ?>

		</header><!--/.header-->

	<!-- ARTICLE (POST) CONTENT -->

		<section class="entry-content">

		<!-- POST'S FEATURED IMAGE -->

			<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>

		<!-- POST'S TEXT -->

			<?php the_content(); ?>

		<!-- POST'S LINKS -->

			<div class="entry-links">

			<!-- LINKS -->

				<?php wp_link_pages(); ?>

			</div><!--/.entry-links-->

		</section><!--/.entry-content-->

	</article><!--/#post-phpID--/.post-phpCLASS-->

<!-- POST'S COMMENTS -->

	<?php if ( ! post_password_required() ) comments_template( '', true ); ?>

<!-- END IF/WHILE HAVE POSTS LOOP -->

	<?php endwhile; endif; ?>

</section><!--/#content-->

<!-- CALL IN SIDEBAR.PHP -->

<?php get_sidebar(); ?>

<!-- CALL IN FOOTER.PHP -->

<?php get_footer(); ?>