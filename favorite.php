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
                <div class="col-lg-2 col-md-12 col-sm-12 col-12 favorite-side-menu">
                    <?php //include('favorite-side-menu.php');?>
                    <?php include('favorite-side-menu.php');?>

                </div>
                <div class="col-lg-10 col-md-12 col-sm-12 col-12 favorite-content-div ">


                    <div class="row g-0  mt-2 favorite-title-div mb-3">
                        <div class="col-6 favorite-title">
                            <span class="fw-bold">好想買</span>清單
                        </div>
                        <div class="col-6 text-end select-all-unselect-all-div">

                            <input class="form-check-input check-fav-option" type="checkbox" value=""
                                id="check-fav-option-1">
                            <label for="check-fav-option-1"> 全選</label>
                            <input class="form-check-input check-fav-option" type="checkbox" value=""
                                id="check-fav-option-2">
                            <label for="check-fav-option-2">取消已選</label>

                        </div>

                    </div>
                    <ul class="product-list-ul product-list-ul-col5">
                        <?php for($i=0;$i<30;$i++)
            {?>
                        <li class="mb-5 product-li">



                            <div class="product-div-1">
                                <input class="form-check-input" type="checkbox" value="" id="">

                                <div class="float-end small-icon-div">
                                    <a href="#" class="yellow-share-icon-a"> <img class="yellow-share-icon"
                                            src="./images/yellow-share-icon.png" alt=""></a>
                                    <a href="#" class="bin-btn-a"> <img class="bin-btn" src="./images/bin-btn.png"
                                            alt=""></a>

                                </div>
                                <div class="mobile-table-div">
                                    <div class="text-center position-relative product-img-wrapper">



                                        <img class="product-img w-100" src="./images/product-foto-1.jpg" alt="">

                                    </div>

                                    <div class="product-info-right">

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
                                        <div class="final-price"><span class="s">$</span><span
                                                class="b">9999</span><span class="s">.99</span></div>
                                    </div>
                                </div>
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

    $('.check-fav-option').click(function() {

        var idx = $(this).index();


        if ($(this).is(':checked')) {
            $('.check-fav-option').prop('checked', false);
            $(this).prop('checked', true);

            if (idx == 0) {

                $('.product-div-1 input[type="checkbox"]').prop('checked', true)

            }
            if (idx == 2) {

                $('.product-div-1 input[type="checkbox"]').prop('checked', false)

            }


        } else {
            // alert(50)
            $(this).prop('checked', false);

            // if (idx === 0) {

            //     $('.product-div-1 input[type="checkbox"]').prop('checked', true)
            // }
            // if (idx === 2) {
            $('.product-div-1 input[type="checkbox"]').prop('checked', false)

            // }

        }




    })

})
</script>
<?php include('footer.php')?>