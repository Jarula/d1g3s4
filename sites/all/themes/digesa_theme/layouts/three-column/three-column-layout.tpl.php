<div class="grid-container">
	<div class="grid-80 prefix-10 suffix-10 grid-parent">
		<div class="grid-35 grid-mobile-100">
			<?php print render($page['left']); ?>
		</div>
		<div class="grid-40 grid-mobile-100">
	        	<?php print render($page['center']); ?>
		</div>
		<div class="grid-25 hide-on-mobile">
        		<?php print render($page['right']); ?>
		</div>
	</div>
</div>
