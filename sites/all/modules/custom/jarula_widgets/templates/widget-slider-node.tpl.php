<div class="flexslider">
  <div class="flex-bar"></div>
  <div class="flex-thumbnails">Thumbnails</div>
  <div class="flex-fullscreen">Fullscreen</div>
  <ul class="slides">
    <?php foreach($widget_slider as $item) { ?>
     <li data-thumb="<?php print $item['thumbnail']; ?>"><?php print $item['image'] ?></li>
    <?php } ?>
  </ul>
</div>

<script type="text/javascript">
  jQuery(window).load(function(){
    jQuery('.flexslider').flexslider({
      animation: "slide",
      controlNav: "thumbnails",
      video: true,
      pausePlay: true,
      smoothHeight: true,
      pauseOnAction: true,
      prevText: 'Anterior',
      nextText: 'Siguiente',
      start: function(slider){}
    });
  });

  jQuery( ".flex-fullscreen" ).toggle(
    function() {
      jQuery( ".pane-bundle-widget-slider" ).addClass( "fullscreen" );
    }, function() {
      jQuery( ".pane-bundle-widget-slider" ).removeClass( "fullscreen" );
    }
  );
</script>
