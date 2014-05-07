<div class="flexslider">
  <ul class="slides">
    <?php foreach($widget_slider as $item) {
      print '<li>'. $item['image']  .'</li>';
    } ?>
  </ul>
</div>

<script type="text/javascript">
  jQuery(window).load(function(){
    jQuery('.flexslider').flexslider({
      animation: "slide",
      controlNav: false,
      video: true,
      smoothHeight: true,
      pauseOnAction: true,
      prevText: 'Anterior',
      nextText: 'Siguiente',
      start: function(slider){}
    });
  });
</script>
