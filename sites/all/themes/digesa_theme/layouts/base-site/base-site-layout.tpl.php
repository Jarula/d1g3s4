<header>
	<div class="grid-container grid-parent">
		<div class="grid-20 mobile-grid-100 logo">
			<?php print render($page['header_logo']); ?>
		</div>
		<div class="grid-80 mobile-grid-100">
			<div class="grid-100 grid-parent search-bar">
				<?php print render($page['header_search']); ?>
			</div>
			<nav id="main-menu" class="grid-100 grid-parent menu">
				<?php print render($page['header_menu']); ?>
			</nav>
		</div>
	</div>
</header>
<main>
	<div class="grid-container">
		<?php print render($page['main_top']); ?>
        </div>
	<?php print render($page['main']); ?>
</main>
<footer>
	<div class="grid-100 footer-menu clearfix">
		<div class="grid-container">
			<?php print render($page['footer_menu']); ?>
		</div>
	</div>
	<div class="grid-100 footer-copyright clearfix">
		<div class="grid-container">
			<?php print render($page['footer_copyright']); ?>
		</div>
	</div>
</footer>
