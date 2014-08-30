<div class="flexslider">
    <ul class="slides link-item-container">
        <?php foreach($widget_custom_card_list as $item){ ?>
            <li class="grid-33 link-item">
                <a href="<?php print $item['destination']; ?>" title="<?php print $item['title']; ?>">
                    <?php print $item['image']; ?>
                    <div class="card-list-info">
                        <h1><?php print $item['title']; ?></h1>
                        <p><?php print $item['street']; ?></p>
                    </div>
                    <?php print $item['status']; ?>
                </a>
            </li>
        <?php } ?>
    </ul>
    <div class="link-item-background"></div>
</div>

<script type="text/javascript">
    jQuery(window).load(function() {
        jQuery('.flexslider').flexslider({
            animation: "slide",
            animationLoop: true,
            controlNav: true,
            direction: "horizontal",
            itemWidth: 315,
            itemMargin: 3,
            minItems: 5,
            maxItems: 5,
            nextText: '',
            prevText: '',
            randomize: true,
            smoothHeight: true,
            start: function(slider) {
                jQuery( "body" ).removeClass('loading');
            }
        });
    });
</script>