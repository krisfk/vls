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
                    <div class="profile-subpage-title">訂單紀錄</div>

                    <div class="mt-lg-4 mt-md-2 mt-sm-2 mt-2 ">

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
                                
                                for($i=0;$i<5;$i++)
                                {
                                ?>
                                <tr>
                                    <td class="invoice-record-a" data-href="./account-invoice-record-detail.php">
                                        942350523</td>
                                    <td class="invoice-record-a" data-href="./account-invoice-record-detail.php">已付款
                                    </td>
                                    <td class="invoice-record-a" data-href="./account-invoice-record-detail.php">
                                        2021/00/21</td>
                                    <td class="invoice-record-a" data-href="./account-invoice-record-detail.php">
                                        $2821.00</td>
                                    <td><a href="javascript:void(0)" class="download-invoice-btn"> 按此下載</a></td>
                                </tr>

                                <?php
                                } 
                                
                                ?>


                            </tbody>


                        </table>

                        <div class="mobile-records">


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



                        </div>
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

    $('.invoice-record-a').click(function() {

        var dest = $(this).data('href');
        window.location = dest;
        // alert(dest)


    })
})
</script>
<?php include('footer.php')?>