<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */
?>
<?php global $base_url?>
<?php 
	$order_id = $row->order_id;
	$itemId = $row->commerce_line_item_field_data_commerce_line_items_line_item_;
 ?>
<a onclick="javascript:return removeItemCart(<?php echo $order_id?>,<?php echo $itemId?>)">Remove</a>
<script type="text/javascript">
	function removeItemCart(order_id,line_item_id){
		(jQuery).get('<?php echo $base_url?>/removeCart',{item_id:line_item_id},function(data){
			if(data=='success'){
				(jQuery)('.line-'+ line_item_id).hide();
			}
			else{
				alert('fall');
			}
		});
	}
</script>