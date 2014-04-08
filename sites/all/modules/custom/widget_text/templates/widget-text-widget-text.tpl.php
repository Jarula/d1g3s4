<?php if($widget_text['wrapper'] == 'ul'){ $intWrapper = 'li';} else { $intWrapper = 'div';}
print '<'.$widget_text['wrapper']; ?> class="widget-text">
<?php
foreach($widget_text['texts'] as $text) {
        $item = '<'.$intWrapper.'>';
	$item .= $text['title'];
	$item .= $text['description'];
	$item .= '</'.$intWrapper.'>';
	print $item;
}
?>
<?php print '</'.$widget_text['wrapper'].'>'; ?>
