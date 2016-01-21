<!-- By default, this menu will use off-canvas for small
	and a topbar for medium-up -->

	<div class="top-bar" id="top-bar-menu">
		<div class="top-bar-left float-left">
			<ul class="menu show-for-small">
				<li><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></li>
			</ul>
		</div>
		<div class="top-bar-right show-for-large">

			<?php joints_top_nav(); ?>	
		</div>
		<div class="top-bar-right float-right hide-for-large">

			<ul class="menu float-right">

				<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
				<li><a data-toggle="off-canvas">Meny</a></li>
			</ul>
						<div class="float-right hide-for-large">
				<?php mobile_lang_nav(); ?>	
			</div>
		</div>
	</div>