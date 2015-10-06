<!-- META PIECE FOR ENTRY TEMPLATE -->

<section class="entry-meta">

<!-- AUTHOR'S POSTS LINK -->	
	
	<span class="author vcard">
		<?php the_author_posts_link(); ?>
	</span><!--/.author--/.vcard-->

<!-- SEPARATOR -->

	<span class="meta-sep">
	
		<?php echo ' | '; ?>
	
	</span><!--/.meta-sep-->

<!-- POST DATE -->

	<span class="entry-date">
	
		<?php the_time( get_option( 'date_format' ) ); ?>
	
	</span><!--/.entry-date-->

</section><!--/.entry-meta-->