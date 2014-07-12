<article id="article" class="grid-container">
	<div class="grid-80 prefix-10 suffix-10 grid-parent">
		<div class="grid-50 mobile-grid-100 info">
			<?php print render($page['info']); ?>
		</div>
        	<div class="grid-50 mobile-grid-100 map">
	                <?php print render($page['map']); ?>
        	</div> 
		<div class="clearfix"></div>
        	<div class="grid-100 slider">
	                <?php print render($page['slider']); ?>
        	</div>
	        <div class="clearfix"></div>
        	<div class="grid-20 suffix-80 grid-mobile-100 planes">
	                <?php print render($page['planes']); ?>
        	</div>
	        <div class="clearfix"></div>
        	<div class="grid-30 mobile-grid-100 features">
	                <?php print render($page['features']); ?>
        	</div>  
	        <div class="grid-70 mobile-grid-100 more">
        	        <?php print render($page['more']); ?>
	        </div>
        	<div class="clearfix"></div>
	        <div class="grid-100 contact">
        	        <?php print render($page['contact']); ?>
	        </div>
	</div>
</article>

<aside class="related grid-container">
	<div class="grid-80 prefix-10 suffix-10 grid-parent">
		<?php print render($page['related']); ?>
	</div>
</aside>
