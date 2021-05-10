<?php include('header.php')?>
<div class="middle-container">
    <div class="middle-content">
        <div class="black-line"></div>
        <div class="container">

            <div class="breadcrumb mt-3"><a href="./"><img class="reg-icon" src="./images/reg-icon.png" alt=""> <a
                        href="./" class="home-txt"> 好想買嘢 VLoveShopping</a> <span class="arrow">></span>
                    <span>好想買清單</span>
            </div>


            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12 col-12 profile-side-menu">
                    <?php //include('profile-side-menu.php');?>
                    <?php include('favorite-side-menu.php');?>

                </div>
                <div class="col-lg-10 col-md-12 col-sm-12 col-12 profile-content-div">

                    <ul class="product-list-ul product-list-ul-col5">
                        <?php for($i=0;$i<30;$i++)
            {?>
                        <li class="mb-5 product-li">
                            <div class="product-div-1">

                                <div class="text-center position-relative product-img-wrapper">

                                    <!-- 
                                    <div class="position-absolute w-100 h-100 hover-layer text-start">
                                        <ul>
                                            <li> <a href="./product-detail.php" class="hover-layer-btn"> <img
                                                        class="eye-icon" src="./images/eye-icon.png" alt="">快速睇產品</a>
                                            </li>

                                            <li> <a href="" class="hover-layer-btn"><img class="heart-icon"
                                                        src="./images/heart-icon.png" alt="">加入好想買清單</a></li>

                                        </ul>

                                    </div> -->
                                    <img class="product-img w-100" src="./images/product-foto-1.jpg" alt="">

                                </div>



                                <div class="product-name">日版 多啦A夢 叮噹造型曲奇餅禮盒（1盒6塊）</div>
                                <div class="product-set mt-1">1盒6塊</div>

                                <div class="recommend-rate  mt-1">
                                    好想買指數：

                                    <div class="pt-div"><img class="pt" src="./images/green-pt.png" alt=""> <img
                                            class="pt" src="./images/green-pt.png" alt=""> <img class="pt"
                                            src="./images/green-pt.png" alt="">
                                        <img class="pt" src="./images/green-pt.png" alt="">
                                        <img class="pt" src="./images/grey-pt.png" alt="">
                                    </div>

                                </div>
                                <div class="limited-quantity  mt-1">日本限量版1000件</div>
                                <div class="old-price price  mt-1">HK$79.9</div>
                                <div class="final-price"><span class="s">$</span><span class="b">9999</span><span
                                        class="s">.99</span></div>

                                <a href="javascript:void(0)" class="cart-btn mt-3"> <img src="./images/cart-icon2.png"
                                        alt="">
                                    加入購物車</a>
                            </div>

                        </li>
                        <?php }?>
                    </ul>
                </div>




            </div>

        </div>


    </div>

</div>
</div>
<style type="text/css">
@media (max-width: 991px) {
    .categories-div {
        display: none;
    }

    .desktop-product-img-col {
        display: none;

    }

    .breadcrumb {
        display: block;
        margin: 50px 0 0 0 !important;
    }


}
</style>
<script type="text/javascript">
$(function() {

    $('.account-a').addClass('active');
    $('.gender-button').click(function() {

        $('.gender-button').removeClass('active')
        $(this).addClass('active');
    })
})
</script>
<?php include('footer.php')?>