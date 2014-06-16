<div class="grid-container grid-parent">
	<div class="grid-80 prefix-10 suffix-10 grid-parent">
		<?php print render($page['top']); ?>
	</div>
	<div class="grid-80 prefix-10 suffix-10 grid-parent">
		<div class="grid-33 grid-mobile-100">
			<?php print render($page['left']); ?>
		</div>
		<div class="grid-33 grid-mobile-100">
	        	<?php print render($page['center']); ?>
		</div>
		<div class="grid-33 hide-on-mobile">
        		<?php print render($page['right']); ?>
		</div>
	</div>
</div>
