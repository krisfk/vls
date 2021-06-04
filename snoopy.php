<?php
include('header.php');
?>
<div class="middle-container">


    <div class="black-line"></div>



    <div class="container mt-lg-4 mt-md-0 mt-sm-0 mt-0 market-banner-video-container">


        <div class="row market-banner-video-row gx-lg-4 gx-md-4 gx-sm-1 gx-1 ">

            <div class="col-lg-8 col-md-12 col-sm-12 col-12 ps-0 market-banner-div">
                <a href="./snoopy.php" class="d-table">
                    <img class="w-100" src="./images/banner.jpg" alt="">
                </a>
            </div>
            <div
                class="col-lg-4 col-md-10 col-sm-12 col-12 mt-lg-0 mt-md-3 mt-sm-3 mt-3  pe-0 position-relative market-video-div">

                <div class="position-relative">
                    <img class="w-100" src="./images/dummy-video.jpg" alt="">
                    <video playsinline id="vls-video-3" name="videojs" class="video-js vls-video-3" controls
                        preload="auto" width="640" height="264" poster="./images/still-thumbnail.jpg" data-setup="{}">
                        <source src="https://vjs.zencdn.net/v/oceans.mp4" type="video/mp4" />
                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading
                            to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank">supports
                                HTML5 video</a>
                        </p>
                    </video>
                </div>
            </div>
        </div>
    </div>



    <div class="container g-0">


        <div class="row">
            <div class="col-12 gx-5">
                <div class="breadcrumb mt-3 mb-3"><a href="./"><img class="reg-icon" src="./images/reg-icon.png" alt="">
                        <span class="m-0 home-txt"> 好想買嘢
                            VLoveShopping</span></a>
                    <span class="arrow">></span>
                    <span>
                        史努比的奇幻世界</span>
                </div>
            </div>
        </div>

        <div class="row mt-0">
            <div class="col-lg-6 gx-5 col-md-6 col-sm-6 col-6 show-items-div">顯示 30 of 250</div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end">

                <select class="product-list-sort-select form-select w-auto d-inline-block">

                    <option selected>篩選</option>

                    <option value="0">好想買指數</option>
                    <option value="1">最新貨品</option>
                    <option value="2">價錢(低至高)</option>
                    <option value="3">價錢(高至低)</option>
                </select>

                <!-- <ul class="p-0 m-0 text-center product-list-sort-ul ">
                    <li class="d-inline-block">

                        <a href="javascript:void(0)">好想買指數</a>
                    </li>
                    <li class="d-inline-block">
                        <a href="javascript:void(0)">最新貨品</a>

                    </li>
                    <li class="d-inline-block">
                        <a href="javascript:void(0)">價錢(低至高)</a>

                    </li>
                    <li class="d-inline-block">
                        <a href="javascript:void(0)">價錢(高至低)</a>

                    </li>
                </ul> -->

            </div>

        </div>


        <ul class="product-list-ul product-list-ul-col6">
            <?php for($i=0;$i<36;$i++)
            {?>
            <li class="mb-4 product-li">
                <div class="product-div-1">

                    <div class="text-center position-relative product-img-wrapper">


                        <div class="position-absolute w-100 h-100 hover-layer text-start">
                            <ul>
                                <li> <a href="javascript:void(0)" class="hover-layer-btn quick-view"> <img
                                            class="eye-icon" src="./images/eye-icon.png" alt="">快速睇產品</a></li>

                                <li> <a href="./favorite.php" class="hover-layer-btn heart"><img class="heart-icon"
                                            src="./images/heart-icon.png" alt="">加入好想買清單</a></li>
                                <li class="hover-layer-product-detail-btn"><a href="./product-detail.php"></a>
                                </li>
                            </ul>

                        </div>
                        <a href="./product-detail.php">
                            <img class="product-img w-100" src="./images/product-foto-1.jpg" alt="">
                        </a>
                    </div>

                    <a href="./product-detail.php">

                        <div class="product-name">日版 多啦A夢 叮噹造型曲奇餅禮盒（1盒6塊）</div>
                        <div class="product-set mt-1">1盒6塊</div>

                        <div class="recommend-rate  mt-1">
                            好想買指數：

                            <div class="pt-div"><img class="pt" src="./images/green-pt.png" alt=""> <img class="pt"
                                    src="./images/green-pt.png" alt=""> <img class="pt" src="./images/green-pt.png"
                                    alt="">
                                <img class="pt" src="./images/green-pt.png" alt="">
                                <img class="pt" src="./images/grey-pt.png" alt="">
                            </div>

                        </div>
                        <div class="limited-quantity  mt-1">日本限量版1000件</div>
                        <div class="old-price price  mt-1">$79.99</div>
                        <div class="final-price"><span class="s">$</span><span class="b">9999</span><span
                                class="s">.99</span></div>
                    </a>
                    <a href="javascript:void(0)" class="cart-btn add mt-2"> <img src="./images/cart-icon2.png" alt="">
                        加入購物車</a>
                </div>

            </li>
            <?php }?>
        </ul>

        <div class="row mt-0 mb-1 g-0">
            <div class="col-lg-3 col-md-4 col-sm-12 col-12   show-items-div bottom-show-items-div">顯示 30 of 250</div>
            <div class="col-lg-6 col-md-8 col-sm-12 col-12">

                <div class="pagination">
                    <ul>
                        <li><a href="javascript:void(0)"> 上一頁</a></li>
                        <li><a href="javascript:void(0)"> 30</a></li>
                        <li><a href="javascript:void(0)"> 31</a></li>
                        <li><a href="javascript:void(0)"> 32</a></li>
                        <li><a href="javascript:void(0)"> 33</a></li>
                        <li><a href="javascript:void(0)"> 34</a></li>
                        <li><a href="javascript:void(0)"> 下一頁</a></li>


                    </ul>

                </div>

            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 col-12"></div>

        </div>


        <div class="black-line"></div>



        <div class="container g-3">



            <?php
for($i=0;$i<1;$i++)
{
?>

            <div class="want-to-buy-div mt-5 orange-border">
                <div class="want-to-buy-title ">

                    <div class="want-to-buy-title-txt">
                        <span class="fw-bold">好想買</span>的日本零食
                    </div>
                    <div class="cate-foto-2-div">
                        <img class="cate-foto-2" src="./images/cate-foto-2.jpg" alt="">
                    </div>
                </div>

            </div>
            <div class="want-to-buy-row orange-border">

                <ul>
                    <li>
                        <img class="want-to-buy-product-img" src="./images/cate-foto-1.jpg" alt="">
                    </li>

                    <li class="right-div">
                        <div class="row">


                            <?php
                        for($j=0;$j<6;$j++)
                        {
                            ?>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-4 product-div-2">
                                <div class="text-center position-relative product-img-wrapper">


                                    <div class="position-absolute w-100 h-100 hover-layer text-start">
                                        <ul>
                                            <li> <a href="javascript:void(0)" class="hover-layer-btn quick-view"> <img
                                                        class="eye-icon" src="./images/eye-icon.png" alt="">快速睇產品</a>
                                            </li>

                                            <li> <a href="./favorite.php" class="heart hover-layer-btn"><img
                                                        class="heart-icon" src="./images/heart-icon.png"
                                                        alt="">加入好想買清單</a></li>
                                            <li class="hover-layer-product-detail-btn"><a
                                                    href="./product-detail.php"></a>
                                            </li>
                                        </ul>

                                    </div>
                                    <a href="./product-detail.php">

                                        <img src="./images/product-foto-2.jpg" alt="">
                                    </a>
                                </div>
                                <a href="./product-detail.php">
                                    <div class="product-name-2">日本日本多啦A夢叮日本日本多啦A夢叮</div>
                                    <div class="final-price"><span class="s">$</span> <span class="b">60.00</span></div>
                                </a>
                                <a href="javascript:void(0)" class="cart-btn-2 add mt-1">
                                    <img src="./images/cart-icon2.png" alt="">
                                    加入購物車</a>
                            </div>
                            <?php

                        }
                        
                ?>
                        </div>
                    </li>

                </ul>
            </div>






            <div class="want-to-buy-div mt-5 green-border">
                <div class="want-to-buy-title ">

                    <div class="want-to-buy-title-txt">
                        <span class="fw-bold">好想買</span>的日本零食
                    </div>
                    <div class="cate-foto-2-div">
                        <a href="./product-detail.php">
                            <img class="cate-foto-2" src="./images/cate-foto-2.jpg" alt="">
                        </a>
                    </div>
                </div>

            </div>
            <div class="want-to-buy-row green-border">

                <ul>
                    <li>
                        <img class="want-to-buy-product-img" src="./images/cate-foto-1.jpg" alt="">
                    </li>

                    <li class="right-div">
                        <div class="row">


                            <?php
                        for($j=0;$j<6;$j++)
                        {
                            ?>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-4 product-div-2">
                                <div class="text-center position-relative product-img-wrapper">


                                    <div class="position-absolute w-100 h-100 hover-layer text-start">
                                        <ul>
                                            <li> <a href="javascript:void(0)" class="hover-layer-btn quick-view"> <img
                                                        class="eye-icon" src="./images/eye-icon.png" alt="">快速睇產品</a>
                                            </li>

                                            <li> <a href="./favorite.php" class="heart hover-layer-btn"><img
                                                        class="heart-icon" src="./images/heart-icon.png"
                                                        alt="">加入好想買清單</a></li>
                                            <li class="hover-layer-product-detail-btn"><a
                                                    href="./product-detail.php"></a>
                                            </li>
                                        </ul>

                                    </div>
                                    <a href="./product-detail.php">
                                        <img src="./images/product-foto-2.jpg" alt="">
                                    </a>
                                </div>
                                <a href="./product-detail.php">
                                    <div class="product-name-2">日本日本多啦A夢叮日本日本多啦A夢叮</div>
                                    <div class="final-price"><span class="s">$</span> <span class="b">60.00</span></div>
                                </a>
                                <a href="javascript:void(0)" class="cart-btn-2 add mt-1">
                                    <img src="./images/cart-icon2.png" alt="">
                                    加入購物車</a>
                            </div>
                            <?php

                        }
                        
                ?>
                        </div>
                    </li>

                </ul>
            </div>








            <div class="want-to-buy-div mt-5 blue-border">
                <div class="want-to-buy-title ">

                    <div class="want-to-buy-title-txt">
                        <span class="fw-bold">好想買</span>的日本零食
                    </div>
                    <div class="cate-foto-2-div">
                        <img class="cate-foto-2" src="./images/cate-foto-2.jpg" alt="">
                    </div>
                </div>

            </div>
            <div class="want-to-buy-row blue-border">

                <ul>
                    <li>
                        <img class="want-to-buy-product-img" src="./images/cate-foto-1.jpg" alt="">
                    </li>

                    <li class="right-div">
                        <div class="row">

                            <?php
                        for($j=0;$j<6;$j++)
                        {
                            ?>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-4 product-div-2">
                                <div class="text-center position-relative product-img-wrapper">


                                    <div class="position-absolute w-100 h-100 hover-layer text-start">
                                        <ul>
                                            <li> <a href="javascript:void(0)" class="hover-layer-btn quick-view"> <img
                                                        class="eye-icon" src="./images/eye-icon.png" alt="">快速睇產品</a>
                                            </li>

                                            <li> <a href="./favorite.php" class="heart hover-layer-btn"><img
                                                        class="heart-icon" src="./images/heart-icon.png"
                                                        alt="">加入好想買清單</a></li>
                                            <li class="hover-layer-product-detail-btn"><a
                                                    href="./product-detail.php"></a>
                                            </li>
                                        </ul>

                                    </div>
                                    <a href="./product-detail.php">

                                        <img src="./images/product-foto-2.jpg" alt="">
                                    </a>
                                </div>
                                <a href="./product-detail.php">
                                    <div class="product-name-2">日本日本多啦A夢叮日本日本多啦A夢叮</div>
                                    <div class="final-price"><span class="s">$</span> <span class="b">60.00</span></div>
                                </a>
                                <a href="javascript:void(0)" class="cart-btn-2 add mt-1">
                                    <img src="./images/cart-icon2.png" alt="">
                                    加入購物車</a>
                            </div>
                            <?php

                        }
                        
                ?>
                        </div>
                    </li>

                </ul>
            </div>

            <?php   
}
?>

        </div>

    </div>













</div>
</div>
<script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
<style type="text/css">
.black-line {
    display: block;

}

.breadcrumb {
    display: block;
}

@media (max-width: 991px) {
    .categories-div-wrapper {
        display: none
    }

    .black-line {
        display: none
    }
}
</style>
<script type="text/javascript">
$(function() {

    var myPlayer = videojs('vls-video-3');
    myPlayer.controlBar.pictureInPictureToggle.dispose();


})
// init_play_btn();
// $(window).resize(function() {

//     init_play_btn();

// })

// function init_play_btn() {
//     var t = ($('.vls-video-3').height() - $('.vjs-big-play-button').height()) / 2;
//     var l = ($('.vls-video-3').width() - $('.vjs-big-play-button').width()) / 2;
//     $('.vls-video-3 .vjs-big-play-button').css({
//         'top': t + 'px'
//     });
//     $('.vls-video-3 .vjs-big-play-button').css({
//         'left': l + 'px'
//     });

// }
</script>
<?php
include('footer.php');
?>