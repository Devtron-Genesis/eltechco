<?php

/**
 * @file
 * Template to display a view as a table.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $header: An array of header labels keyed by field id.
 * - $caption: The caption for this table. May be empty.
 * - $header_classes: An array of header classes keyed by field id.
 * - $fields: An array of CSS IDs to use for each field id.
 * - $classes: A class or classes to apply to the table, based on settings.
 * - $row_classes: An array of classes to apply to each row, indexed by row
 *   number. This matches the index in $rows.
 * - $rows: An array of row items. Each row is an array of content.
 *   $rows are keyed by row number, fields within rows are keyed by field ID.
 * - $field_classes: An array of classes to apply to each field, indexed by
 *   field id, then row number. This matches the index in $rows.
 * @ingroup views_templates
 */
 $sku = $rows[0]['sku'];
 $product = commerce_product_load_by_sku($sku);
//echo '<pre>'; 
	$vari1 = $product->field_variation_1['und'][0]['tid'];
	$parent_vari1 = taxonomy_get_parents($vari1);
	//print_r($parent_vari1);
	$count_vari1 = 0;
	foreach($parent_vari1 as $row=>$val){
		$parent_vari1 = $val->name;
	}
	$vari2 = $product->field_variation_2['und'][0]['tid'];
	$parent_vari2 = taxonomy_get_parents($vari2);
	
	foreach($parent_vari2 as $row=>$val){
		$parent_vari2 = $val->name;
	}
 
?>
<table <?php if ($classes) { print 'class="'. $classes . '" '; } ?><?php print $attributes; ?>>
   <?php if (!empty($title) || !empty($caption)) : ?>
     <caption><?php print $caption . $title; ?></caption>
  <?php endif; ?>
  <?php if (!empty($header)) : ?>
    <thead>
      <tr>
        <?php foreach ($header as $field => $label): ?>
          <th <?php if ($header_classes[$field]) { print 'class="'. $header_classes[$field] . '" '; } ?>>
          
          	<?php //print_r($field);
	          	if($field == 'field_variation_1'){
	          		if(count($parent_vari1)>0){
		          		echo $parent_vari1;
	          		}else{
		          		//print $label;
	          		}
	          	}else if($field == 'field_variation_2'){
		          	if(count($parent_vari2)>0){
		          		echo $parent_vari2;	
	          		}else{
		          		//print $label;	
	          		}
	          	}
	          	else{
		          	print $label;
	          	}
          	?>
           
          </th>
        <?php endforeach; ?>
      </tr>
    </thead>
  <?php endif; ?>
  <tbody>
    <?php foreach ($rows as $row_count => $row): ?>
      <tr <?php if ($row_classes[$row_count]) { print 'class="' . implode(' ', $row_classes[$row_count]) .'"';  } ?>>
        <?php foreach ($row as $field => $content): ?>
          <td <?php if ($field_classes[$field][$row_count]) { print 'class="'. $field_classes[$field][$row_count] . '" '; } ?><?php print drupal_attributes($field_attributes[$field][$row_count]); ?>>
            <?php print $content; ?>
          </td>
        <?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
