<div class="slider">
						<ul>
						<?php foreach(array_reverse($data) as $row) { ?>
    						 <li>
								<div class="slide">
									<div class="captions">
										<?php
										$node = node_load($row->nid);
										$view = node_view($node);											
										?>	
										<?php print drupal_render($view['field_captions']);?>
									</div>
									<div class="image">
										<?php if($row->field_link['und'][0]['value'] != '#'){?> 
												<a target="_blank" href="<?php echo $row->field_link['und'][0]['value'];?>">
													<img src="<?php print (image_style_url('slidehome',$row->field_image['und'][0]['uri']));?>" alt=""></a>
										<?php }else{?> 
											<img src="<?php print (image_style_url('slidehome',$row->field_image['und'][0]['uri']));?>" alt="">
										<?php }?>
									</div>
								</div>
							</li>
    					<?php  } ?>
						</ul>
					</div>