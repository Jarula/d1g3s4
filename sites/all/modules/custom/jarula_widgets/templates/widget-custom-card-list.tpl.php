<div class="flexslider">
  <ul class="slides">
    <?php foreach($widget_custom_card_list as $item){ ?>
    <li class="grid-33">
      <a href="<?php print $item['destination']; ?>" title="<?php print $item['title']; ?>">
        <?php print $item['image']; ?>
        <h1><?php print $item['title']; ?></h1>
        <p><?php print $item['street']; ?></p>
        <?php print $item['status']; ?>
      </a>
    </li>
    <?php } ?>
  </ul>
</div>

<script type="text/javascript">
jQuery(window).load(function() {
  jQuery('.flexslider').flexslider({
    animation: "slide",
    animationLoop: true,
    itemWidth: 315,
    itemMargin: 3,
    controlNav: false,
    smoothHeight: true,
    randomize: true,
    prevText: 'Anterior',
    nextText: 'Siguiente',
    start: function(slider) {
      jQuery( "body" ).removeClass('loading');
    }
  });
});
</script>
