<?php 
if($widget_text['wrapper'] == 'ul'){ 
	$openIntWrapper = '<li>'; 
	$closeIntWrapper = '</li>';
}

print '<'.$widget_text['wrapper'] . ' class="widget-text">';

foreach($widget_text['texts'] as $text) {
        (isset($openIntWrapper)) ? print $openIntWrapper : '';
	(isset($text['title'])) ? print $text['title'] : '';
	(isset($text['description'])) ? print $text['description'] : '';
        (isset($openIntWrapper)) ? print $closeIntWrapper : '';
}
?>
<?php print '</'.$widget_text['wrapper'].'>'; ?>
