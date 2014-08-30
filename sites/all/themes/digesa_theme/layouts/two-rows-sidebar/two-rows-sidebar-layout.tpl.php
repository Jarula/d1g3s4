<div class="grid-container grid-parent clearfix">
	<div class="grid-80 prefix-10 suffix-10 grid-parent">
		<div class="grid-30 mobile-grid-100">
			<?php print render($page['sidebar']); ?>
		</div>
        	<div class="grid-70 mobile-grid-100">
                	<?php print render($page['content']); ?>
	        </div>
	</div>
</div>
