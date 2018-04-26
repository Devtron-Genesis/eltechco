<div class="box-title">
	<h1 class="grey">Products</h1>
</div>
<div class="carousel-wrap">
							<button class="buttons prev">Prev</button>
							<button class="buttons next">Next</button>
							<div class="carousel">
								<ul>
									<?php foreach($data as $row){
										$taxonomy = taxonomy_term_load($row->tid);
										//echo '<pre>';print_r($taxonomy);
										
										$image = $taxonomy->field_image_slide_frontpage['und'][0]['uri'];
										$url = url('taxonomy/term/' . $row->tid);
										//echo $image;
										//die;
									?> 
										<li>
										<div class="product">
											<h4 class="title"><a href="<?php echo $url?>"><?php echo $taxonomy->name?></a></h4>
											<div class="thumb">
												<a href="<?php echo $url?>"><img src="<?php print (image_style_url('slideproducts',$image));?>" alt="" /></a>
											</div>
										</div>
									</li>
		
									<?php }?>
								
								</ul>
							</div>
</div>
<script type="text/javascript">
	function initCallbackFx(carousel, obejctli,liindex,listate){
	    (jQuery)("#block-tvn-block-block-product .carousel").mouseenter(function(){
	        carousel.stopAuto();
	    }).mouseleave(function(){
	        carousel.startAuto();
	    });
	}

	(jQuery)(function(){
			(jQuery)("#block-tvn-block-block-product .carousel").jCarouselLite({
				btnNext: '.next',
				btnPrev: '.prev',
				visible: 4,
				auto: 800,
				speed: 1000,
				hoverPause: true,
			});
	});
	
	
	
</script>