<script>
    requirejs.config({
        waitSeconds : 30,
        paths: {
            jquery: "{{asset('js/guest/plugins/jquery.2.1.4.min')}}",
            option_selectors: "{{asset('js/guest/plugins/option_selection')}}",
            api_jquery: "{{asset('js/guest/plugins/api.jquery')}}",
            commonJs: "{{asset('js/guest/plugins/haravan_common')}}",
            customerArea: "{{asset('js/guest/plugins/customer_area')}}",
            customerjs: "{{asset('js/guest/plugins/customer_area')}}",
            bootstrapJs: "{{asset('js/guest/plugins/bootstrap.min')}}",
            //fancybox: "//theme.hstatic.net/1000074340/1000280242/14/jquery.fancybox.pack.js?v=83",
            jquery_easing: "{{asset('js/guest/plugins/jquery_easing')}}",
            lazyload: "{{asset('js/guest/plugins/lazyload')}}",
            jqueryUI: "{{asset('js/guest/plugins/jqueryui')}}",
            superfish: "{{asset('js/guest/plugins/superfish')}}",
            slick: "{{asset('js/guest/plugins/slick.min')}}",
            owl_carousel: "{{asset('js/guest/plugins/owl.carousel.min')}}",
            jgrowl: "{{asset('js/guest/plugins/jgrowl')}}",
            handlebar: "{{asset('js/guest/plugins/handlebar')}}",
            functions: "{{asset('js/guest/plugins/functions')}}",
            script: "{{asset('js/guest/plugins/script')}}",
            filterjs: "{{asset('js/guest/plugins/filterjs')}}",
            Vue:"{{asset('js/guest/plugins/vue')}}",
            rx: "{{asset('js/guest/plugins/rx.all.min')}}",
            underscore:"{{asset('js/guest/plugins/underscore-min')}}",
            localProduct: "{{asset('js/guest/plugins/localProduct')}}"
        },
        shim: {
            jquery: {
                exports: '$'
            },
            option_selectors: {
                deps: ['jquery'],
                exports: 'option_selectors'
            },
            api_jquery: {
                deps: ['jquery'],
                exports: 'api_jquery'
            },
            bootstrapJs: {
                deps: ['jquery'],
                exports: 'bootstrapJs'
            },
            /*fancybox: {
                deps: ['jquery'],
                exports: 'fancybox'
            },*/
            jquery_easing: {
                deps: ['jquery','jqueryUI'],
                exports: 'jquery_easing'
            },
            lazyload: {
                deps: ['jquery'],
                exports: 'lazyload'
            },
            jqueryUI: {
                deps: ['jquery'],
                exports: 'jqueryUI'
            },
            superfish: {
                deps: ['jquery'],
                exports: 'superfish'
            },
            slick: {
                deps: ['jquery'],
                exports: 'slick'
            },
            owl_carousel: {
                deps: ['jquery'],
                exports: 'owl_carousel'
            },
            jgrowl: {
                deps: ['jquery'],
                exports: 'jgrowl'
            },
            functions: {
                deps: ['jquery','jquery_easing', 'lazyload', 'bootstrapJs', 'superfish', 'script'],
                exports: 'functions'
            },
            script: {
                deps: ['jquery','api_jquery', 'jgrowl', 'handlebar'],
                exports: 'script'
            },
            filterjs: {
                deps: ['jquery'],
                exports: 'filterjs'
            },
            localProduct:{
                deps: ['jquery','underscore','api_jquery'],
                exports: 'localProduct'
            },
            rx:{
                deps: [],
                exports: 'rx'
            }
        }
    })

</script>
<script type='text/javascript'>
    //<![CDATA[
    if ((typeof Haravan) === 'undefined') {
        Haravan = {};
    }
    Haravan.culture = 'vi-VN';
    Haravan.shop = 'the-bag.myharavan.com';
    Haravan.theme = {"name":"ega-the bag_hrv_v1.0.3_20171016","id":1000280242,"role":"main"};
    Haravan.domain = 'the-bag.myharavan.com';
    //]]>
</script>
<script type='text/javascript'>
    window.HaravanAnalytics = window.HaravanAnalytics || {};
    window.HaravanAnalytics.meta = window.HaravanAnalytics.meta || {};
    window.HaravanAnalytics.meta.currency = 'VND';
    var meta = {"page":{"pageType":"home"}};
    for (var attr in meta) {
        window.HaravanAnalytics.meta[attr] = meta[attr];
    }
</script>