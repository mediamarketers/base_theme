<?php if ( 'comments.php' == basename( $_SERVER['SCRIPT_FILENAME'] ) ) return; ?>

<!-- COMMENTS SECTION BEGINS HERE -->

<section id="comments">

	<!-- WORDPRESS COMMENTS LOOP BEGINS HERE -->
	
	<?php 
	if ( have_comments() ) : 
	global $comments_by_type;
	$comments_by_type = &separate_comments( $comments );
	if ( ! empty( $comments_by_type['comment'] ) ) : 
	?>
	
	<!-- LISTING OF COMMENTS -->
	
	<section id="comments-list" class="comments">
	
	<!-- NUMBER OF COMMENTS -->
	
		<h3 class="comments-title"><?php comments_number(); ?></h3>
		
		<?php if ( get_comment_pages_count() > 1 ) : ?>
		
	
	<!-- COMMENTS NAVIGATION ABOVE -->
	
		<nav id="comments-nav-above" class="comments-navigation" role="navigation">
		
			<div class="paginated-comments-links">
				<?php paginate_comments_links(); ?>
			</div><!--/.paginated-comments-links-->
	
		</nav><!--/#comments-nav-above--/.comments-navigation-->
	
		<?php endif; ?>

	<!-- THE ACTUAL LISTING OF COMMENTS -->
	
		<ul>
			<?php wp_list_comments( 'type=comment' ); ?>
		</ul>
	
		<?php if ( get_comment_pages_count() > 1 ) : ?>
	
	<!-- COMMENTS NAVIGATION BELOW -->
	
		<nav id="comments-nav-below" class="comments-navigation" role="navigation">
	
			<div class="paginated-comments-links">
				<?php paginate_comments_links(); ?>
			</div><!--/.paginated-comments-links-->
	
		</nav><!--/#comments-nav-below--/.comments-navigation-->
	
		<?php endif; ?>
	
	</section><!--/#comments-list--/.comments-->
	
	<?php 
	endif; 
	if ( ! empty( $comments_by_type['pings'] ) ) : 
	$ping_count = count( $comments_by_type['pings'] ); 
	?>
	
	<!-- COMMENTS TRACKBACKS LIST -->
	
	<section id="trackbacks-list" class="comments">
	
		<h3 class="comments-title"><?php echo '<span class="ping-count">' . $ping_count . '</span> ' . ( $ping_count > 1 ? __( 'Trackbacks', 'name_your_theme' ) : __( 'Trackback', 'name_your_theme' ) ); ?></h3>
		
		<ul>
			<?php wp_list_comments( 'type=pings&callback=name_your_theme_custom_pings' ); ?>
		</ul>
	
	</section><!--/#trackbacks-list--/.comments-->
	
	<!-- CALL IN THE COMMENTS FORM (CHANGE THE COMMENT FORM THROUGH FUNCTIONS.PHP BY ADDING A FILTER) -->
	
	<?php 
	endif; 
	endif;
	if ( comments_open() ) comment_form();
	?>

</section><!--/#comments-->