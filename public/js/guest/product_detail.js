function convertToUnSign(str) {
    try {
        str = str.toLowerCase();
        str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, 'a');
        str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, 'e');
        str = str.replace(/ì|í|ị|ỉ|ĩ/g, 'i');
        str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, 'o');
        str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, 'u');
        str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, 'y');
        str = str.replace(/đ/g, 'd');
        str = str.replace(/\s/g, '');
        return str;
    } catch (e) {
        return str;
    }
}

require(['Vue', 'api_jquery', 'owl_carousel'], function (Vue) {
    var product = [{
        "available": true,
        "compare_at_price_max": 0.0,
        "compare_at_price_min": 0.0,
        "compare_at_price_varies": false,
        "compare_at_price": 0.0,
        "content": null,
        "description": "<p>Clutch cầm tay dáng phong thư Mllecoco phong cách thời trang Âu Mỹ hiện đại, thời thượng; họa tiết vân da voi cùng sự phối màu đặc biệt tạo sự nổi bật; thể hiện đẳng cấp, sự tự tin của quý cô dù xuất hiện ở bất cứ nơi đâu<br>- Clutch cầm tay dáng phong thư Mllecoco phong cách thời trang Âu Mỹ hiện đại, thời thượng; thể hiện đẳng cấp, sự tự tin của quý cô dù xuất hiện ở bất cứ nơi đâu.<br>- Chất liệu da bò vân da cá sấu kết hợp da voi độc đáo, cao cấp, mềm mại, sáng bóng, bền màu, chống xước, chống nước, dễ dàng vệ sinh.<br>- Thiết kế dây đeo tùy chỉnh độ dài, khuy nam châm tiện dụng.<br>- Phân bố các ngăn khoa học, thoải mái đựng vật dụng cá nhân như điện thoại, tiền, thẻ...</p>",
        "featured_image": "https://product.hstatic.net/1000074340/product/vsbw75yj_3611522df27f42e2b949c91e62811217.jpg",
        "handle": "tui-tote-da-bo-quai-hop-kim-heti-do",
        "id": 1006391120,
        "images": ["https://product.hstatic.net/1000074340/product/vsbw75yj_3611522df27f42e2b949c91e62811217.jpg", "https://product.hstatic.net/1000074340/product/7znkm6qj_1b0aa1acc3bb481e95c2a01897433448.jpg", "https://product.hstatic.net/1000074340/product/dctztg96_8bb9eba116ea4e3b95f2fd066fac709f.jpg", "https://product.hstatic.net/1000074340/product/58tqikdv_1ac93e3d89324b27b26edd8b682c0da5.jpg"],
        "options": ["Tiêu đề"],
        "price": 56000000.0,
        "price_max": 56000000.0,
        "price_min": 56000000.0,
        "price_varies": false,
        "tags": [],
        "template_suffix": null,
        "title": "Túi tote da bò quai hợp kim Heti đỏ",
        "type": "Túi nữ xách tay",
        "url": "/products/tui-tote-da-bo-quai-hop-kim-heti-do",
        "pagetitle": "Túi tote da bò quai hợp kim Heti đỏ",
        "metadescription": "Clutch cầm tay dáng phong thư Mllecoco phong cách thời trang Âu Mỹ hiện đại, thời thượng; họa tiết vân da voi cùng sự phối màu đặc biệt tạo sự nổi bật; thể hiện",
        "variants": [{
            "id": 1015082184,
            "barcode": null,
            "available": true,
            "price": 56000000.0,
            "sku": "694565656",
            "option1": "Default Title",
            "option2": "",
            "option3": "",
            "options": ["Default Title"],
            "inventory_quantity": 1000,
            "old_inventory_quantity": 1000,
            "title": "Default Title",
            "weight": 0.0,
            "compare_at_price": 0.0,
            "inventory_management": "haravan",
            "inventory_policy": "deny",
            "selected": false,
            "url": null,
            "featured_image": null
        }],
        "vendor": "Heti",
        "published_at": "2017-08-19T07:29:12.084Z",
        "created_at": "2017-08-19T07:34:58.259Z",
        "not_allow_promotion": false
    }][0];
    var selectedVariant = {
        id: product.variants ? (product.variants.length > 0 ? product.variants[0].id : product.id) : product.id,
        images: product.images,
        price: product.price,
        compare_at_price: product.variants[0].compare_at_price || '',
        sku: product.variants[0].sku || false,
        available: product.variants ? (product.variants.length > 0 ? product.variants[0].available : product.available) : product.available,
        mainImg: {
            alt: product.title,
            src: product.featured_image
        }
    };

    //init img selected variants
    function initImages() {
        if (product.variants.length > 0) {
            var _variantAtFirst = product.variants[0];
            var newImgs = [];
            for (var i = 0; i < product.images.length; i++) {

                var _img = product.images[i];
                _img = Haravan.resizeImage(_img, 'large');
                if (_variantAtFirst.options.length > 0) {
                    if (_img.toString().toLowerCase().indexOf(convertToUnSign(_variantAtFirst.options[0])) > -1) {
                        newImgs.push(_img);
                    }
                }

            }
            if (newImgs.length > 0) {
                selectedVariant.images = newImgs;
                //change main img
                selectedVariant.mainImg.src = newImgs[0];
                var newUrl = newImgs[0];
            }
        }

    }

    initImages();

    function initOptions() {
        var options = []; // {name: '',values:[], selectedValue: ''}
        var productOptions = product.options;
        var productVariants = product.variants;
        if (productOptions && productVariants) {
            for (var i = 0; i < productOptions.length; i++) {
                var option = {name: productOptions[i], values: [], selectedValue: ''};
                for (var j = 0; j < productVariants.length; j++) {
                    var variantAtJ = productVariants[j];
                    if (variantAtJ.options && variantAtJ.options.length > i) {
                        if (option.values.indexOf(variantAtJ.options[i].toString().toLowerCase()) < 0) {
                            option.values.push(variantAtJ.options[i].toString().toLowerCase());
                        }
                    }
                }
                if (option.values.length > 0) {
                    option.selectedValue = option.values[0];
                }
                options.push(option);
            }
        }
        //console.log(JSON.stringify(options));
        return options;
    }

    var options = initOptions();

    function _initColorSchema() {
        var _colorSchemas = {};
        $('#color-schema > li').each(function () {
            _colorSchemas[$(this).data('title')] = $(this).data('hex');
        });
        return _colorSchemas;
    }

    var colorSchema = _initColorSchema();
    var app = new Vue({
        el: '#ega-product-app',
        delimiters: ["[[", "]]"],
        data: {
            product: product,
            selectedVariant: selectedVariant,
            qty: 1,
            options: options,
            colorSchema: colorSchema,
            imageCurrentIndex: 0,
            thumbMaxHeight: '480px'
        },
        methods: {
            changeMainImg: function (event) {
                if ($(event.target).attr('src')) {
                    $('.pd_slide_thumb .slide').removeClass('slick-current');
                    this.selectedVariant.mainImg.src = $(event.target).data('image');
                    var newUrl = $(event.target).data('image');
                    this.imageCurrentIndex = parseInt($(event.target).attr('index'));
                    $(event.target).closest('.slide').addClass('slick-current');
                }
            },
            changeIndexImgSlider: function (asc) {
                if (asc) {
                    this.imageCurrentIndex++;
                } else {
                    this.imageCurrentIndex--;
                }
                if (this.imageCurrentIndex < 0) {
                    this.imageCurrentIndex = 0;
                }
                if (this.imageCurrentIndex > this.selectedVariant.images.length - 1) {
                    this.imageCurrentIndex = this.selectedVariant.images.length - 1;
                }
            },
            changeQty: function (asc) {
                if (asc == true) {
                    this.qty++;
                } else {
                    this.qty--;
                }
                if (this.qty <= 0) {
                    this.qty = 1;
                }
            },
            onQtyChange: function () {
                this.qty = parseInt(this.qty);
                if (isNaN(this.qty)) {
                    this.qty = 1;
                }
                if (this.qty <= 0) {
                    this.qty = 1;
                }
            },
            selectVariant: function (index, value) {
                for (var i = 0; i < this.options.length; i++) {
                    if (i == index) {
                        this.options[i].selectedValue = value;
                        break;
                    }
                }
                var maxScore = 0;
                var selectedVariantIndex = 0;
                for (var i = 0; i < this.product.variants.length; i++) {
                    var _variantAtI = this.product.variants[i];
                    var _score = 0;
                    for (var j = 0; j < this.options.length; j++) {
                        if (_variantAtI.options[j].toString().toLowerCase() == this.options[j].selectedValue.toLowerCase()) {
                            _score++;
                        }
                    }
                    if (_score > maxScore) {
                        maxScore = _score;
                        selectedVariantIndex = i;
                    }
                }
                //variant id
                this.selectedVariant.id = this.product.variants[selectedVariantIndex].id;
                //price
                this.selectedVariant.price = this.product.variants[selectedVariantIndex].price;
                //available
                this.selectedVariant.available = this.product.variants[selectedVariantIndex].available;
                if (this.product.variants[selectedVariantIndex].inventory_quantity > 0 || (this.product.variants[selectedVariantIndex].inventory_quantity <= 0 && this.product.variants[selectedVariantIndex].inventory_policy == 'continue')) {
                    if (this.selectedVariant.available) {
                        this.selectedVariant.available = true;
                    }

                } else {
                    this.selectedVariant.available = false;
                }
                this.selectedVariant.compare_at_price = this.product.variants[selectedVariantIndex].compare_at_price;
                if (maxScore < this.options.length) {
                    this.selectedVariant.available = false;
                }
                //new images
                var newImgs = [];
                var _variantAtFirst = this.product.variants[selectedVariantIndex];
                var variantImg = '';
                for (var i = 0; i < product.images.length; i++) {
                    var _img = product.images[i];

                    variantImg = _variantAtFirst.featured_image.src;

                    if (_variantAtFirst.options.length > 0) {
                        if (_img.toString().toLowerCase().indexOf(convertToUnSign(_variantAtFirst.options[0])) > -1) {
                            newImgs.push(_img);
                        }
                    }
                }
                if (newImgs.length > 0) {
                    this.selectedVariant.images = newImgs;
                    //re init carousel
                    this.initCarousel();
                    //initImages();
                    //change main img
                    this.selectedVariant.mainImg.src = newImgs[0];
                    var newUrl = newImgs[0].src;
                    if (variantImg) {
                        this.selectedVariant.mainImg.src = variantImg;
                        newUrl = variantImg;
                    }
                    this.imageCurrentIndex = 0;
                } else {
                    if (variantImg) {
                        //change main img
                        this.selectedVariant.mainImg.src = variantImg;
                    }
                }
                this.selectedVariant.sku = this.product.variants[selectedVariantIndex].sku;
            },
            initCarousel: function () {
                var $owl = $('.ega-product-img-carousel');
                if ($owl.hasClass('owl-loaded')) {
                    $owl.trigger('destroy.owl.carousel').removeClass('owl-loaded');
                    $owl.find('.owl-stage-outer').children().unwrap();
                }
                $owl.html("");
                for (var i = 0; i < this.selectedVariant.images.length; i++) {
                    var img = this.selectedVariant.images[i];
                    $owl.append("<div class='slide'><div class='img'><img class='ega-product-img' alt='" + product.title + "'  index='" + i + "' src='" + img + "' /></div></div>");
                }

                $owl.owlCarousel({
                    items: 5,
                    slideBy: 1,
                    dots: false,
                    nav: true,
                    navText: ["<span class='fa fa-angle-left'></span>", "<span class='fa fa-angle-right'></span>"]
                });


            },
            resizeImage: function (src, size) {
                return Haravan.resizeImage(src, size);
            }
        },
        computed: {
            price: function () {
                if (this.selectedVariant.price && this.selectedVariant.price > 0) {
                    return Haravan.formatMoney(this.selectedVariant.price, "{{$amount}}₫");
                }
                return "";
            },
            comparePrice: function () {
                if (this.selectedVariant.price && this.selectedVariant.compare_at_price && this.selectedVariant.compare_at_price > this.selectedVariant.price) {
                    return Haravan.formatMoney(this.selectedVariant.compare_at_price, "{{$amount}}₫");
                }
                return "";
            },
            saleOff: function () {
                var price = this.selectedVariant.price;
                var comparePrice = this.selectedVariant.compare_at_price;
                if (price && comparePrice && comparePrice > price) {
                    return ' (' + Math.floor(100 - (price * 100 / comparePrice)) + '%)'
                }
                return "";
            },
            salePrice: function () {
                var price = this.selectedVariant.price;
                var comparePrice = this.selectedVariant.compare_at_price;
                if (price && comparePrice && comparePrice > price) {
                    return Haravan.formatMoney(comparePrice - price, "{{$amount}}₫");
                }
                return "";
            },
            available: function () {
                if (this.selectedVariant.available) {
                    $('.mb_scroll_buynow').html('MUA NGAY');
                    return true;
                }
                $('.mb_scroll_buynow').html('Cháy hàng');
                return false;
            },
            sku: function () {
                return this.selectedVariant.sku;
            },
            __imageSliderText: function () {
                return (this.imageCurrentIndex + 1) + '/' + selectedVariant.images.length;
            }
        },
        mounted: function () {
            var self = this;
            this.initCarousel();
            $(document).on('click', 'img.ega-product-img', function () {
                console.log(JSON.stringify(product))
                self.selectedVariant.mainImg.src = $(this).attr('src');

                var newUrl = $(this).attr('src');
                self.imageCurrentIndex = parseInt($(this).attr('index'));
            });
            if (product.variants.length > 0) {
                var id = product.variants[0].id;
                var variantImg = '';
                for (var i = 0; i < product.images.length; i++) {

                    var _img = product.images[i];
                    if (_img.variant_ids && _img.variant_ids.indexOf(id) > -1) {
                        if (variantImg === '') {
                            variantImg = _img;
                        }
                    }
                }
                if (variantImg) {
                    //change main img
                    this.selectedVariant.mainImg = variantImg;
                }
            }
        }
    });

    var detailTwo = new Vue({
        el: '#detail-two',
        computed: {
            price: function () {
                if (app.selectedVariant.price && app.selectedVariant.price > 0) {
                    return Haravan.formatMoney(app.selectedVariant.price, "{{$amount}}₫");
                }
                return "";
            },
            comparePrice: function () {
                if (app.selectedVariant.price &&
                    app.selectedVariant.compare_at_price &&
                    app.selectedVariant.compare_at_price > app.selectedVariant.price) {
                    return Haravan.formatMoney(app.selectedVariant.compare_at_price, "{{$amount}}₫");
                }
                return "";
            },
            saleOff: function () {
                var price = app.selectedVariant.price;
                var comparePrice = app.selectedVariant.compare_at_price;
                if (price && comparePrice && comparePrice > price) {
                    return ' (' + Math.floor(100 - (price * 100 / comparePrice)) + '%)'
                }
                return "";
            },
            salePrice: function () {
                var price = app.selectedVariant.price;
                var comparePrice = app.selectedVariant.compare_at_price;
                if (price && comparePrice && comparePrice > price) {
                    return Haravan.formatMoney(comparePrice - price, "{{$amount}}₫");
                }
                return "";
            },
            available: function () {
                if (app.selectedVariant.available) {
                    return true;
                }
                return false;
            },
            sku: function () {
                return app.selectedVariant.sku;
            }
        },
    })
})

require(['jquery'], function ($) {
    $(window).scroll(function () {
        var top = $(document).height() - ($(window).scrollTop() + $('#detail-two').outerHeight(true) + $('.product_viewed_products').outerHeight(true) + ($('#footer').outerHeight(true) + $('.subscribe_group').outerHeight(true)));
        if ($(window).scrollTop() > $('.single-product .product').height()) {
            $('#detail-two').addClass('fixed');
        } else {
            $('#detail-two').removeClass('fixed');
        }

        if (($(window).scrollTop() + $('#detail-two').height()) > $('#content').height()) {
            $('#detail-two').css('top', top);
        } else {
            $('#detail-two').css('top', 110);
        }
    })
    $(document).ready(function () {
        if ($(window).width() < 767) {
            var tab = $('.pd_description .nav-tabs');
            $('.pd_description .tab_mb').on('click', function () {
                tab.toggle();
            })
            tab.find('li > a').on('click', function () {
                var title = $(this).text();
                tab.hide();
                $('.pd_description .tab_mb a').text(title)
            })
        }
    })
})

require(['functions'], function () {
    var curProduct = 'tui-tote-da-bo-quai-hop-kim-heti-do';
    EGA.plugin.getViewedProducts(curProduct);
    EGA.plugin.setViewedProducts({
        location_wrapper: '.product_viewed_products',
        template: '#product_viewed_products_template',
        location: '#product_viewed_products_content ul',
        limit: 10,
        img_url: 'thumb'
    });
})