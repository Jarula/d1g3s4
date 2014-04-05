<div class="grid-100 grid-parent">
  <?php print render($page['full']); ?>
</div>
<div class="grid-container">
  <div class="grid-100 grid-parent">
    <?php print render($page['fixed']); ?>
  </div>
</div>
<div class="grid-container">
  <div class="grid-100 grid-parent">
	<div class="grid-25 mobile-grid-100">
		<?php print render($page['sidebar']); ?>
	</div>
	<div class="grid-75 grid-parent mobile-grid-100">
		<?php print render($page['column']); ?>
	</div>
  </div>
</div>
