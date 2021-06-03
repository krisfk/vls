<?php include('header.php')?>
<div class="middle-container">
    <div class="middle-content">
        <div class="black-line"></div>
        <div class="container">
            <div class="breadcrumb mt-3"> <a href="./"> 好想買嘢 VLoveShopping</a> <span class="arrow">></span> <span>
                    登入</span>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-12 profile-side-menu">
                    <?php include('profile-side-menu.php');?>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-12 mt-3 profile-content-div">
                    <div class="profile-subpage-title">送貨地址</div>

                    <div class="mt-4">
                        <div class="position-relative">
                            <table class="w-100">
                                <tr>
                                    <td>預設送貨地址</td>
                                    <td class="text-end"> <a href="javascript:void(0)"
                                            class="form-button w-auto d-inline-block ps-3 pe-3">繼續結帳</a>
                                    </td>
                                </tr>
                            </table>

                        </div>
                        <div class="selected-address-div mt-3">
                            <span class="receiver-name"> 陳大文</span> <br>
                            94140523 <br>
                            九龍觀塘鴻圖道28號 麗港城2期16座23樓C <br>
                            diamond.chan@gmail.com <br>


                            <div class="address-div-btn">
                                <a href="javascript:void(0)" class="address-div-btn-a address-div-btn-a-pen"><img
                                        class="address-div-btn-img" src="./images/pen-btn.png" alt=""></a>
                                <a href="javascript:void(0)" class="address-div-btn-a address-div-btn-a-bin"><img
                                        class="address-div-btn-img" src="./images/bin-btn.png" alt=""></a>

                            </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <div>
                            選擇其他地址
                        </div>
                        <div class="address-div mt-3">
                            <span class="receiver-name"> 李國強</span> <br>
                            85635626 <br>
                            新界, 馬灣, 中華基督教會基慧小學(馬灣) <br>
                            diamond.chan@gmail.com
                            <div class="address-div-btn">
                                <a href="javascript:void(0)" class="address-div-btn-a  address-div-btn-a-pen"><img
                                        class="address-div-btn-img" src="./images/pen-btn.png" alt=""></a>
                                <a href="javascript:void(0)" class="address-div-btn-a  address-div-btn-a-bin"><img
                                        class="address-div-btn-img" src="./images/bin-btn.png" alt=""></a>
                                <a href="javascript:void(0)"
                                    class="ms-2 form-button d-inline-block set-default-address-btn w-auto ps-3 pe-3">設為預設地址</a>

                            </div>

                        </div>
                        <div class="address-div mt-3">
                            <span class="receiver-name"> 鄭小怡</span> <br>
                            60275626 <br>
                            新界, 馬灣, 中華基督教會基慧小學(馬灣) <br>
                            diamond.chan@gmail.com
                            <div class="address-div-btn">
                                <a href="javascript:void(0)" class="address-div-btn-a  address-div-btn-a-pen"><img
                                        class="address-div-btn-img" src="./images/pen-btn.png" alt=""></a>
                                <a href="javascript:void(0)" class="address-div-btn-a  address-div-btn-a-bin"><img
                                        class="address-div-btn-img" src="./images/bin-btn.png" alt=""></a>
                                <a href="javascript:void(0)"
                                    class="ms-2 form-button d-inline-block set-default-address-btn w-auto ps-3 pe-3">設為預設地址</a>

                            </div>
                        </div>

                        <button href="javascript:void(0)"
                            class="form-button mt-3 pt-3 pb-3 new-address-btn">新增地址</button>

                        <!-- <div class="mt-5"> -->

                        <div class="new-address-container overlay-container pb-5">
                            <div class="color-bar">

                            </div>

                            <div class="new-address-title mt-3 mb-3">新增送貨地址
                                <a href="javascript:void(0)" class="close-btn"></a>

                            </div>
                            <form action="">

                                <div class="row new-address-form">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12 ">
                                        <label for="">
                                            姓名 <span class="small">
                                                (跟身份証相同)</span></label>

                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12 ">

                                        <div class="row">
                                            <div class="col-5">
                                                <input type="text" class="form-control w-100 d-inline-block me-2 "
                                                    value="陳大文">
                                            </div>
                                            <div class="col-7 gx-0">
                                                <div class="gender-list-div">
                                                    <a href="javascript:void(0)" class="gender-button active">先生</a>
                                                    <a href="javascript:void(0)" class="gender-button">小姐</a>
                                                    <a href="javascript:void(0)" class="gender-button">女士</a>
                                                </div>
                                            </div>

                                        </div>




                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12"> <label for="">
                                            地址</label></div>
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12 ">
                                        <select class="form-select" aria-label="">
                                            <option selected>九龍</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>

                                        <select class="form-select mt-2" aria-label="">
                                            <option selected>觀塘</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12"></div>
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12 "><input type="text"
                                            class="form-control" value="鴻圖道28號 麗港城2期16座23樓C"></div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12"><label for=""> 電郵</label></div>
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12 "><input type="text"
                                            class="form-control" value="diamond.chan@gmail.com"></div>

                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12"><label for=""> 電話號碼</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12 "><input type="text"
                                            class="form-control" value="94140523"></div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-12"></div>
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-12 ">
                                        <button class="form-button mt-3">新增/更新</button>

                                    </div>
                                </div>

                            </form>

                        </div>
                        <!-- </div> -->

                    </div>

                </div>

            </div>


        </div>

    </div>
</div>

<style type="text/css">
/* .categories-div-wrapper {
    display: none;
}

.middle-content {
    margin: 0;
} */
</style>
<script type="text/javascript">
$(function() {

    $('.delivery-address-a').addClass('active');
    $('.gender-button').click(function() {

        $('.gender-button').removeClass('active')
        $(this).addClass('active');
    })
})
</script>
<?php include('footer.php')?>