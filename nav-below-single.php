<!-- FOOTER NAVIGATION FOR SINGLE.PHP (A SINGLE POST) -->

<nav id="nav-below" class="navigation" role="navigation">

<!-- 'PREVIOUS POST' LINK CONTAINER -->

	<div class="nav-previous">

	<!-- 'PREVIOUS POST' LINK -->

		<?php previous_post_link( '%link', '<span class="meta-nav">&larr;</span> %title' ); ?>

	</div><!--/.nav-previous-->

<!-- 'NEXT' LINK CONTAINER -->

	<div class="nav-next">

	<!-- 'NEXT POST' LINK -->

		<?php next_post_link( '%link', '%title <span class="meta-nav">&rarr;</span>' ); ?>

	</div><!--/.nav-next-->

</nav><!--/#nav-below--/.navigation-->