<article<?php print $attributes; ?>>
  <?php print $user_picture; ?>
  <?php print render($title_prefix); ?>
  <?php if (!$page && $title): ?>
  <header>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  </header>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($display_submitted): ?>
  <footer class="submitted"><?php print $date; ?> -- <?php print $name; ?></footer>
  <?php endif; ?>  
  
  <div<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>
  
  	<?php $node = node_load($nid);
	  
	  	$category = $node->field_new_category['und'][0]['tid'];
	  	
	  	
	  	
	  	//if($category != 393){
	  	$array = array('1759','1761','1762');
	  	
	  	if (!in_array($nid, $array)) {
  	?>
  	<div class="banner_new">
	  	<p><strong>Can't find what you're looking for? </strong></p>
	  	<p>Contact our friendly sales team!</p>
	  	<a href="mailto:sales@eltech.com.au">sales@eltech.com.au</a>
	  	<a href="tel:1800 007 458" class="tel">1800 007 458</a>
  	</div>
	  <?php }else{?>
		  <?php $pdf = '#';
		  	if(count($node->field_pdf)>0){
			  	$pdf = $node->field_pdf['und'][0]['uri'];
			  	
			  	$pdf = file_create_url($pdf);
			  	
		  	}
		  	$video = '#';
		  	if(count($node->field_video)>0){
			  	$video = $node->field_video['und'][0]['input'];
		  	}
		  ?>
		  <div class="banner_2">
			  <div class="title_banner2"><img src="/header_banner2.png" alt="image" title="image" /></div>
			  <div class="content_banner2">
				  <p><strong>Before purchasing this product,</strong></p>
				  <p>you must download & complete </p><p>your information spreadsheet.</p>
			  </div>
			  <div class="footer_banner2">
				  <a href="<?php echo $pdf?>" target="_blank"> <img src="/download.png"  alt="image" title="image" /></a>
				 <!-- <a href="<?php echo $video?>" target="_blank"> <img src="/watch.png"  alt="image" title="image" /></a>-->
				 
			  </div>
		  </div>
	 <?php }?>
  <div class="clearfix">
    <?php if (!empty($content['links'])): ?>
      <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
    <?php endif; ?>

    <?php print render($content['comments']); ?>
  </div>
</article>

<?php 
	$tid = $node->field_new_category['und'][0]['tid'];
	$path  = drupal_get_path_alias('taxonomy/term/' . $tid) ;
		
?>
<?php if($tid == '387'){?> 
	<script type="text/javascript">
		(jQuery)(function(){
			(jQuery)('th.views-field-field-variation-1').html('Size <br/> W x H x D');
			
		});
	</script>
<?php }?>

<script type="text/javascript">
	(jQuery)(document).ready(function() {
		(jQuery)('#nice-menu-1 a').each(function(){
			var href = (jQuery)(this).attr('href');
			//alert(href);
			if(href == '/<?php echo $path?>'){
				//alert(href);
				(jQuery)(this).addClass('active');
				
			}
			
		});
		
		(jQuery)('#edit-field-variation-1-tid option').each(function(){
			var valuethis = (jQuery)(this).val();
			if(valuethis == 'All'){
				var htmlThis = (jQuery)(this).html();
				//(jQuery)('th.views-field-field-variation-1').html(htmlThis);
			}
		});
		
		(jQuery)('#edit-field-variation-2-tid option').each(function(){
			var valuethis = (jQuery)(this).val();
			if(valuethis == 'All'){
				var htmlThis = (jQuery)(this).html();
				//(jQuery)('th.views-field-field-variation-2').html(htmlThis);
			}
		});
		
		
		
	});
	
</script>