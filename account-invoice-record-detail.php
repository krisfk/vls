<?php include('header.php')?>
<div class="middle-container">
    <div class="middle-content">
        <div class="black-line"></div>
        <div class="container">
            <div class="breadcrumb mt-lg-3 mt-md-0 mt-sm-0 mt-0 mb-0"><a href="./"><img class="reg-icon"
                        src="./images/reg-icon.png" alt="">
                    <span class="m-0 home-txt"> 好想買嘢
                        VLoveShopping</span></a>
                <span class="arrow">></span><span>
                    會員頁面</span>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-12 profile-side-menu">
                    <?php include('profile-side-menu.php');?>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-12 mt-3 profile-content-div">
                    <div class="profile-subpage-title">訂單資訊</div>

                    <div class="mt-lg-4 mt-md-2 mt-sm-2 mt-2 ">


                        <div class="invoice-record-table-div p-3">
                            <table class="w-100 invoice-record-table">
                                <thead>
                                    <tr>
                                        <th>訂單編號</th>
                                        <th>交易狀態</th>
                                        <th>訂單日期</th>
                                        <th>總價</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="empty-td"></td>
                                        <td class="empty-td"></td>
                                        <td class="empty-td"></td>
                                        <td class="empty-td"></td>
                                        <td class="empty-td"></td>
                                    </tr>

                                    <?php
                                
                                // for($i=0;$i<1;$i++)
                                // {
                                ?>
                                    <tr>
                                        <td>942350523</td>
                                        <td>已付款</td>
                                        <td>2021/00/21</td>
                                        <td>$2821.00</td>
                                        <td><a href="javascript:void(0)" class="download-invoice-btn"> 按此下載</a></td>
                                    </tr>

                                    <?php
                                // } 
                                
                                ?>


                                </tbody>


                            </table>
                        </div>



                        <div class="mobile-records">


                            <div class="mobile-record-div p-3 mb-3">
                                <table class="mobile-record w-100">
                                    <thead>
                                        <tr>
                                            <th class="text-start">訂單編號 942350523</th>
                                            <th class="text-end">已付款</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="2" class="pt-2">訂單日期：2021/09/21 15:02</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="pt-2">總價：$1821</td>
                                        </tr>

                                        <tr>
                                            <td colspan="2" class="pt-2"><a href="javascript:void(0)"
                                                    class="download-invoice-btn">
                                                    按此下載</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>



                        </div>




                        <div class="mt-lg-5 mt-md-4 mt-sm-4 mt-4 ">
                            送貨地址
                        </div>

                        <div class="invoice-address-div mt-3">
                            <span class="receiver-name"> 陳大文</span> <br>
                            94140523 <br>
                            九龍觀塘鴻圖道28號 麗港城2期16座23樓C <br>
                            diamond.chan@gmail.com <br>



                        </div>



                        <div class="mt-lg-5 mt-md-4 mt-sm-4 mt-4 ">
                            送貨進度及貨品詳情
                        </div>

                        <div class="invoice-address-div mt-3">

                            <?php
                        for($i=0;$i<3;$i++)
                        {
                            ?>
                            <div class="row mb-3">

                                <div class="col-2">
                                    <img class="product-img w-100" src="./images/product-foto-1.jpg" alt="">
                                </div>

                                <div class="col-10">

                                    <div class="row  h-100 align-items-center">

                                        <div class="col-lg-8 col-md-8 col-sm-12 col-12 ">

                                            日版 多啦A夢 叮噹造型曲奇餅禮盒（1盒6塊）
                                            日版 多啦A夢 叮噹造型曲奇餅禮盒（1盒6塊）

                                        </div>
                                        <div
                                            class="col-lg-4 col-md-4 col-sm-12 col-12 mt-lg-0 mt-lg-0 mt-md-3 mt-sm-3 mt-3   ">
                                            <span>數量：1</span>
                                            <span class="float-end">$599.99</span>


                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                        }?>


                            <div class="grey-line"></div>



                            <div class="row">

                                <div class="col-6"></div>
                                <div class="col-6">

                                    <table class="payment-detail-table mt-4">
                                        <tr>
                                            <td>付款方式</td>
                                            <td class="text-end"> 信用卡(VISA) - 4926 **** **** 1223
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>產品總額</td>
                                            <td class="text-end"> $5000.99
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>運費</td>
                                            <td class="text-end"> $50.99
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>已付</td>
                                            <td class="text-end"> $5999.99
                                            </td>
                                        </tr>
                                    </table>


                                </div>

                            </div>


                        </div>

                        <a href="javascript:void(0);" class="buy-again-btn mt-4">重新購買所有貨品</a>



                        <!-- <div class="mobile-records">


                            <?php
                                
                                for($i=0;$i<5;$i++)
                                {
                                ?>
                            <div class="mobile-record-div p-3 mb-3">
                                <table class="mobile-record w-100">
                                    <thead>
                                        <tr>
                                            <th class="text-start">訂單編號 942350523</th>
                                            <th class="text-end">已付款</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="2" class="pt-2">訂單日期：2021/09/21 15:02</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="pt-2">總價：$1821</td>
                                        </tr>

                                        <tr>
                                            <td colspan="2" class="pt-2"><a href="javascript:void(0)"
                                                    class="download-invoice-btn">
                                                    按此下載</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <?php 
                                
                                }
                                ?>



                        </div> -->
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