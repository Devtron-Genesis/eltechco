<?php

//echo $row->entity;
$product_id = $row->entity;


$nid = tvn_page_get_display_node_by_product_id($product_id);


//echo '<pre>'; print_r($nid);
//	die;
?>
<a href="<?php echo url('node/'.$nid)?>"><?php print $output?></a>