<!-- CONTENT PIECE FOR ENTRY TEMPLATE -->

<section class="entry-content">

	<!-- POST FEATURED IMAGE -->

	<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>

	<!-- POST TEXT -->

	<?php the_content(); ?>

	<!-- POST LINKS -->

	<div class="entry-links">
		
		<!-- 'wp_link_pages()' IS LOCATED IN 'wp-includes/post-template.php' -->
		
		<?php wp_link_pages(); ?>

	</div><!--/entry-links-->

</section><!--/.entry-content-->