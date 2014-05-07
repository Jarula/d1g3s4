<div class="flexslider">
  <ul class="slides">
    <?php foreach($widget_slider as $item) {
      $slide = '<li>';
      (isset($item['link'])) ? $slide .= '<a title="'.$item['title'].'" href="'.$item['link'].'" class="link" >' : '';
      $slide .= $item['image'];
      $slide .= '<h2 class="title">'.$item['title'].'</h2>';
      $slide .= '<div class="description">'.$item['description'].'</div>';
      (isset($item['link'])) ? $slide .= '</a>' : '';
      $slide .= '</li>';
      print $slide;
    } ?>
  </ul>
</div>

<script type="text/javascript">
  jQuery(window).load(function(){
    jQuery('.flexslider').flexslider({
      animation: "slide",
      controlNav: false,
      prevText: 'Anterior',
      nextText: 'Siguiente',
      start: function(slider){}
    });
  });
</script>
