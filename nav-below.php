<!-- FOOTER NAVIGATION FOR MULTIPLE POSTS -->

<?php global $wp_query; if ( $wp_query->max_num_pages > 1 ) { ?>


<nav id="nav-below" class="navigation" role="navigation">

<!-- 'PREVIOUS POST' LINK CONTAINER -->

	<div class="nav-previous">

	<!-- 'PREVIOUS POST' LINK -->

		<?php next_posts_link(sprintf( __( '%s older', 'name_your_theme' ), '<span class="meta-nav">&larr;</span>' ) ) ?>
	
	</div><!--/.nav-previous-->

<!-- 'NEXT' LINK CONTAINER -->
	
	<div class="nav-next">

	<!-- 'NEXT POST' LINK -->

		<?php previous_posts_link(sprintf( __( 'newer %s', 'name_your_theme' ), '<span class="meta-nav">&rarr;</span>' ) ) ?>
		
	</div><!--/.nav-next-->

</nav><!--/#nav-below--/.navigation-->
<?php } ?>