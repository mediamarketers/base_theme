<!-- CALL IN HEADER.PHP -->

<?php get_header(); ?>

<?php global $post; ?>

<!-- ATTACHMENT CONTENT BEGINS HERE -->

<section id="content" role="main">

<!-- BEGIN WORDPRESS POSTS LOOP -->

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- ATTACHMENT WORDPRESS POST TITLE (HEADER) AND ENTRY META -->

	<header class="header">
		
	<!-- TITLE -->
	
		<h1 class="entry-title"><?php the_title(); ?> <span class="meta-sep">|</span> <a href="<?php echo get_permalink( $post->post_parent ); ?>" title="<?php printf( __( 'Return to %s', 'name_your_theme' ), esc_html( get_the_title( $post->post_parent ), 1 ) ); ?>" rev="attachment"><span class="meta-nav">&larr; </span><?php echo get_the_title( $post->post_parent ); ?></a></h1> <?php edit_post_link(); ?>
	
	<!-- ENTRY META -->
	
		<?php get_template_part( 'entry', 'meta' ); ?>
	
	</header><!--/.header-->

<!-- ATTACHMENT WORDPRESS POST ARTICLE -->

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<!-- ATTACHMENT WORDPRESS POST ARTICLE HEADER -->
	
		<header class="header">
	
	<!-- ATTACHMENT NAVIGATION -->
		
			<nav id="nav-above" class="navigation" role="navigation">
			
			<!-- PREV BUTTON -->
				
				<div class="nav-previous">
					<?php previous_image_link( false, '&larr;' ); ?>
				</div><!--/.nav-previous-->
				
			<!-- NEXT BUTTON -->

				<div class="nav-next">
					<?php next_image_link( false, '&rarr;' ); ?>
				</div><!--/.nav-next-->

			</nav><!--/#nav-above--/.navigation-->
		
		</header><!--/.header-->

	<!-- ATTACHMENT IMAGE (SPECIFIC ENTRY CONTENT) -->

		<section class="entry-content">

		<!-- THE IMAGE ATTACHMENT OR LINK TO POST -->
		
			<div class="entry-attachment">
				<?php if ( wp_attachment_is_image( $post->ID ) ) : $att_image = wp_get_attachment_image_src( $post->ID, "large" ); ?>
					<p class="attachment"><a href="<?php echo wp_get_attachment_url( $post->ID ); ?>" title="<?php the_title(); ?>" rel="attachment"><img src="<?php echo $att_image[0]; ?>" width="<?php echo $att_image[1]; ?>" height="<?php echo $att_image[2]; ?>" class="attachment-medium" alt="<?php $post->post_excerpt; ?>" /></a></p>
				<?php else : ?>
					<a href="<?php echo wp_get_attachment_url( $post->ID ); ?>" title="<?php echo esc_html( get_the_title( $post->ID ), 1 ); ?>" rel="attachment"><?php echo basename( $post->guid ); ?></a>
				<?php endif; ?>
			</div>
		
		<!-- IMAGE CAPTION OR ENTRY EXCERPT -->
		
			<div class="entry-caption">
				<?php if ( !empty( $post->post_excerpt ) ) the_excerpt(); ?>
			</div>
			
		<!-- THE IMAGE ATTACHMENT -->	
			
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
		</section>

	</article>

<!-- CALL IN COMMENTS.PHP -->

	<?php comments_template(); ?>

<!-- END WORDPRESS POSTS LOOP -->

	<?php endwhile; endif; ?>


</section><!--/#content-->

<!-- CALL IN SIDEBAR.PHP -->

<?php get_sidebar(); ?>

<!-- CALL IN FOOTER.PHP -->

<?php get_footer(); ?>