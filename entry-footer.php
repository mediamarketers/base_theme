<!-- FOOTER PIECE FOR ENTRY TEMPLATE -->

<!-- ENTRY FOOTER BEGINS HERE -->

<footer class="entry-footer">

<!-- CATEGORY LINKS -->

	<span class="cat-links">
	
	<!-- CATEGORIES TITLE -->
	
		<?php _e( 'Categories: ', 'name_your_theme' ); ?>
	
	<!-- LIST CATEGORIES -->
	
		<?php the_category( ', ' ); ?>
	
	</span><!--/.cat-links-->

<!-- TAGS LINKS -->
	
	<span class="tag-links">
	
	<!-- LIST TAGS -->
	
		<?php the_tags(); ?>
	
	</span><!--/.tag-links-->

<!-- COMMENTS LINKS -->
	
	<?php
		if ( comments_open() ) { 
		echo '<span class="meta-sep"> | </span>
		<span class="comments-link">
			<a href="' . get_comments_link() . '">' . sprintf( __( 'Comments', 'name_your_theme' ) ) . '</a>
		</span>';
	} ?>

</footer><!--/.entry-footer-->