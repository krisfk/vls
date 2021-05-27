<?php
include('header.php');
?>
<div class="middle-container">


    <div class="black-line"></div>





    <div class="container g-0">


        <div class="breadcrumb mt-4 mb-4"><a href="./"><img class="reg-icon" src="./images/reg-icon.png" alt=""> <span
                    class="m-0 home-txt"> 好想買嘢
                    VLoveShopping</span></a>
            <span class="arrow">></span>
            <span>
                史努比的奇幻世界</span>
        </div>

        <div class="row mt-3 g-0">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6 show-items-div">顯示 30 of 250</div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 text-end">

                <select class="product-list-sort-select form-select w-auto d-inline-block">
                    <option selected>好想買指數</option>
                    <option value="1">最新貨品</option>
                    <option value="2">價錢(低至高)</option>
                    <option value="3">價錢(高至低)</option>
                </select>

                <ul class="p-0 m-0 text-center product-list-sort-ul ">
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
                </ul>

            </div>

        </div>


        <ul class="product-list-ul product-list-ul-col6">
            <?php for($i=0;$i<30;$i++)
            {?>
            <li class="mb-5 product-li">
                <div class="product-div-1">

                    <div class="text-center position-relative product-img-wrapper">


                        <div class="position-absolute w-100 h-100 hover-layer text-start">
                            <ul>
                                <li> <a href="./product-detail.php" class="hover-layer-btn"> <img class="eye-icon"
                                            src="./images/eye-icon.png" alt="">快速睇產品</a></li>

                                <li> <a href="./favorite.php" class="hover-layer-btn heart"><img class="heart-icon"
                                            src="./images/heart-icon.png" alt="">加入好想買清單</a></li>

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
                        <div class="old-price price  mt-1">HK$79.99</div>
                        <div class="final-price"><span class="s">$</span><span class="b">9999</span><span
                                class="s">.99</span></div>
                    </a>
                    <a href="./cart.php" class="cart-btn mt-3"> <img src="./images/cart-icon2.png" alt="">
                        加入購物車</a>
                </div>

            </li>
            <?php }?>
        </ul>

        <div class="row mt-3 mb-3 g-0">
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
                                            <li> <a href="./product-detail.php" class="hover-layer-btn"> <img
                                                        class="eye-icon" src="./images/eye-icon.png" alt="">快速睇產品</a>
                                            </li>

                                            <li> <a href="./favorite.php" class="heart hover-layer-btn"><img
                                                        class="heart-icon" src="./images/heart-icon.png"
                                                        alt="">加入好想買清單</a></li>

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
                                <a href="" class="cart-btn-2 mt-1">
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
                                            <li> <a href="./product-detail.php" class="hover-layer-btn"> <img
                                                        class="eye-icon" src="./images/eye-icon.png" alt="">快速睇產品</a>
                                            </li>

                                            <li> <a href="./favorite.php" class="heart hover-layer-btn"><img
                                                        class="heart-icon" src="./images/heart-icon.png"
                                                        alt="">加入好想買清單</a></li>

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
                                <a href="" class="cart-btn-2 mt-1">
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
                                            <li> <a href="./product-detail.php" class="hover-layer-btn"> <img
                                                        class="eye-icon" src="./images/eye-icon.png" alt="">快速睇產品</a>
                                            </li>

                                            <li> <a href="./favorite.php" class="heart hover-layer-btn"><img
                                                        class="heart-icon" src="./images/heart-icon.png"
                                                        alt="">加入好想買清單</a></li>

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
                                <a href="" class="cart-btn-2 mt-1">
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
</style>
<script type="text/javascript">
init_play_btn();
$(window).resize(function() {

    init_play_btn();

})

function init_play_btn() {
    var t = ($('.vls-video-3').height() - $('.vjs-big-play-button').height()) / 2;
    var l = ($('.vls-video-3').width() - $('.vjs-big-play-button').width()) / 2;
    $('.vls-video-3 .vjs-big-play-button').css({
        'top': t + 'px'
    });
    $('.vls-video-3 .vjs-big-play-button').css({
        'left': l + 'px'
    });

}
</script>
<?php
include('footer.php');
?>