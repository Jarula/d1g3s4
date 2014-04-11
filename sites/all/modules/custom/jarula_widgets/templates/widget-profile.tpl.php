<?php 
print $widget_profile['image'];
print $widget_profile['name'];

if(isset($widget_profile['texts'])){
	foreach($widget_profile['texts'] as $text) {
       	 print $text['title'];
       	 print $text['description'];
	}
}
?>
