@extends('guest.layouts.master')

@section('body.js')
    <script src="{{asset('js/guest/product_detail.js')}}" type="text/javascript"></script>
@endsection

@section('body.content')
    <?php $amount = 0; ?>
    <div class="container clearfix">

        <!-- Content ============================================= -->
        <div class="product-page">
            <div class="single-product">
                <div class="product">
                    <div id="ega-product-app" class="row">
                        <div class="col-md-5 col-xs-12">
                            <div class="product-image product-main-image">
                                <div class="slider-wrap">
                                    <div class="pd_slide nopadding">
                                        <div class="slide"><img
                                                    src="https://product.hstatic.net/1000074340/product/vsbw75yj_3611522df27f42e2b949c91e62811217.jpg"
                                                    alt="Túi tote da bò quai hợp kim Heti đỏ"></div>
                                    </div>
                                    <div class="pd_slide_thumb owl-carousel owl-theme ega-product-img-carousel owl-loaded owl-drag">
                                        <div class="owl-stage-outer">
                                            <div class="owl-stage"
                                                 style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 367px;">
                                                <div class="owl-item active" style="width: 91.6px;">
                                                    <div class="slide">
                                                        <div class="img"><img class="ega-product-img"
                                                                              alt="Túi tote da bò quai hợp kim Heti đỏ"
                                                                              index="0"
                                                                              src="https://product.hstatic.net/1000074340/product/vsbw75yj_3611522df27f42e2b949c91e62811217.jpg">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item active" style="width: 91.6px;">
                                                    <div class="slide">
                                                        <div class="img"><img class="ega-product-img"
                                                                              alt="Túi tote da bò quai hợp kim Heti đỏ"
                                                                              index="1"
                                                                              src="https://product.hstatic.net/1000074340/product/7znkm6qj_1b0aa1acc3bb481e95c2a01897433448.jpg">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item active" style="width: 91.6px;">
                                                    <div class="slide">
                                                        <div class="img"><img class="ega-product-img"
                                                                              alt="Túi tote da bò quai hợp kim Heti đỏ"
                                                                              index="2"
                                                                              src="https://product.hstatic.net/1000074340/product/dctztg96_8bb9eba116ea4e3b95f2fd066fac709f.jpg">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item active" style="width: 91.6px;">
                                                    <div class="slide">
                                                        <div class="img"><img class="ega-product-img"
                                                                              alt="Túi tote da bò quai hợp kim Heti đỏ"
                                                                              index="3"
                                                                              src="https://product.hstatic.net/1000074340/product/58tqikdv_1ac93e3d89324b27b26edd8b682c0da5.jpg">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-nav disabled">
                                            <div class="owl-prev disabled"><span class="fa fa-angle-left"></span></div>
                                            <div class="owl-next disabled"><span class="fa fa-angle-right"></span></div>
                                        </div>
                                        <div class="owl-dots disabled"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-6 pd_desc_wrapper">
                            <div class="product-desc">
                                <div class="page_title"><h1 itemprop="name">
                                        Túi tote da bò quai hợp kim Heti đỏ
                                    </h1> <span class="sku">Mã SP: 694565656</span></div>
                                <div class="pd_sale_wrapper clearfix">
                                    <div class="product-price">
                                        <ins>560,000₫</ins> <!----> <!----></div>
                                    <div class="clear"></div>
                                    <div class="line"></div>
                                    <form method="post" id="ProductDetailsForm" enctype="multipart/form-data"
                                          action="/cart/add"><input type="hidden" name="variantId" value="1015082184">
                                        <div class="row">
                                            <div class="col-xs-12 options_picker" style="position: relative;">
                                                <!----></div>
                                        </div>
                                        <div data-toggle="modal" data-target="#tinhSize" class="tinhsize"><a>Hướng dẫn
                                                chọn size</a></div>
                                        <div id="tinhSize" role="dialog" class="modal fade ">
                                            <div role="document" class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" data-dismiss="modal" class="close">×
                                                        </button>
                                                        <h4 class="modal-title">Hướng dẫn cách tính size</h4></div>
                                                    <div class="modal-body clearfix"><p>Hướng dẫn tính size phù hợp với
                                                            bạn</p></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="quantity_title"><label class="nomargin">Số lượng: </label></div>
                                        <div class="quantity clearfix product-quantity"><input type="button" value="-"
                                                                                               class="minus"> <input
                                                    type="text" id="product_quantity" min="1" name="quantity" value="1"
                                                    title="Qty" size="4" class="qty"> <input type="button" value="+"
                                                                                             class="plus"></div>
                                        <div class="clear"></div>
                                        <button type="submit" data-role="addtocart"
                                                class="pd_page_popup button col-xs-12 buynow buynow_detail">
                                            MUA NGAY<span
                                                    style="font-size: 12px;">Giao tận nơi hoặc nhận ở cửa hàng</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6 pd_policies_wrapper">
                            {{--Product Policies--}}
                            @include('guest.products.partials.__product_policies')
                        </div>
                    </div>
                </div>
                <!-- pd tech -->
                <div class="row">
                    <div class="col-xs-12 col_md_80">


                        <div class="pd_description tab_product">
                            <h3 class="hidden-lg hidden-md tab_mb">
                                <a>CHI TIẾT SẢN PHẨM</a> <i class="fa-caret-down fa"></i>
                            </h3>
                            <ul class="nav nav-tabs clearfix" role="tablist">

                                <li class="active" role="presentation">
                                    <a href="#tab-1" aria-controls="tab-1" role="tab" data-toggle="tab">CHI TIẾT SẢN
                                        PHẨM</a>
                                </li>


                                <li class="" role="tablist">
                                    <a href="#modalBaoQuan" id="baoQuan" data-toggle="modal"
                                       data-target="#modalBaoQuan">HƯỚNG DẪN BẢO QUẢN</a>
                                </li>


                                <li class="" role="tablist">
                                    <a href="#tab-3" aria-controls="tab-3" role="tab" data-toggle="tab">BÌNH LUẬN / ĐÁNH
                                        GIÁ</a>
                                </li>


                                <li class="" role="tablist">
                                    <a href="#tab-4" aria-controls="tab-4" role="tab" data-toggle="tab">CHÍNH SÁCH ĐỔI
                                        TRẢ</a>
                                </li>

                            </ul>

                            <div class="tab-content">

                                <div role="tabpanel" class="tab-pane active" id="tab-1">
                                    <div id="ega-uti-editable-content" data-platform="haravan" data-id="1006391120">
                                        <p>Clutch cầm tay dáng phong thư Mllecoco phong cách thời trang Âu Mỹ hiện đại,
                                            thời thượng; họa tiết vân da voi cùng sự phối màu đặc biệt tạo sự nổi bật;
                                            thể hiện đẳng cấp, sự tự tin của quý cô dù xuất hiện ở bất cứ nơi đâu<br>-
                                            Clutch cầm tay dáng phong thư Mllecoco phong cách thời trang Âu Mỹ hiện đại,
                                            thời thượng; thể hiện đẳng cấp, sự tự tin của quý cô dù xuất hiện ở bất cứ
                                            nơi đâu.<br>- Chất liệu da bò vân da cá sấu kết hợp da voi độc đáo, cao cấp,
                                            mềm mại, sáng bóng, bền màu, chống xước, chống nước, dễ dàng vệ sinh.<br>-
                                            Thiết kế dây đeo tùy chỉnh độ dài, khuy nam châm tiện dụng.<br>- Phân bố các
                                            ngăn khoa học, thoải mái đựng vật dụng cá nhân như điện thoại, tiền, thẻ...
                                        </p>
                                    </div>
                                </div>


                                <div role="tabpanel" class="tab-pane" id="tab-3">
                                    <div id="fb-root"></div>
                                    <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop"
                                         data-href="https://the-bag.myharavan.com/products/tui-tote-da-bo-quai-hop-kim-heti-do"
                                         data-numposts="5" width="100%" data-colorscheme="light"
                                         fb-xfbml-state="rendered"
                                         fb-iframe-plugin-query="app_id=&amp;color_scheme=light&amp;container_width=0&amp;height=100&amp;href=https%3A%2F%2Fthe-bag.myharavan.com%2Fproducts%2Ftui-tote-da-bo-quai-hop-kim-heti-do&amp;locale=en_US&amp;numposts=5&amp;sdk=joey&amp;version=v2.6"
                                         style="width: 100%;"><span
                                                style="vertical-align: bottom; width: 100%; height: 719px;"><iframe
                                                    name="f39c6e18f7820b8" width="1000px" height="100px" frameborder="0"
                                                    allowtransparency="true" allowfullscreen="true" scrolling="no"
                                                    allow="encrypted-media" title="fb:comments Facebook Social Plugin"
                                                    src="https://www.facebook.com/v2.6/plugins/comments.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2Fj-GHT1gpo6-.js%3Fversion%3D43%23cb%3Df1d01e79cd57878%26domain%3Dthe-bag.myharavan.com%26origin%3Dhttps%253A%252F%252Fthe-bag.myharavan.com%252Ffe9a6e73a53db8%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=0&amp;height=100&amp;href=https%3A%2F%2Fthe-bag.myharavan.com%2Fproducts%2Ftui-tote-da-bo-quai-hop-kim-heti-do&amp;locale=en_US&amp;numposts=5&amp;sdk=joey&amp;version=v2.6"
                                                    style="border: none; visibility: visible; width: 100%; height: 719px;"
                                                    class=""></iframe></span></div>
                                    <!-- script comment fb -->
                                </div>


                                <div role="tabpanel" class="tab-pane" id="tab-4">

                                    <p>EGA TheBags sẽ thực hiện việc đổi/trả hàng và hoàn tiền cho khách hàng trong
                                        những trường hợp sau.</p>
                                    <p><strong>Sản phẩm EGA TheBags giao không đúng đơn đặt hàng</strong><br> Bạn nghĩ
                                        rằng sản phẩm giao cho bạn không đúng với đơn đặt hàng? Hãy liên hệ với chúng
                                        tôi càng sớm càng tốt, hệ thống của chúng tôi sẽ kiểm tra nếu hàng của bạn bị
                                        gửi nhầm. Trong trường hợp đó, chúng tôi sẽ thay thế đúng mặt hàng bạn yêu cầu
                                        (khi có hàng).</p>
                                    <p><strong>Sản phẩm mua rồi nhưng không ưng ý</strong><br> Người mua có thể trả hàng
                                        khi không vừa ý trong vòng 7 ngày kể từ ngày nhận hàng, EGA TheBags.vn sẽ đổi
                                        sản phẩm cho khách. Sản phẩm muốn đổi hoặc trả yêu cầu phải là sản phẩm không có
                                        dấu hiệu đã qua sử dụng và còn nguyên tem, mác, nguyên đai kiện ban đầu</p>
                                    <p><strong>Sản phẩm mua bị lỗi</strong><br> Quý khách vui lòng kiểm tra sản phẩm
                                        trước khi thanh toán. Trong trường hợp sản phẩm bị hư hại trong quá trình vận
                                        chuyển, quý khách vui lòng từ chối và gửi lại sản phẩm cho EGA TheBags.vn. Đồng
                                        thời thông báo cho Trung tâm hỗ trợ khách hàng 0123456789, EGA TheBags.vn sẽ gửi
                                        cho quý khách mặt hàng thay thế.</p>
                                    <p><strong>Điều kiện đổi trả hàng</strong></p>
                                    <p>Điều kiện về thời gian đổi trả: trong vòng 7 ngày kể từ khi nhận được hàng.</p>
                                    <p>Điều kiện về sản phẩm:</p>
                                    <p>- Hàng hóa còn đầy đủ các bộ phận, không có dấu hiệu sử dụng quá nhiều hoặc hỏng
                                        hóc.</p>
                                    <p>- Có đầy đủ các giấy tờ kèm theo (hóa đơn mua hàng, catalogue...) và các linh
                                        kiện, tặng phẩm kèm theo (nếu có).</p>
                                    <p>- Khách hàng chịu chi phí vận chuyển cho việc đổi, trả hàng.</p>
                                    <p>- Trường hợp không đủ các điều kiện trên thì quyền quyết định đổi, trả hàng thuộc
                                        về EGA TheBags.vn</p>
                                    <p>&nbsp;</p>
                                </div>

                            </div>
                        </div>

                        <!-- bao quan -->
                        <div id="modalBaoQuan" class="modal fade" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">×</button>

                                        <h4 class="modal-title">Hướng dẫn bảo quản</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Hướng dẫn bảo quản sản phẩm</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-xs-12 col_md_20">

                        <div id="detail-two" class="hidden-xs hidden-sm" style="z-index: 1; top: 110px;"><h1>Túi tote da
                                bò quai hợp kim Heti đỏ</h1> <h4>Mã SP: 694565656</h4>
                            <div class="clearfix" style="background: rgb(238, 238, 238); padding: 10px;">
                                <div class="price"><label class="variant-price">
                                        Giá:
                                        <ins>560,000₫</ins>
                                    </label> <!---->
                                    <div class="product_onsale_label"></div>
                                </div>
                                <div class="product-btn-buy-2">
                                    <button href="" title="Đặt mua"
                                            class="button buynow_scroll button_full noleftmargin norightmargin">MUA NGAY
                                    </button>
                                </div>
                                <div class="deliver-top-no deliver-phone"
                                     style="margin-top: 5px; padding-left: 45px; border-bottom: none !important;"><img
                                            src="//theme.hstatic.net/1000074340/1000280242/14/product_scroll_img.png?v=83"
                                            style="float: left; margin-left: -45px;"> <strong
                                            style="line-height: 20px; float: left; display: block;">Hỗ trợ mua
                                        nhanh</strong> <a href="tel:1800 xxxx"
                                                          style="line-height: 20px; float: left; display: block; font-size: 18px; font-weight: 600; color: rgb(255, 85, 31);">
                                        1800 xxxx
                                    </a></div>
                            </div>
                        </div>

                    </div>
                    <!-- end pd tech -->
                    <div class="clear"></div>

                    <div class="col-xs-12">
                        {{--Product Viewed--}}
                        @include('guest.products.partials.__product_viewed')
                    </div>

                </div>
                <!-- end related products -->
            </div>
        </div>
    </div>
@endsection