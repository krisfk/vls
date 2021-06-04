<?php include('header.php')?>
<div class="middle-container">
    <div class="middle-content">
        <div class="black-line"></div>
        <div class="container">
            <div class="breadcrumb mt-lg-3 mt-md-0 mt-sm-0 mt-0 mb-0"><a href="./"><img class="reg-icon"
                        src="./images/reg-icon.png" alt="">
                    <span class="m-0 home-txt"> 好想買嘢
                        VLoveShopping</span></a>
                <span class="arrow">></span> <span>
                    登入</span>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-12 profile-side-menu">
                    <?php include('profile-side-menu.php');?>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-12 mt-3 profile-content-div">
                    <div class="profile-subpage-title">帳戶資料</div>

                    <div class="mt-4 form-wrapper ms-0 me-0">

                        <form action="#">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-12 col-12 ">
                                    <label for="">
                                        暱稱
                                    </label>

                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-12 col-12 ">

                                    <input type="text" class="form-control  " value="阿文">
                                </div>


                                <div class="col-lg-2 col-md-2 col-sm-12 col-12 ">
                                    <label for="">
                                        名
                                    </label>

                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-12 col-12 ">

                                    <input type="text" class="form-control  " value="大文">
                                </div>


                                <div class="col-lg-2 col-md-2 col-sm-12 col-12 ">
                                    <label for="">
                                        姓
                                    </label>

                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-12 col-12 ">

                                    <input type="text" class="form-control  " value="陳">
                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-12 col-12 ">
                                    <label for="">
                                        流動電話號碼
                                    </label>

                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-12 col-12 ">

                                    <input type="text" class="form-control  " max-length="8" value="99999999">
                                </div>


                                <div class="col-lg-2 col-md-2 col-sm-12 col-12 ">
                                    <label for="">
                                        一次性驗証碼
                                    </label>

                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-12 col-12 ">

                                    <input type="text" class="form-control d-inline-block ver-code  " value="99999999">
                                    <a href="javascript:void(0)"
                                        class="form-button w-auto d-inline-block ps-3 pe-3">發送驗証短訊</a>
                                    <div class="note">請輸入驗證短訊所示的一次性驗證碼</div>
                                </div>


                                <div class="col-lg-2 col-md-2 col-sm-12 col-12 ">


                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-12 col-12 ">

                                    <a href="javascript:void(0)" class="form-button mt-4">更新</a>
                                </div>





                            </div>
                        </form>
                    </div>
                </div>




            </div>

        </div>


    </div>

</div>
</div>

<style type="text/css">
/* .categories-div {
    display: none;
} */

.middle-content {
    margin: 0;
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