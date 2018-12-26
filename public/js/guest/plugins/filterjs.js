function getStringFilter(currentSelected){
	var vendor="",product_type="",price="",color='',tag_custom_1="",tag_custom_2="",tag_custom_3="";
	var tag_prefix_1 = 'size',
			tag_prefix_2 = 'chatlieu',
			tag_prefix_3 = 'xuatxu';
	//var searchString = "search?q=";
	var searchString = '';
	var search_hrv = "search?type=product&q=";
	// if current page is search
	if ($("#collection_id").val() == ">=0") {
		searchString += $("#search_term").val() + "&";
	}
	searchString += "filter=(";
	// BEGIN: Filter
	var collectionFilter = "";
	if ($("#collection_id").val() != ">=0") {
		if($("#collection_id").val() != "=0") {
			collectionFilter += "(collectionid:product"+$("#collection_id").val()+")";
		}
		else {
			collectionFilter = "(collectionid:product>=0)";
		}
	}
	else {
		collectionFilter = "(collectionid:product>=0)";
	}



	// BEGIN: GET All checked filter string
	// standard filter
	vendor = getCheckedBy("vendor",vendor);
	product_type = getCheckedBy("product_type",product_type);
	price = getCheckedBy("price",price);
	// custom filer

	color = getCheckedBy("mausac",color);

	tag_custom_1 = (tag_prefix_1 != '') ? getCheckedBy(tag_prefix_1,tag_custom_1) : getCheckedBy('a',tag_custom_1);
	tag_custom_2 = (tag_prefix_2 != '') ? getCheckedBy(tag_prefix_2,tag_custom_2) : getCheckedBy('a',tag_custom_2);
	tag_custom_3 = (tag_prefix_3 != '') ? getCheckedBy(tag_prefix_3,tag_custom_3) : getCheckedBy('a',tag_custom_3);
	// END: GET FILTER

	//console.log(vendor);
	//console.log(color);
	// BEGIN: MERGE all filter string
	collectionFilter = mergeFilterWith(vendor,collectionFilter);
	collectionFilter = mergeFilterWith(product_type,collectionFilter);
	collectionFilter = mergeFilterWith(price,collectionFilter);

	collectionFilter = mergeFilterWith(color ,collectionFilter);
	collectionFilter = mergeFilterWith(tag_custom_1,collectionFilter);
	collectionFilter = mergeFilterWith(tag_custom_2,collectionFilter);
	collectionFilter = mergeFilterWith(tag_custom_3,collectionFilter);

	searchString+=collectionFilter;
	searchString+=')';
	// END: MERGE

	// BEGIN: Sorting
	/*
	if ($( "#sortControl option:selected" ).val() != "" && $( "#sortControl option:selected" ).val() != "manual") {
		searchString += "&sortby="+$( "#sortControl option:selected" ).attr('sort_by');
	}
	else{
	}
	// END: Sorting
	return searchString;
*/

	searchString = encodeURIComponent(searchString);
	if ((typeof $( "#sortControl option:selected" ).val() == "undefined") || ($( "#sortControl option:selected" ).val() == 'manual')) { }
	else {
		searchString += "&sortby="+$( "#sortControl option:selected" ).attr('sort_by');
	}
	search_hrv += searchString;
	return search_hrv;
}

function getCheckedBy(filterKey, filterOption){
	$(':input[class^='+filterKey+']:checked').each(function(){
		if (filterOption==""){
			filterOption=$(this).val();
		}
		else{
			filterOption=filterOption+'||'+$(this).val();
		}
	});
	return filterOption;
}

function mergeFilterWith(filterCondition, currCollectionFilter){
	if(filterCondition != ""){
		filterCondition='('+filterCondition+')';
		currCollectionFilter+='&&'+filterCondition;
	}
	return currCollectionFilter;		
}

function mapData(data, position_load) {
	var current_list = $(position_load),
			product_list = $(data).find(position_load);
	current_list.replaceWith(product_list);
}

function loadResultBy(url_building, position_load) {
	$.ajax({
		'url': url_building,
		'type':'POST',
		'beforeSend': function() {
			$('body').removeClass('loaded');
		},
		'success':function(data){
			mapData(data, position_load);
		},
		'complete':function() {
			EGA.init();
			$('body').addClass('loaded');
		}
	});
}



// ajax pagination
$('.ajax-pagination li a').click(function(e) {
	
	if(location.search.indexOf('filter') > -1) {
	e.preventDefault();
	 if($(this).parent().hasClass('disabled') || $(this).parent().hasClass('active')) {
		 return;
	 }
	 var searchString = '';
	 var page = '';
	 var url_final = '';
	 var shop_url ='';
	 var urlState = '';

	 shop_url = '';
	 page = $(this).attr('pageid');
	 searchString = getStringFilter();	
	 url_final = '/'+searchString+'&page='+page; //+'&view=grid_pagination&page='+page;
	 urlState = shop_url + '/' + searchString + '&page=' + page;

	 window.history.pushState(null,null,urlState);

	 //loadResultBy(url_final,$("#grid_pagination"));
	 loadResultBy(url_final,"#shop");
	 scrollToShop(-50);
	 //http://stackoverflow.com/questions/7717527/jquery-smooth-scrolling-when-clicking-an-anchor-link
	}
	 
	 });

	 function scrollToShop(margin) {
		 var locate = parseInt($('#content').offset().top) + margin;
		 $('html, body').animate({
			 scrollTop: locate
		 },1000);
		 return false;
	 }