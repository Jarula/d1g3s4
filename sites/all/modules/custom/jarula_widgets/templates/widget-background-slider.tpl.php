<div class="fluid_container">
  <div class="camera_wrap camera_emboss pattern_1" id="background-slider">
    <?php foreach($widget_background_slider as $item) { ?>
    <div data-thumb="<?php print $item['image']; ?>" data-src="<?php print $item['image']; ?>"></div>
    <?php } ?>
  </div>
</div>

<script type="text/javascript">
  jQuery(function(){
	
    jQuery('#background-slider').camera({
      height: 'auto',
      fx: 'mosaicRandom',
      loader: 'bar',
      barPosition: 'right',
      barDirection: 'topToBottom',
      pagination: true,
      playPause: false,
      pauseOnClick: false,
      thumbnails: false,
      hover: false,
      opacityOnGrid: true,
      navigation: false,
      time: 5000
    });

  });
</script>
