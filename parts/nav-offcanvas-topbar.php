<!-- By default, this menu will use off-canvas for small
	and a topbar for medium-up -->

	<div class="top-bar" id="top-bar-menu">
		<div class="top-bar-left float-left">
			<ul class="menu">
				<li><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></li>
			</ul>
		</div>
		<div class="top-bar-right show-for-medium">

			<?php joints_top_nav(); ?>	
		</div>
		<div class="top-bar-right show-for-small-only">

			<ul class="menu float-right">

				<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
				<li><a data-toggle="off-canvas">Meny</a></li>
			</ul>
						<div class="float-right show-for-small-only">
				<?php mobile_lang_nav(); ?>	
			</div>
		</div>
	</div>