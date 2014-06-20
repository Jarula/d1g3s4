<div class="flexslider">
  <ul class="slides">
    <?php foreach($widget_slider as $item) {
      $slide = '<li class="slider-container">';
      (isset($item['link'])) ? $slide .= '<a title="'.$item['title'].'" href="'.$item['link'].'" class="link" >' : '';
      $slide .= $item['image'];
      $slide .= '<div class="slider-text">';
      $slide .= '<h2 class="title">'.$item['title'].'</h2>';
      $slide .= '<p class="description">'.$item['description'].'</p>';
      $slide .= '</div>';
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
      prevText: '',
      nextText: '',
      start: function(slider){}
    });
  });
</script>
