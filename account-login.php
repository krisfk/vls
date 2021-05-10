<?php include('header.php')?>
<div class="middle-container">
    <div class="middle-content">
        <div class="black-line"></div>
        <div class="container">
            <div class="breadcrumb mt-3"> <a href="./"> 好想買嘢 VLoveShopping</a> <span class="arrow">></span> <span>
                    登入</span>
            </div>


            <div class="login-form-div pb-4 pt-2 ">

                <table>
                    <tr>
                        <td> <a href="#" class="active login-form-btn login-form-div-a"> 登入</a></td>
                        <td><a href="#" class="reg-form-btn login-form-div-a">登記</a></td>

                    </tr>
                </table>

                <div class="form-wrapper">
                    <form action="./account-delivery.php" class="form-login">
                        <div>
                            <label for="login-tel-address">
                                流動電話號碼或電郵地址</label>
                            <input id="login-tel-address" type="text" class="form-control">
                        </div>
                        <div class="mt-2">
                            <label for="password">
                                密碼</label>
                            <input id="password" type="text" class="form-control">
                        </div>

                        <button class="login-btn mt-4 pt-2 pb-2 form-button" type="submit">登入</button>

                        <div class="mt-3">

                            <ul class="m-0 p-0">
                                <li class="d-inline-block"> <input type="checkbox" class="form-check-input"> 自動登入</li>
                                <li class="d-inline-block ms-2">
                                    <a href="#">
                                        忘記密碼</a>
                                </li>
                            </ul>
                        </div>
                    </form>


                    <form action="#" class="form-reg">

                        <div class="row">

                            <a href="#" class="reg-method-a col-6">以Facebook 帳戶登記</a>
                            <a href="#" class="reg-method-a col-6">以流動電話號碼登記</a>

                        </div>

                        <div class="mt-3">
                            <label for="nickname"></label>
                            暱稱*
                            <input id="nickname" type="text" class="form-control">
                        </div>
                        <div class="row mt-2">

                            <div class="col-6">


                                <label for="firstname"> 名*</label>
                                <input id="firstname" type="text" class="form-control">

                            </div>


                            <div class="col-6">
                                <label for="lastname">姓*</label>

                                <input id="lastname" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="mt-2">
                            <label for="tel">流動電話號碼*</label>

                            <input id="tel" type="text" class="form-control">
                        </div>
                        <div class="mt-2">
                            <label for="password2">密碼*</label>

                            <input id="password2" type="text" class="form-control">
                            <div class="note">6位字元或以上的長度的數字或字母(區分大小寫)</div>
                        </div>


                        <div class="mt-2">
                            <label for="email">
                                電郵地址</label>
                            <input id="email" type="text" class="form-control">
                        </div>

                        <div class="mt-2">

                            <label for="promotion-code">推薦人電郵地址或推廣碼(選填)</label>

                            <input id="promotion-code" type="text" class="form-control">
                        </div>

                        <div class="mt-2">

                            <ul class="m-0 p-0 no-dot">
                                <li><input type="checkbox" class="form-check-input" id="agree-1"> <label for="agree-1">
                                        同意聲明一</label></li>
                                <li><input type="checkbox" class="form-check-input" id="agree-2"> <label
                                        for="agree-2">同意聲明二</label></li>

                            </ul>

                        </div>


                        <div class="mt-3">

                            <button class="form-button pt-2 pb-2">下一步</button>

                        </div>

                    </form>


                </div>




            </div>
        </div>

    </div>
</div>
<style type="text/css">
@media (max-width: 1200px) {

    .categories-div {
        display: none;
    }

    .login-form-div {
        margin: 100px auto;
    }
}
</style>
<script type="text/javascript">
$(function() {

    $('.form-login').fadeIn(0);

    $('.login-form-btn').click(function() {

        $('.login-form-div-a').removeClass('active');
        $(this).addClass('active');
        $('.form-login').fadeIn(0);
        $('.form-reg').fadeOut(0);


    })
    $('.reg-form-btn').click(function() {
        $('.login-form-div-a').removeClass('active');
        $(this).addClass('active');

        $('.form-login').fadeOut(0);
        $('.form-reg').fadeIn(0);


    })
})
</script>
<?php include('footer.php')?>