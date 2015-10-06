<!-- SUMMARY PIECE FOR ENTRY TEMPLATE -->

<section class="entry-summary">

<!-- POST EXCERPT -->

	<?php the_excerpt(); ?>
	
<!-- IF IS A SEARCH DISPLAY PAGE LINKS -->
	
	<?php if( is_search() ) { ?><div class="entry-links"><?php wp_link_pages(); ?></div><?php } ?>

</section><!--/.entry-summary-->