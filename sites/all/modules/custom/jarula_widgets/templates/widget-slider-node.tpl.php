<div class="flexslider">
  <div class="flex-bar">
    <div class="flex-thumbnails">Thumbnails</div>
  </div>
  <ul class="slides">
    <?php foreach($widget_slider as $item) {
      if ($item['type'] != 'type-video') { ?>
       <li class="<?php print $item['type']; ?>" data-thumb="<?php print $item['thumbnail']; ?>"><?php print $item['image'] ?></li>
      <?php } else { ?>
       <li class="<?php print $item['type']; ?>" data-thumb="<?php print $item['preview']; ?>"><div class="video-wrapper"><?php print $item['video'] ?></div></li>
      <?php } ?>
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
      prevText: '',
      nextText: '',
      start: function(slider) {
        jQuery( "body" ).removeClass('loading');

        //Thumbnails
        jQuery( ".flex-thumbnails" ).toggle(
          function() {
            jQuery( ".pane-bundle-widget-slider .flex-control-thumbs" ).fadeIn();
          }, function() {
            jQuery( ".pane-bundle-widget-slider .flex-control-thumbs" ).fadeOut();
          }
        );

        jQuery( ".pane-bundle-widget-slider .flex-control-thumbs li img" ).click(
          function() {
            jQuery( ".pane-bundle-widget-slider .flex-control-thumbs" ).fadeOut();
          }
        );

        jQuery( ".pane-bundle-widget-slider .flex-control-thumbs" ).append( "<div class='thumbs-close'></div>" );

        jQuery( ".pane-bundle-widget-slider .flex-control-thumbs div.thumbs-close" ).click(
          function() {
            jQuery( ".pane-bundle-widget-slider .flex-control-thumbs" ).fadeOut();
          }
        );

      }
    });
  });

</script>
