<?php foreach($widget_custom_card_list as $item){ ?>
<article class="grid-33">
<a href="<?php print $item['destination']; ?>" title="<?php print $item['title']; ?>">
    <?php print $item['image']; ?>
    <h1><?php print $item['title']; ?></h1>
    <p><?php print $item['street']; ?></p>
    <?php print $item['status']; ?>
  </a>
</article>
<?php } ?>
