<header>
	<div class="grid-container grid-parent">
		<div class="logo grid-20 mobile-grid-100">
			<?php print render($page['header_logo']); ?>
		</div>
		<div class="grid-80 mobile-grid-100">
			<div class="grid-100 grid-parent">
				<?php print render($page['header_search']); ?>
			</div>
			<div class="grid-100 grid-parent">
				<?php print render($page['header_menu']); ?>
			</div>
		</div>
	</div>
</header>
<main>
	<div class="grid-container grid-parent">
		<?php print render($page['main']); ?>
	</div>
</main>
<footer>
	<div class="grid-100">
		<div class="grid-container">
			<?php print render($page['footer_menu']); ?>
		</div>
	</div>
	<div class="grid-100">
		<div class="grid-container">
			<?php print render($page['footer_copyright']); ?>
		</div>
	</div>
</footer>