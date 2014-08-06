<div class="flexslider">
  <div class="flex-bar">
    <div class="flex-thumbnails">Thumbnails</div>
    <div class="flex-fullscreen">Fullscreen</div>
  </div>
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
      start: function(slider) {
        jQuery( "body" ).removeClass('loading');

        jQuery( ".flex-fullscreen" ).toggle(
          function() {
            jQuery( ".pane-bundle-widget-slider" ).addClass( "fullscreen" );
          }, function() {
            jQuery( ".pane-bundle-widget-slider" ).removeClass( "fullscreen" );
          }
        );


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

        jQuery( ".pane-bundle-widget-slider .flex-control-thumbs" ).append( "<div class='thumbs-close'>X</div>" );

        jQuery( ".pane-bundle-widget-slider .flex-control-thumbs div.thumbs-close" ).click(
          function() {
            jQuery( ".pane-bundle-widget-slider .flex-control-thumbs" ).fadeOut();
          }
        );

      }
    });
  });

</script>
