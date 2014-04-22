<div class="grid-container grid-parent">
	<div class="grid-100">
		<?php print render($page['top']); ?>
	</div>
	<div>
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
