jQuery(document).ready(function($){
	$('.contact_for_pd').click(function(){
		var pd_link = $(this).attr('pd_sold_out');

		if(pd_link != undefined){
			localStorage.setItem('contact_for_pd', pd_link);
		}
	})

});  
// >>>>>> product END

var viewPopupMobile = function(data) {
	var source   = $("#popup_mobile_template").html();
	var template = Handlebars.compile(source);
	var context = data;
	context.price_format = EGA.formatMoney(data.price)
	var html = template(context);
	$('#popup_mobile').html(html);
	$('#popup_mobile').modal();
}


$(document).on('click', '.mb_scroll_btn .mb_scroll_buynow ', function (e) {
	if($(window).width() <= 991) {
		e.preventDefault();
		var btn_content = $(this).text();
		var contact_for_pd = 'Liên hệ mua hàng'; 
		var sold_out = 'Cháy hàng';
		if(btn_content == contact_for_pd){
			var href = $('.contact_for_pd').attr('href');
			$('.contact_for_pd').trigger('click');
			window.location.href = href;
		} else if(btn_content == sold_out) {

		} else {
console.log('popup')
			$('.pd_page_popup.buynow').trigger('click');
		}
	}
});

var addToCartPopup = function(jqXHR, textStatus, errorThrown) {
	var pd_img = '';
	if(jqXHR['image'] == null){
		pd_img = '//hstatic.net/0/0/global/noDefaultImage6_large.gif';
	} else{
		pd_img = Haravan.resizeImage(jqXHR['image'], 'small');
	}
	var $info = '<div class="row"><div class="col-md-4"><a href="'+ jqXHR['url'] +'"><img width="70px" src="'+ pd_img +'" alt="'+ jqXHR['name'] +'"/></a></div><div class="col-md-8"><div class="addtocart_popup_notify">Đã thêm sản phẩm vào <a style="color: red" href="/cart">Giỏ hàng</a></div><div class="jGrowl-note"><a class="jGrowl-title" href="'+ jqXHR['url'] +'">'+ jqXHR['title'] +'</a><ins>'+ Haravan.formatMoney(jqXHR['price'], EGA.options.money_format) +'</ins></div></div></div>';
	var wait = setTimeout(function(){
		$.jGrowl($info,{
			life: 5000
		});	
	});
}

var changeItemSuccess = function() {
	Haravan.getCart(updateCartAjax);
	Haravan.getCart(updateCartPopup);
}

var updateQuantityOnPopup = function(){
	$.each($('#add-with-pop-up .product-quantity'), function() {
		var variantID = $(this).find('input[type="hidden"]').val();
		var $quantity = $(this).find('input[name=quantity]');
		var quantity = parseInt($quantity.val());
		$(this).find('input[type="button"]').click(function(){
			if($(this).hasClass('plus'))
			{
				$quantity.val(++quantity);
			} else{
				if(quantity > 1){
					$quantity.val(--quantity);
				}
			}
			Haravan.changeItem(variantID, quantity, changeItemSuccess);
		})

		$quantity.on('change', function(){
			var variantID = $(this).parents('.product-quantity').find('input[type="hidden"]').val();
			var quantity = parseInt($(this).val());
			Haravan.changeItem(variantID, quantity, changeItemSuccess);
		})
	})
}

var quickAddProduct = function (purl) {
	if($(window).width() > 991) {
		$.getJSON( purl + '.js', function (product) { 
			//make-up "#product-quick-add"   
			// assign hidden values 
			var pd_src;
			if(product.featured_image == null){
				pd_src = '//hstatic.net/0/0/global/noDefaultImage6_large.gif';
			} else{
				pd_src = product.featured_image.src;	
			}
			$('#product-quick-add .product_title_hd').val(product.title);  
			$('#product-quick-add .product_url').val(product.url);  
			$('#product-quick-add .product_img_small').val(pd_src);  // AAA!!!  

			//render selections (NOT formatted yet)
			$('select#product-select-qa').html('');  
			$('.selector-wrapper').remove(); // remove all selectors by  Haravan.OptionSelectors  
			// var $arrSize = [];
			// var $arrColor = []; 
			/*
				$.each(product.variants, function (i, v) {
					$('select#product-select-qa').append("<option value='" + v.id + "'>" + v.title + ' - ' + v.price + "</option>");
				});  

				new Haravan.OptionSelectors("product-select-qa", { 
					product: product, 
					onVariantSelected: callBackQuickAdd 
				});
				// select default variants
*/
			//auto add current variant... 
			// $('#ProductDetailsForm_QuickAdd').submit(); 
			$("#addtocartQA").click(); 



		});//end: success 

		//$('.modal-backdrop').css('opacity', '0');
		return false;
	} else {
		Haravan.addItem(purl, 1 , EGA.product.addItemSuccess);	
	}
}




var deleteItem = function(variant_id) {
	Haravan.removeItem(variant_id, updateCartAjax);
	Haravan.removeItem(variant_id, updateCartPopup);
}

var updateCartPopup = function(cart) {
	var source   = $("#popup-template").html();
	var template = Handlebars.compile(source);
	var context = cart;
	$.each(context.items, function(i, item){
//console.log(JSON.stringify(item))
		Handlebars.registerHelper('getVariantTitle', function(variant_title_arr) {

			var isDefaultTitle = false;
			$.each(variant_title_arr, function(i, v) {
				if(v == 'Default Title'){
					isDefaultTitle = true;
				}
			});
			if(!isDefaultTitle){
				return variant_title_arr.join('-')
			}
		});

		if(item.image == null){
			item.image = '//hstatic.net/0/0/global/noDefaultImage6_large.gif';
		} else{
			item.image = Haravan.resizeImage(item.image, 'small');
		}
		item.item_price_format = Haravan.formatMoney( item.price , EGA.options.money_format);
		item.item_total_price_format = Haravan.formatMoney( item.price * item.quantity , EGA.options.money_format);
	});
	context.total_price_format = Haravan.formatMoney( context.total_price , EGA.options.money_format);

	var html = template(context);
	$('#add-with-pop-up .modal-body').find('div:not(.title_popup)').remove();
	$('#add-with-pop-up .modal-body').append(html);

	if($('#add-with-pop-up .popup_item').length < 1) {
		$('#add-with-pop-up').modal('hide');
	}
	updateQuantityOnPopup()
}
var checkTopcartEmpty = function(cart) {

	if(cart.item_count <= 0) {
		var top_cart_empty = '<div class="minicart-header">Chưa có sản phẩm trong giỏ!</div>'
		+ '<div class="minicart-footer">'
		+ '<div class="minicart-actions clearfix">'
		+ '<a class="button" href="/collections/all"><span class="text">VÀO CỬA HÀNG</span></a>'
		+ '</div></div>';

		$('.top-cart-title, .top-cart-action').remove();
		top_cart_no_item = $('.top-cart-block .top-cart-content').html(top_cart_empty);
		return true;
	}
	else {
		return false;
	}
}

var updateCartAjax = function(cart) {
	if(!checkTopcartEmpty(cart)) {
		var html = '';
		html += '<div class="top-cart-title "><h4>Giỏ hàng</h4></div>'
		+ '<div class="top-cart-items">';
		$.each(cart.items, function(i, item) {
			var img_url;
			if(item.image == null){
				img_url = '//hstatic.net/0/0/global/noDefaultImage6_large.gif';
			} else{
				img_url = Haravan.resizeImage(item.image, 'thumb');
			}
			html += '<div class="top-cart-item clearfix">'
			+ '<div class="top-cart-item-image">'
			+ '<a href="' + item.url + '"><img src="' + img_url + '" alt="' + item.title + '" /></a>'
			+ '</div>'
			+ '<div class="top-cart-item-desc">'
			+ '<a href="' + item.url + '">' + item.title + '</a>'
			+	'<span class="top-cart-item-price">' + Haravan.formatMoney(item.price, EGA.options.money_format) + '</span>'
			+	'<span class="top-cart-item-quantity">x ' + item.quantity + '</span>'
			+ '<a class="top_cart_item_remove" onclick = "deleteItem(' + item.variant_id + ');">'
			+	'<i class="fa fa-times-circle"></i>'
			+	'</a>'
			+	'</div>'
			+	'</div>';
		})
		html += '</div><div class="top-cart-action clearfix ">'
		+ '<span class="fleft top-checkout-price">' + Haravan.formatMoney(cart.total_price, EGA.options.money_format) + '</span>'
		+ '<button onclick="window.location.href=&quot;/cart&quot;" class="button button-small nomargin fright">Xem giỏ hàng</button>'
		+ '</div>';

		$('.top-cart-content').html(html);
	}
	$('.top_cart_qty').html(cart.item_count);
}

var addItemSuccess = function(data) {
	if($(window).width() > 991) {
		//	console.log('a')
		$('#add-with-pop-up .title_popup span').text(data.title);
		Haravan.getCart(updateCartAjax);
		Haravan.getCart(updateCartPopup);
		$('#add-with-pop-up').modal();
	}
	else {
		Haravan.getCart(updateCartAjax);
		viewPopupMobile(data);	
	}
}

$(document).on('click', '.buynow_scroll', function(e) {
	e.preventDefault();
	$('[data-role=addtocart]').click();
})

$(document).on('click', '[data-role=addtocart]', function(e) {  //.click(function(e){ // 
	e.preventDefault();
	var form = $(this).closest('form');
	var formId = form.attr('id');
	var variantId = form.find("input[name='variantId']").val();
	var quantity = form.find("input[name='quantity']").val();
	//console.log(formId)
	if(formId === 'ProductDetailsFormQV'){
		Haravan.addItem(variantId, quantity, addToCartPopup);
		Haravan.getCart(updateCartAjax);
		//addToCartPopup(data);	
	} 
	else{
		Haravan.addItem(variantId, quantity, addItemSuccess);
	}

});
//})