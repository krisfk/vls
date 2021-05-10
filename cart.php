<?php include('header.php')?>
<div class="middle-container">
    <div class="middle-content">
        <div class="black-line"></div>
        <div class="container">
            <div class="breadcrumb mt-3"><a href="./"><img class="reg-icon" src="./images/reg-icon.png" alt="">
                    <span class="m-0 home-txt"> 好想買嘢
                        VLoveShopping</span></a>
                <span class="arrow">></span>
                <span>
                    購物車</span>
            </div>
            <div class="row mt-0">
                <div class="col-6">共有 172 產品</div>
                <div class="col-6 text-end"> <a href="#" class="share-cart-a">分享購物車清單 <img class="share-cart-icon"
                            src="./images/share-cart-icon.png" alt=""></a> </div>
            </div>

            <div class="row cart-product-list mt-3 g-5">


                <div class="col-lg-8 col-md-12 col-sm-12 col-12">

                    <?php for($i=0;$i<3;$i++) {?>
                    <ul class="mb-3">
                        <li><img class="product-foto" src="./images/product-foto-1.jpg" alt=""></li>
                        <li class="product-name-li">
                            日版 多啦A夢 叮噹造型曲奇餅禮盒（1盒6塊) <br> 日版 多啦A夢 叮噹造型曲奇餅禮盒（1盒6塊）

                            <div class="row">
                                <div class="col-6 quantity-ui-mobile-position">

                                </div>
                                <div class="col-6 price-mobile-position text-end">

                                </div>

                            </div>


                        </li>
                        <li class="text-center">
                            <span class="mobile-hide"> 價格</span>
                            <div class="price-desktop-position">
                                <div class="price-div">
                                    <div class="old-price mt-2">$799.9</div>
                                    <div class="final-price">$599.9</div>
                                    <ul class="p-0 m-0 mobile-icon-ul">
                                        <li class="d-inline-block"> <a href="#"> <img src="./images/heart.png"
                                                    alt=""></a></li>
                                        <li class="d-inline-block"> <a href="#"> <img src="./images/bin-btn.png"
                                                    alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="text-center">
                            <span class="mobile-hide"> 數量 </span>
                            <div class="quantity-ui-desktop-position">

                                <div class="quantity-ui-div">
                                    <table class="quantity-ui mt-2">
                                        <tr>
                                            <td class=" quantity-btn quantity-btn-minus">
                                                - </td>
                                            <td> <input type="text" value="1"> </td>
                                            <td class=" quantity-btn quantity-btn-plus">
                                                + </td>
                                        </tr>
                                    </table>
                                    <a href="#" class="reset-cal-btn ">重新計算</a>
                                </div>
                            </div>


                        </li>

                        <li class="text-center subtotal-li">
                            小計
                            <div class="mt-2">
                                $599.9</div>
                        </li>

                        <li class="position-relative more-dot-btn-a-wrapper-li">
                            <div class="more-dot-btn-a-wrapper">
                                <div class="white-bg"></div>

                                <a href="#" class="more-dot-btn-a">
                                </a>
                                <ul>
                                    <li><a href="#"> 移到好想買清單</a></li>
                                    <li><a href="#">刪除</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <?php 
                    }?>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12 ">

                    <div class="order-information-div">


                        <div class="order-information-title">訂單資訊</div>

                        <table class="w-100">
                            <tr>
                                <td>產品總額</td>
                                <td class="text-end">$599.9</td>
                            </tr>
                            <tr>
                                <td>運費</td>
                                <td class="text-end">$50</td>
                            </tr>
                            <tr>
                                <td class="align-top">
                                    <label for="coupon-code">優惠碼</label>
                                </td>
                                <td class="text-end">
                                    <input type="text" id="coupon-code" class="form-control d-inline-block w-75">
                                    <a href="#" class="d-inline-block use-coupon-btn w-auto">使用</a>
                                    <div class="error">優惠碼輸入無效</div>
                                </td>
                            </tr>
                            <tr>
                                <td>已輸入優惠碼折扣</td>
                                <td class="text-end">- $50</td>
                            </tr>
                        </table>

                        <div class="black-line mt-3"></div>
                        <table class="w-100">
                            <tr>
                                <td>合共</td>
                                <td class="text-end">$599.9</td>
                            </tr>
                        </table>

                        <a href="./cart2.php" class="want cart-btn mt-3">結算</a>
                    </div>

                </div>
            </div>


            <div class="mt-5">

                <div class="share-cart-container pb-5">
                    <div class="color-bar">

                    </div>

                    <div class="new-address-title mt-3 mb-3">分享購物清單
                        <a href="javascript:void(0)" class="close-btn"></a>
                    </div>




                    <form action="">
                        <div>分享購物清單並讓其他人可以添加商品至他們的購物車</div>
                        <input type="text" class="form-control text-center mt-1" value="www.vloveshopping.hk/2sTv6">
                    </form>


                    <div class="text-center mt-3">

                        <a href="#" class="social-a">
                            <img src="./images/yellow-fb-icon.png" alt=""></a>
                        <a href="#" class="social-a">
                            <img src="./images/yellow-wts-icon.png" alt=""></a>
                        <a href="#" class="social-a">
                            <img src="./images/yellow-email-icon.png" alt=""></a>

                    </div>

                </div>
            </div>

        </div>



    </div>

</div>
</div>
<style type="text/css">
@media (max-width: 1200px) {
    .categories-div {
        display: none
    }

}

.breadcrumb {
    display: inline-block;
}
</style>
<script type="text/javascript">
function cart_list_update() {

    var window_w = $(window).width();
    if (window_w < 991) {
        for (i = 0; i < $('.quantity-ui-mobile-position').length; i++) {
            $('.quantity-ui-mobile-position').eq(i).append($('.quantity-ui-div').eq(i));
        }


        for (i = 0; i < $('.price-mobile-position').length; i++) {
            $('.price-mobile-position').eq(i).append($('.price-div').eq(i));
        }
    } else {
        for (i = 0; i < $('.quantity-ui-desktop-position').length; i++) {
            $('.quantity-ui-desktop-position').eq(i).append($('.quantity-ui-div').eq(i));
        }


        for (i = 0; i < $('.price-desktop-position').length; i++) {
            $('.price-desktop-position').eq(i).append($('.price-div').eq(i));
        }
    }
}
$(function() {

    cart_list_update();
    $(window).resize(function() {
        cart_list_update()
    })

    $('.more-dot-btn-a').mouseenter(function() {
        $(this).css({
            'border': '1px solid #000'
        })

        $(this).next('ul').fadeIn(0)

    })
    $('.more-dot-btn-a').mouseleave(function() {
        $('.more-dot-btn-a-wrapper ul').fadeOut(0, function() {

        });

        $('.more-dot-btn-a').css({
            'border': 'none'
        })
    })

    $('.more-dot-btn-a-wrapper ul').mouseleave(function() {
        $(this).fadeOut(0);
        $('.more-dot-btn-a').css({
            'border': 'none'
        })
    })

    $('.more-dot-btn-a-wrapper .white-bg').mouseenter(function() {

        $(this).next().next('.more-dot-btn-a-wrapper ul').stop().fadeIn(0);
        // $('.more-dot-btn-a-wrapper ul').stop().fadeIn(0);


        $(this).next('a').css({
            'border': '1px solid #000'
        })


    })

    $('.more-dot-btn-a-wrapper ul').mouseenter(function() {
        $(this).stop().fadeIn(0);
        $(this).prev('.more-dot-btn-a').css({
            'border': '1px solid #000'
        })
    })

})
</script>
<?php include('footer.php')?>