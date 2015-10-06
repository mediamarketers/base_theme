<!-- BEGIN SIDEBAR CONTAINER -->

<aside id="sidebar" role="complementary">

<!-- IF THERE ARE WIDGETS... -->

	<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>

<!-- BEGIN WIDGETS CONTAINER -->

	<div id="primary" class="widget-area">

		<ul class="xoxo">

		<!-- ...DISPLAY THEM -->

			<?php dynamic_sidebar( 'primary-widget-area' ); ?>

		</ul><!--/.xoxo-->

	</div><!--/#primary--/.widget-area-->

	<?php endif; ?>

</aside><!--/#sidebar-->