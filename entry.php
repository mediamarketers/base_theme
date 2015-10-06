<!-- WORDPRESS ENTRY TEMPLATE -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!-- ARTICLE HEADER -->

	<header>

<!-- TITLE : IF IS A SINGULAR POST THEN POST TITLE IN H1, OTHERWISE H2 WITH PERMALINK-->

	<?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?> 
	
<!-- EDIT POST LINK -->
	
	<?php edit_post_link(); ?>
	
<!-- POST META -->
	
	<?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>
	
	</header>

<!-- CALL IN ENTRY-SUMMARY.PHP IF AN ARCHIVE, BRING IN ENTRY-CONTENT.PHP IF SEARCH -->

	<?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>

<!-- CALL IN ENTRY-FOOTER.PHP -->

	<?php if ( !is_search() ) get_template_part( 'entry-footer' ); ?>

</article><!--/#post-phpID--/.post-phpCLASS-->