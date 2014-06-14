<?php
foreach($widget_link as $link){
	print '<div class="'.$class.' grid-mobile-100 link-item">';
	print ' <div class="filler"></div> ';
        (isset($link['link'])) ? print $link['link'] : '';
        (isset($link['title'])) ? print $link['title'] : '';
	echo '</div>';
}
?>
