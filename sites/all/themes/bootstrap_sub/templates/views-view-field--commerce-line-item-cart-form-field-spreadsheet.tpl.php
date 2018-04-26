<?php 

$entity = $row->_field_data['commerce_product_field_data_commerce_product_product_id']['entity'];
$sku = $entity->sku;
$product =  commerce_product_load_by_sku($sku);
$nid = tvn_page_get_referencing_node_id($product->product_id);
$array = array('1759','1760','1761','1762');
?>
<?php 
if (in_array($nid, $array)) {
	print $output;
}
?>