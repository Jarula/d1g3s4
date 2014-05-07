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
      start: function(slider){}
    });
  });
</script>
