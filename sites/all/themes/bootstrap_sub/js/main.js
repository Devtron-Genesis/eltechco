

(jQuery)(document).ready(function() {
	//(jQuery)('.navbar-collapse').addClass('collapse');
	
	
	window.jQuery.noConflict();
	(jQuery)('img').each(function(){
		var checkalt = (jQuery)(this).attr('alt');
		var src = (jQuery)(this).prop('src');
	var name = src.replace(/^.*\/|\.png$/g, '');
	if(checkalt == ''){
			//var newstr = src.replace('/sites/default/files/', ""); 
			(jQuery)(this).attr('alt',name);
		}
	});
	
	(jQuery)(":checkbox").change(function () {
    	(jQuery)(this).parent().parent().toggleClass('selected');
    });
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
    	//easing: 'ease-out',
		//easing: 'easeOutQuad',
    	auto: true,
    	pause: 10000,
    	// autoHover: true, // if you want to pause the sliding when mouse is over slide
    	pager: true,
    	controls: false
    });
	(jQuery)('#region-user-first').prepend('<div class="triangle"></div>');
	
	//(jQuery)('.active').parent().children('span').css('display','block');
		
	/*--- Every List classes First and Last ---*/

	(jQuery)('ul').each(function(){
		(jQuery)(this).find('li').first().addClass('first');
		(jQuery)(this).find('li').last().addClass('last');
	});

	(jQuery)('img').each(function(){
		var checkalt = (jQuery)(this).attr('alt');
		var src = (jQuery)(this).prop('src');
	var name = src.replace(/^.*\/|\.png$/g, '');
	if(checkalt == ''){
			//var newstr = src.replace('/sites/default/files/', ""); 
			(jQuery)(this).attr('alt',name);
		}
	});
	
	//messages
	setTimeout(function() {
        (jQuery)("#zone-content .error").parent().hide();
    }, 5000);
    
    
    //messages
	setTimeout(function() {
        (jQuery)(".page-cart #messages").hide();
    }, 5000);
    
    var default_vari1 = (jQuery)('#edit-field-variation-1-tid option:first').html();
    var default_vari2 = (jQuery)('#edit-field-variation-2-tid option:first').html();
    //alert(default_vari1);
    (jQuery)('.views-field-field-variation-1').html(default_vari1);
    (jQuery)('.views-field-field-variation-2').html(default_vari2);
    
    (jQuery)('.page-node-1737 .views-field-commerce-price').html('Price/M');
    
    (jQuery)('.page-node-1723 .views-field-commerce-price').html('Price/ea');
    
    (jQuery)('.page-node-1690 .views-field-commerce-price').html('Price/Length');
    
    (jQuery)('.page-node-1690 .views-field-field-variation-1').html('Size (W x H)');
   
    (jQuery)('.page-node-1689 .views-field-commerce-price').html('Price/Length');
    
    (jQuery)('.page-node-1689 .views-field-field-variation-1').html('Size (W x H)');
    
   
   //hide 
   var hide = "yes";
   (jQuery)('.view-commerce-cart-summary .views-field-commerce-line-item-cart-form-field-spreadsheet').each(function(){
	   var value = (jQuery)(this).html();
	   //alert(value);
	   value = (jQuery).trim(value);
	   //alert(value.length);
	   	   	//alert(value.length);
	   	
		   if(value.length > 11){
			   hide = "no";
		   }
	   
   });
  // alert(hide);
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
   (jQuery)('table').addClass('table');
   //()
   
  
   
});
function openRow(rid){
	
	var showhide = (jQuery)('.row-'+rid).css("display"); 
	//alert(showhide);
	if(showhide == "none"){
		//alert('aaa');
		(jQuery)('.row-'+rid).show();
	}else{
		(jQuery)('.row-'+rid).hide();
	}
	//(jQuery)('.hide-row').hide();
	//(jQuery)('.control-'+rid).addClass('hideall');
}

/*
Drupal.behaviors.mymoduleAjaxView = {
  attach: function(context, settings) {
    this.form.submit = customFunction();
    function customFunction() {
        //alert('Fired when form is submitted'); 
    }
}};
*/
jQuery(document).ready(function(){
	if(window.matchMedia('(max-width: 1024px)').matches) {
		(jQuery)('.alert.alert-block.alert-dismissible').removeClass('.messages');
	} 
});