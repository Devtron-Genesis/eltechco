<div class="slider">
						<ul>
						 <?php foreach($data as $row) { ?>
    		<li>
								<div class="slide">
									<div class="captions">
										<span class="cap-big-white">We provide complete &amp;</span>
										<span class="cap-big-red">Integrated solutions</span>
										<span class="cap-small-white">We will work with you to achieve best outcomes.</span>
									</div>
									<div class="image">
										
										<a href="<?php if(isset($row->field_link['und'])){ echo $row->field_link['und'][0]['value'];}else{
			echo "#";
		}?>">
		
		<img src="<?php print (image_style_url('slidehome',$row->field_image['und'][0]['uri']));?>" alt="">
		
		
		</a>

										
										
									</div>
								</div>
							</li>

		
    <?php  } ?>
												</ul>
					</div>