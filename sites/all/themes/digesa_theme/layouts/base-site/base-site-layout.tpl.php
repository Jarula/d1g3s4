<header>
	<div class="grid-container grid-parent">
		<div class="grid-80 prefix-10 suffix-10 grid-parent">
			<div class="grid-20 mobile-grid-100 logo">
				<?php print render($page['header_logo']); ?>
			</div>
			<div class="grid-80 mobile-grid-100">
				<div class="grid-100 grid-parent search-bar mobile-grid-75 mobile-prefix-25">
					<?php print render($page['header_search']); ?>
				</div>
				<nav id="main-menu" class="grid-100 grid-parent menu mobile-grid-25 mobile-suffix-75">
					<?php print render($page['header_menu']); ?>
				</nav>
			</div>
		</div>
	</div>
</header>
<main>
	<div class="grid-container grid-parent">
		<div class="grid-80 prefix-10 suffix-10">
			<?php print render($page['main_top']); ?>
		</div>
        </div>
	<?php print render($page['main']); ?>
</main>
<footer>
	<div class="grid-100 footer-menu clearfix">
		<div class="grid-container">
			<div class="grid-80 prefix-10 suffix-10 grid-parent">
				<?php print render($page['footer_menu']); ?>
			</div>
		</div>
	</div>
	<div class="grid-100 footer-copyright clearfix">
		<div class="grid-container">
			<div class="grid-80 prefix-10 suffix-10 grid-parent">
				<?php print render($page['footer_copyright']); ?>
			</div>
		</div>
	</div>
</footer>
