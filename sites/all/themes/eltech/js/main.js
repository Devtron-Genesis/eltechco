(jQuery)(document).ready(function() {
	
	//window.jQuery.noConflict();
	
	(jQuery)('#nice-menu-1 li a').each(function(){
		(jQuery)(this).append('<span class="border"></span>');
		
	});
	(jQuery)('#tabs li a').hover(function(e){
        (jQuery)('#tabs li, #tab-content .current').removeClass('current');
        (jQuery)(this).parent().addClass('current');
        var currentTab = (jQuery)(this).attr('href');
        (jQuery)(currentTab).addClass('current');
        e.preventDefault();
    });
	(jQuery)('.tb-megamenu .nav > li > a').append('<span class="border"></span>');
	(jQuery)('#block-tvn-block-block-slider ul').bxSlider({
    	mode: 'vertical', // can be horizontal or fade
    
    	auto: true,
    	pause: 10000,
    	pager: true,
    	controls: false
    });
	(jQuery)('#region-user-first').prepend('<div class="triangle"></div>');
	


	(jQuery)('ul').each(function(){
		(jQuery)(this).find('li').first().addClass('first');
		(jQuery)(this).find('li').last().addClass('last');
	});

	(jQuery)('img').each(function(){
		var checkalt = (jQuery)(this).attr('alt');
		var src = (jQuery)(this).prop('src');
	var name = src.replace(/^.*\/|\.png$/g, '');
	if(checkalt == ''){
			(jQuery)(this).attr('alt',name);
		}
	});    
	setTimeout(function() {
        (jQuery)(".page-cart #messages").hide();
    }, 5000);
    
    
    (jQuery)('.page-node-1737 th.views-field-commerce-price').html('Price/M');
    
    (jQuery)('.page-node-1723 th.views-field-commerce-price').html('Price/ea');
    
    (jQuery)('.page-node-1690 th.views-field-commerce-price').html('Price/Length');
    
    (jQuery)('.page-node-1690 th.views-field-field-variation-1').html('Size (W x H)');
   
    (jQuery)('.page-node-1689 th.views-field-commerce-price').html('Price/Length');
    
    (jQuery)('.page-node-1689 th.views-field-field-variation-1').html('Size (W x H)');
   
   var hide = "yes";
   (jQuery)('.view-commerce-cart-summary .views-field-commerce-line-item-cart-form-field-spreadsheet').each(function(){
	   var value = (jQuery)(this).html();
	   value = (jQuery).trim(value);
		 if(value.length > 11){
			   hide = "no";
		   }
	   
   });
   if(hide == 'yes'){
	   (jQuery)('.view-commerce-cart-summary .views-field-commerce-line-item-cart-form-field-spreadsheet').hide();
	   (jQuery)('.view-commerce-cart-summary .views-field-commerce-line-item-cart-form-field-spreadsheet').hide();
   }

   if( (jQuery)('.sidenav-view-product').length > 0 ) {
	   (jQuery)('.view-sidebar-product-list .views-row').hover(
		   	function(){
				(jQuery)(this).find('.sidenav').addClass('show');			   
		   	},
		   	function(){
			   	(jQuery)(this).find('.sidenav').removeClass('show');
		   	}
	   );
   }
   
   if( (jQuery)('.sidenav-view-product').length > 0 ) {
	   (jQuery)('.view-sidebar-product-list-in-nodes .views-row').hover(
		   	function(){
				(jQuery)(this).find('.sidenav').addClass('show');			   
		   	},
		   	function(){
			   	(jQuery)(this).find('.sidenav').removeClass('show');
		   	}
	   );
   }
   
   if( (jQuery)('.sidenav-view-product').length > 0 ) {
	   (jQuery)('.view-menu-left-of-tools .views-row').hover(
		   	function(){
				(jQuery)(this).find('.sidenav').addClass('show');			   
		   	},
		   	function(){
			   	(jQuery)(this).find('.sidenav').removeClass('show');
		   	}
	   );
   }
   
   (jQuery)('.sidenav-view-product a').text('VIEW PRODUCT >');
   
   (jQuery)('.tb-megamenu .nav > li > a').append('<span class="border"></span>');
   
   (jQuery)('.tb-megamenu .nav > li').each(function(){
	   if( (jQuery)(this).find('.tb-megamenu-submenu').length > 0 ) {
		   var href = (jQuery)(this).find('a').attr('href');
		   var submenuLength = (jQuery)(this).find('.view-megamenu .views-row').length;
		   (jQuery)(this).find('.tb-megamenu-submenu .view-megamenu .view-content').append(
		   	'<div class="views-row views-row-5 views-row-odd views-full-range range'+ submenuLength +'">' +
		   		'<div class="views-field views-field-title-1">' +      
		   			'<span class="field-content">' +
		   				'<div class="topnav-item">' +
		   					'<a href="'+ href +'">VIEW FULL RANGE ></a>' +
		   				'</div>' +
		   			'</span>' +
		   		'</div>' +
		   	'</div>'
		   );
		   
		   (jQuery)(this).find('.mega-dropdown-inner .view-megamenu .views-row.views-row-even').prepend(
		   	'<img src="/sites/all/themes/eltech/img/topnav-divide.png" alt="" style="width: 2px; height: auto;float: left;" />'
		   );
	   }
   });
   
   (jQuery)('#commerce-checkout-form-checkout #edit-continue').click(function(){
	   if((jQuery)('.form-file').length > 0){
		   var valueFile = (jQuery)('.form-file').val();
		   
		   if(valueFile == ''){
			   alert('You must upload required spreadsheet first before proceed');
			   location.reload();
			   return false;
		   }
		   
	   }	
   });
   
   
   (jQuery)("#search-block-form .form-text").keypress(function (e) {
	   if(e.which === 13) {
	      (jQuery)("#search-block-form").submit();
	   }
	});
   
   
   
});
