<section id="slider" class="nopadding clearfix">
    <a href='/pages/christmas'>
        <img src="//theme.hstatic.net/1000074340/1000280242/14/slideshow_1.jpg?v=83" alt='The Bag'>
    </a>
    <a href='/collections/all'>
        <img src="//theme.hstatic.net/1000074340/1000280242/14/slideshow_2.jpg?v=83" alt='The Bag'>
    </a>
</section>

<script>
    require(['slick'], function() {
        $('#slider').slick({
            prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
            autoplay:true,
            autoplaySpeed: 5000,
            fade: true,
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        dots: true,
                        arrows: false
                    }
                }
            ]
        })
    });
</script>
