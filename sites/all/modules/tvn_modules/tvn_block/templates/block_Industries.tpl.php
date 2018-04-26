<?php 
	global $theme;
	
	
	
?>
				<div class="specials">
					<div class="widget col-md-4 widget-first">
						<?php
							  $block = module_invoke('block', 'block_view', '8');
							  print $block['content'];
						?>
					</div>
					<div class="widget col-md-4">
						
						<?php
							  $block = module_invoke('block', 'block_view', '10');
							  print $block['content'];
						?>
					</div>
					<div class="widget last col-md-4">
						<?php
							  $block = module_invoke('block', 'block_view', '11');
							  print $block['content'];
						?>
					</div>
				</div>
				<div class="industries">
					<div class="box-title">
						<h1>Industries <span>we serve</span></h1>
					</div>
					<div class="box-content">
						<div class="tabwrap">
						   <?php if($theme !='bootstrap_sub'){ ?> 
						   
						    <ul id="tabs">
						    	<?php $count=0; foreach($data as $row){?> 
						    		 <li <?php if($count==0){?>class="current"<?php }?>>
						        	<a href="#tab-<?php echo $row->nid?>">
						        		<span class="left"></span>
						        		<span class="title"><?php echo $row->title?></span>
						        		<span class="right"></span>
						        	</a>
						        </li>
						    	
						    	<?php $count++; }?>
						    </ul>
						    <?php }?>
						    
						    <div id="tab-content">
						    	<?php $count=0; foreach($data as $row){?>
						    			   <div id="tab-<?php echo $row->nid?>" <?php if($count==0){?>class="tab current"<?php }else{ ?> class="tab" <?php }?>>
						        	<div class="inner">
							        	<span class="ind-title"><?php echo $row->title?></span>
							        	<div class="description">								            	
							        		<?php echo $row->body['und'][0]['value']?>
								        </div>
							            <img src="<?php print (image_style_url('industry',$row->field_hero_image['und'][0]['uri']));?>" alt="">
									</div>
						        </div>
						    	
						    	<?php $count++; }?>
						    
						    </div>
						</div><!-- end .tabwrap -->
					</div>
				</div>
			