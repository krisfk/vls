<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vloveshopping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <link rel='stylesheet' href='normalize.css' media='all' />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />
    <link rel='stylesheet' href='style.css' media='all' />



</head>

<body>

    <div class="mobile-menu-div">
        <div id="top-color-bar"></div>
        <div class="text-center mt-3 logo-div pb-3">
            <a href="#">
                <img class="logo" src="./images/logo.png" alt="">
            </a>
        </div>

        <div class="mobile-menu-container me-3 ms-3 mt-3">
            <div class="position-relative">
                <a href="#" class="search-input-2-close-btn"></a>
                <input type="text" class="form-control" id="search-input-2">
            </div>
            <ul class="mt-3">
                <li>
                    <a href="#"><img class="login-icon" src="./images/login-icon.png" alt=""> 登入/登記</a>
                </li>
                <?php
                for($i=0;$i<10;$i++)
                {
                    ?>

                <li class="mt-3">

                    <a href="#" class="level-1"> 日本市集

                        <div class="arrow"></div>
                    </a>
                    <ul>
                        <li class="level-2-li"><a href=""> 日本調味醬料</a></li>
                        <li class="level-2-li"><a href="">日本調味醬料</a></li>
                        <li>
                            <div class="row g-2 mt-0">

                                <div class="col-6 mt-0">

                                    <a href="#"><img class="w-100" src="./images/no-brand-img.jpg" alt=""></a>
                                </div>

                                <div class="col-6 mt-0">

                                    <a href="#"><img class="w-100" src="./images/no-brand-img.jpg" alt=""></a>
                                </div>
                                <div class="col-6 mt-0">

                                    <a href="#"><img class="w-100" src="./images/no-brand-img.jpg" alt=""></a>
                                </div>

                                <div class="col-6 mt-0">

                                    <a href="#"><img class="w-100" src="./images/no-brand-img.jpg" alt=""></a>
                                </div>
                                <div class="col-6 mt-0">

                                    <a href="#"><img class="w-100" src="./images/no-brand-img.jpg" alt=""></a>
                                </div>

                                <div class="col-6 mt-0">

                                    <a href="#"><img class="w-100" src="./images/no-brand-img.jpg" alt=""></a>
                                </div>

                            </div>

                        </li>
                    </ul>

                </li>
                <?php
                }
                ?>
            </ul>
        </div>


    </div>

    <div class="mobile-bg">

    </div>

    <div id="top-color-bar"></div>
    <div class="container">

        <ul class="top-nav-ul w-100 mt-4">

            <li class="mobile-left-nav-li">
                <ul>
                    <li class="">
                        <a href="#" class="mobile-menu-btn-icon-a"> <img class="mobile-menu-btn-icon"
                                src="./images/mobile-menu-btn.png" alt=""></a>
                    </li>


                    <li class=""><a href="#" class="mobile-search-icon-a"><img class="mobile-search-icon"
                                src="./images/search-icon-2.png" alt=""></a>
                    </li>

                </ul>
            </li>


            <li class="search-nav">
                <input type="text" class="form-control" id="search-input">

                <div class="hot-search-div mt-1">

                    <table>
                        <tr>
                            <td class="align-middle">
                                熱門搜尋：
                            </td>
                            <td class="align-middle">
                                <ul class="hot-search-ul">
                                    <li> <a href="#"> 零食甜品</a></li>
                                    <li><a href="#">零食甜品</a></li>
                                    <li><a href="#">零食甜品</a></li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>

                <ul class="submenu search-submenu">
                    <li class="tri"></li>
                    <li class="bg"></li>
                    <li><a href="#"> 可口可樂</a></li>
                    <li><a href="#">維他奶</a></li>
                    <li><a href="#">益力多</a></li>

                </ul>

            </li>
            <li class="text-center logo-li"><img class="logo" src="./images/logo.png" alt=""></li>
            <li class="right-nav-li">

                <ul class="right-nav">
                    <li>
                        <a href="#">
                            <img class="right-nav-icon" src="./images/reg-icon.png" alt="">
                            <div class="right-nav-txt">登入/登記</div>

                        </a>

                        <ul class="submenu submenu-1">
                            <li class="tri"></li>
                            <li class="bg"></li>
                            <li><a href="#"> 買過的產品</a></li>
                            <li><a href="#">訂單紀錄</a></li>
                            <li><a href="#">送貨地址</a></li>
                            <li><a href="#">帳戶資訊</a></li>
                            <li><a href="#">優惠資訊</a></li>
                            <li><a href="#">登出</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><img class="right-nav-icon" src="./images/bm-icon.png" alt="">
                            <div class="right-nav-txt">好想買清單</div>
                        </a>
                        <ul class="submenu  submenu-2">
                            <li class="tri"></li>
                            <li class="bg"></li>
                            <li><a href="#">好想買清單</a></li>
                            <li><a href="#">買過的產品</a></li>
                            <li><a href="#">最近睇過的產品</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="cart-a"><img class="right-nav-icon" src="./images/cart-icon.png" alt="">
                            <div class="right-nav-txt">購物車</div>
                        </a>
                        <ul class="submenu  submenu-3 cart-ul-ul">
                            <li class="tri"></li>
                            <li class="bg"></li>
                            <ul class="cart-ul">
                                <li class="cart-row">

                                    <table>
                                        <tr>
                                            <td rowspan="2"><img class="submenu-product-img "
                                                    src="images/product-foto-1.jpg" alt="">
                                            </td>
                                            <td class="ps-3">日版 多啦A夢 叮噹造型曲奇</td>

                                        </tr>
                                        <tr>
                                            <td class="ps-3">

                                                <span>$59.9</span>
                                                <span class="float-end">數量:99</span>
                                            </td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="cart-row">

                                    <table>
                                        <tr>
                                            <td rowspan="2"><img class="submenu-product-img "
                                                    src="images/product-foto-1.jpg" alt="">
                                            </td>
                                            <td class="ps-3">日版 多啦A夢 叮噹造型曲奇</td>

                                        </tr>
                                        <tr>
                                            <td class="ps-3">

                                                <span>$59.9</span>
                                                <span class="float-end">數量:99</span>
                                            </td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="cart-row">

                                    <table>
                                        <tr>
                                            <td rowspan="2"><img class="submenu-product-img "
                                                    src="images/product-foto-1.jpg" alt="">
                                            </td>
                                            <td class="ps-3">日版 多啦A夢 叮噹造型曲奇</td>

                                        </tr>
                                        <tr>
                                            <td class="ps-3">

                                                <span>$59.9</span>
                                                <span class="float-end">數量:99</span>
                                            </td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="cart-row">

                                    <table>
                                        <tr>
                                            <td rowspan="2"><img class="submenu-product-img "
                                                    src="images/product-foto-1.jpg" alt="">
                                            </td>
                                            <td class="ps-3">日版 多啦A夢 叮噹造型曲奇</td>

                                        </tr>
                                        <tr>
                                            <td class="ps-3">

                                                <span>$59.9</span>
                                                <span class="float-end">數量:99</span>
                                            </td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="cart-row">

                                    <table>
                                        <tr>
                                            <td rowspan="2"><img class="submenu-product-img "
                                                    src="images/product-foto-1.jpg" alt="">
                                            </td>
                                            <td class="ps-3">日版 多啦A夢 叮噹造型曲奇</td>

                                        </tr>
                                        <tr>
                                            <td class="ps-3">

                                                <span>$59.9</span>
                                                <span class="float-end">數量:99</span>
                                            </td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="cart-row">

                                    <table>
                                        <tr>
                                            <td rowspan="2"><img class="submenu-product-img "
                                                    src="images/product-foto-1.jpg" alt="">
                                            </td>
                                            <td class="ps-3">日版 多啦A夢 叮噹造型曲奇</td>

                                        </tr>
                                        <tr>
                                            <td class="ps-3">

                                                <span>$59.9</span>
                                                <span class="float-end">數量:99</span>
                                            </td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="cart-row">

                                    <table>
                                        <tr>
                                            <td rowspan="2"><img class="submenu-product-img "
                                                    src="images/product-foto-1.jpg" alt="">
                                            </td>
                                            <td class="ps-3">日版 多啦A夢 叮噹造型曲奇</td>

                                        </tr>
                                        <tr>
                                            <td class="ps-3">

                                                <span>$59.9</span>
                                                <span class="float-end">數量:99</span>
                                            </td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="cart-row">

                                    <table>
                                        <tr>
                                            <td rowspan="2"><img class="submenu-product-img "
                                                    src="images/product-foto-1.jpg" alt="">
                                            </td>
                                            <td class="ps-3">日版 多啦A夢 叮噹造型曲奇</td>

                                        </tr>
                                        <tr>
                                            <td class="ps-3">

                                                <span>$59.9</span>
                                                <span class="float-end">數量:99</span>
                                            </td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="cart-row">

                                    <table>
                                        <tr>
                                            <td rowspan="2"><img class="submenu-product-img "
                                                    src="images/product-foto-1.jpg" alt="">
                                            </td>
                                            <td class="ps-3">日版 多啦A夢 叮噹造型曲奇</td>

                                        </tr>
                                        <tr>
                                            <td class="ps-3">

                                                <span>$59.9</span>
                                                <span class="float-end">數量:99</span>
                                            </td>
                                        </tr>
                                    </table>
                                </li>

                            </ul>
                            <li class="total-amount">$2,540.99</li>
                            <li class="go-to-cart-btn-li">
                                <a href="go-to-cart-btn">前往結帳</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="categories-div">

            <div class="row g-0">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <ul>
                        <li><a href="#" class="nation-a">
                                <img class="flag" src="./images/flag-1.png" alt="">
                                <div class="mt-1 market-txt">日本市集</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>

                        </li>
                        <li><a href="#" class="nation-a">
                                <img class="flag" src="./images/flag-2.png" alt="">
                                <div class="mt-1 market-txt">韓國市集</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="#" class="nation-a">
                                <img class="flag" src="./images/flag-3.png" alt="">
                                <div class="mt-1 market-txt">泰國市集</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="#" class="nation-a">
                                <img class="flag" src="./images/flag-4.png" alt="">
                                <div class="mt-1 market-txt">德國市集</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <ul>
                        <li><a href="#" class="nation-a">
                                <img class="flag" src="./images/flag-5.png" alt="">
                                <div class="mt-1 market-txt">意大利市集</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="#" class="nation-a">
                                <img class="flag" src="./images/flag-6.png" alt="">
                                <div class="mt-1 market-txt">澳紐市集</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="#" class="nation-a">
                                <img class="flag" src="./images/flag-7.png" alt="">
                                <div class="mt-1 market-txt">茶莊市集</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="#" class="nation-a">
                                <img class="flag" src="./images/flag-8.png" alt="">
                                <div class="mt-1 market-txt">市集世界</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <ul>
                        <li><a href="#" class="nation-a">
                                <img class="flag" src="./images/flag-9.png" alt="">
                                <div class="mt-1 market-txt">韓國市集</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="#" class="nation-a">
                                <img class="flag" src="./images/flag-9.png" alt="">
                                <div class="mt-1 market-txt">韓國市集</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="#" class="nation-a">
                                <img class="flag" src="./images/flag-9.png" alt="">
                                <div class="mt-1 market-txt">韓國市集</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="#" class="nation-a">
                                <img class="flag" src="./images/flag-9.png" alt="">
                                <div class="mt-1 market-txt">更多</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="nation-submenu p-3">

                <h4 class="mt-1 mb-3">韓國市集</h4>
                <div class="row">


                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 ">
                        <div class="row">

                            <div class="col-6">
                                <ul>
                                    <li><a href="#"> 韓國速食</a></li>
                                    <li> <a href="#">韓國天然食品</a></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul>
                                    <li> <a href="#">韓國調味醬料</a></li>
                                    <li><a href="#">韓國健康食品</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- 

                         -->

                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 ">
                        <div class="row">

                            <div class="col-6">
                                <ul>
                                    <li> <a href="#">韓國米飯醬油</a></li>
                                    <li> <a href="#">韓國飲品</a></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul>
                                    <li> <a href="#">韓國烘焙</a></li>
                                    <li> <a href="#">韓國酒</a></li>
                                </ul>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 ">

                        <div class="row">
                            <div class="col-6">
                                <ul>
                                    <li> <a href="#">韓國麵食</a></li>
                                    <li> <a href="#">追韓星必食</a></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul>
                                    <li> <a href="#">韓國零食</a></li>
                                    <li> <a href="#">煲韓劇必食</a></li>
                                </ul>
                            </div>

                        </div>


                    </div>

                </div>

                <h4 class="mt-3 mb-3">好想買品牌</h4>
                <div class="row g-2">

                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="row g-2">
                            <div class="col-6"> <a href="#" class="brand-img-a"><img class="w-100"
                                        src="./images/no-brand-img.jpg" alt=""></a>
                            </div>
                            <div class="col-6"> <a href="#" class="brand-img-a"><img class="w-100"
                                        src="./images/no-brand-img.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="row g-2">
                            <div class="col-6"> <a href="#" class="brand-img-a"><img class="w-100"
                                        src="./images/no-brand-img.jpg" alt=""></a>
                            </div>
                            <div class="col-6"> <a href="#" class="brand-img-a"><img class="w-100"
                                        src="./images/no-brand-img.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="row g-2">
                            <div class="col-6"> <a href="#" class="brand-img-a"><img class="w-100"
                                        src="./images/no-brand-img.jpg" alt=""></a>
                            </div>
                            <div class="col-6"> <a href="#" class="brand-img-a"><img class="w-100"
                                        src="./images/no-brand-img.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>

    </div>

    <div class="banner-div" style="background:#0994b3">

        <div class="container">
            <img class="w-100" src="./images/banner.jpg" alt="">
        </div>
    </div>

    <div class="small-banner-container-wrapper">
        <div class="container position-relative">

            <!-- <div class="row"> -->

            <ul class="small-banner-video-ul mx-auto">
                <li> <img class="small-banner" src="./images/small-banner.jpg" alt="">
                </li>
                <li>
                    <div class=" video-player-col-div">
                        <!-- <div class="position-relative"> -->
                        <div class="video-player-div foot-bg">

                            <div class="text-center video-title pt-1 pb-1 fw-bold">史路比奇幻世界</div>
                            <div class="position-relative ps-3 pe-3 video-img-div-small">

                                <div class="pause-txt">影響放大播放中...</div>
                                <!-- <a href="javascript:void(0);" class="play-btn-div">
                                </a> -->
                                <!-- <img class="w-100" src="./images/video-img.jpg" alt=""> -->

                                <video id="vls-video-1" name="videojs" class="video-js vls-video-1" controls
                                    preload="auto" width="640" height="264" poster="MY_VIDEO_POSTER.jpg"
                                    data-setup="{}">
                                    <source src="https://vjs.zencdn.net/v/oceans.mp4" type="video/mp4" />
                                    <p class="vjs-no-js">
                                        To view this video please enable JavaScript, and consider upgrading to a
                                        web browser that
                                        <a href="https://videojs.com/html5-video-support/" target="_blank">supports
                                            HTML5 video</a>
                                    </p>
                                </video>

                            </div>
                        </div>
                        <!-- </div> -->
                    </div>
                </li>

            </ul>

            <!-- </div> -->
        </div>
    </div>
    <div class=" foot-bg foot-bg-div   pb-5">
        <div class="container">


            <div class="text-center">

                <div class="enlarge-video-div">
                    <div class="ribbon-subtitle mt-5 text-center fw-bold position-relative">
                        <img class="subtitle-left-ribbon" src="./images/subtitle-left-ribbon.png" alt="">

                        史路比奇幻世界
                        <img class="subtitle-right-ribbon" src="./images/subtitle-right-ribbon.png" alt="">
                    </div>

                    <div class="mt-4">
                        <div class="video-img-div">
                            <img class="dummy" src="./images/video-img.jpg" alt="">

                            <video playsinline id="vls-video-2" name="videojs" class="video-js vls-video-2" controls
                                preload="auto" width="640" height="264" poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
                                <source src="https://vjs.zencdn.net/v/oceans.mp4" type="video/mp4" />
                                <p class="vjs-no-js">
                                    To view this video please enable JavaScript, and consider upgrading to a
                                    web browser that
                                    <a href="https://videojs.com/html5-video-support/" target="_blank">supports
                                        HTML5 video</a>
                                </p>
                            </video>

                        </div>
                    </div>
                </div>

                <div class="ribbon-subtitle mt-3 text-center fw-bold position-relative mt-5">
                    <img class="subtitle-left-ribbon" src="./images/subtitle-left-ribbon.png" alt="">

                    好想買史路比奇幻世界
                    <img class="subtitle-right-ribbon" src="./images/subtitle-right-ribbon.png" alt="">
                </div>

                <div class="row mt-5">

                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 mb-3">
                        <div class="product-div-1">
                            <img class="product-img w-100" src="./images/product-foto-1.jpg" alt="">
                            <div class="product-name">日版 多啦A夢 叮噹造型曲奇餅禮盒（1盒6塊）</div>
                            <div class="product-set mt-1">1盒6塊</div>

                            <div class="recommend-rate  mt-1">
                                好想買指數：

                                <div class="pt-div"><img class="pt" src="./images/green-pt.png" alt=""> <img class="pt"
                                        src="./images/green-pt.png" alt=""> <img class="pt" src="./images/green-pt.png"
                                        alt=""> <img class="pt" src="./images/green-pt.png" alt="">
                                    <img class="pt" src="./images/grey-pt.png" alt="">
                                </div>

                            </div>
                            <div class="limited-quantity  mt-1">日本限量版1000件</div>
                            <div class="old-price price  mt-1">HK$79.9</div>
                            <div class="final-price"><span class="s">$</span><span class="b">9999</span><span
                                    class="s">.99</span></div>

                            <a href="" class="add-to-cart-btn mt-3"> 加入購物車</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6  mb-3">
                        <div class="product-div-1">
                            <img class="product-img w-100" src="./images/product-foto-1.jpg" alt="">
                            <div class="product-name">日版 多啦A夢 叮噹造型曲奇餅禮盒（1盒6塊）</div>
                            <div class="product-set mt-1">1盒6塊</div>

                            <div class="recommend-rate  mt-1">
                                好想買指數： <div class="pt-div"><img class="pt" src="./images/green-pt.png" alt=""> <img
                                        class="pt" src="./images/green-pt.png" alt=""> <img class="pt"
                                        src="./images/green-pt.png" alt=""> <img class="pt" src="./images/green-pt.png"
                                        alt="">
                                    <img class="pt" src="./images/grey-pt.png" alt="">
                                </div>
                            </div>
                            <div class="limited-quantity  mt-1">日本限量版1000件</div>
                            <div class="old-price price  mt-1">HK$79.9</div>
                            <div class="final-price"><span class="s">$</span><span class="b">9999</span><span
                                    class="s">.99</span></div>

                            <a href="" class="add-to-cart-btn mt-3"> 加入購物車</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6  mb-3">
                        <div class="product-div-1">
                            <img class="product-img w-100" src="./images/product-foto-1.jpg" alt="">
                            <div class="product-name">日版 多啦A夢 叮噹造型曲奇餅禮盒（1盒6塊）</div>
                            <div class="product-set mt-1">1盒6塊</div>

                            <div class="recommend-rate  mt-1">
                                好想買指數：
                                <div class="pt-div"> <img class="pt" src="./images/green-pt.png" alt=""> <img class="pt"
                                        src="./images/green-pt.png" alt=""> <img class="pt" src="./images/green-pt.png"
                                        alt=""> <img class="pt" src="./images/green-pt.png" alt="">
                                    <img class="pt" src="./images/grey-pt.png" alt="">
                                </div>
                            </div>
                            <div class="limited-quantity  mt-1">日本限量版1000件</div>
                            <div class="old-price price  mt-1">HK$79.9</div>
                            <div class="final-price"><span class="s">$</span><span class="b">9999</span><span
                                    class="s">.99</span></div>

                            <a href="" class="add-to-cart-btn mt-3"> 加入購物車</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6  mb-3">
                        <div class="product-div-1">
                            <img class="product-img w-100" src="./images/product-foto-1.jpg" alt="">
                            <div class="product-name">日版 多啦A夢 叮噹造型曲奇餅禮盒（1盒6塊）</div>
                            <div class="product-set mt-1">1盒6塊</div>

                            <div class="recommend-rate  mt-1">
                                好想買指數：<div class="pt-div"> <img class="pt" src="./images/green-pt.png" alt=""> <img
                                        class="pt" src="./images/green-pt.png" alt=""> <img class="pt"
                                        src="./images/green-pt.png" alt=""> <img class="pt" src="./images/green-pt.png"
                                        alt="">
                                    <img class="pt" src="./images/grey-pt.png" alt="">
                                </div>

                            </div>
                            <div class="limited-quantity  mt-1">日本限量版1000件</div>
                            <div class="old-price price  mt-1">HK$79.9</div>
                            <div class="final-price"><span class="s">$</span><span class="b">9999</span><span
                                    class="s">.99</span></div>

                            <a href="" class="add-to-cart-btn mt-3"> 加入購物車</a>
                        </div>
                    </div>


                </div>





            </div>

        </div>

    </div>


    <div class="container">



        <?php
    for($i=0;$i<3;$i++)
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

                        <div class="col-lg-2 col-md-4 col-sm-4 col-4 product-div-2">
                            <div class="text-center"> <img src="./images/product-foto-2.jpg" alt="">
                            </div>
                            <div>日本日本多啦A夢叮日本日本多啦A夢叮</div>
                            <div class="final-price"><span class="s">$</span> <span class="b">60.00</span></div>
                            <a href="" class="add-to-cart-btn-2 mt-1"> 加入購物車</a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-4 product-div-2">
                            <div class="text-center"> <img src="./images/product-foto-2.jpg" alt="">
                            </div>
                            <div>日本日本多啦A夢叮日本日本多啦A夢叮</div>
                            <div class="final-price"><span class="s">$</span> <span class="b">60.00</span></div>
                            <a href="" class="add-to-cart-btn-2 mt-1"> 加入購物車</a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-4 product-div-2">
                            <div class="text-center"> <img src="./images/product-foto-2.jpg" alt="">
                            </div>
                            <div>日本日本多啦A夢叮日本日本多啦A夢叮</div>
                            <div class="final-price"><span class="s">$</span> <span class="b">60.00</span></div>
                            <a href="" class="add-to-cart-btn-2 mt-1"> 加入購物車</a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-4 product-div-2">
                            <div class="text-center"> <img src="./images/product-foto-2.jpg" alt="">
                            </div>
                            <div>日本日本多啦A夢叮日本日本多啦A夢叮</div>
                            <div class="final-price"><span class="s">$</span> <span class="b">60.00</span></div>
                            <a href="" class="add-to-cart-btn-2 mt-1"> 加入購物車</a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-4 product-div-2">
                            <div class="text-center"> <img src="./images/product-foto-2.jpg" alt="">
                            </div>
                            <div>日本日本多啦A夢叮日本日本多啦A夢叮</div>
                            <div class="final-price"><span class="s">$</span> <span class="b">60.00</span></div>
                            <a href="" class="add-to-cart-btn-2 mt-1"> 加入購物車</a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-4 product-div-2">
                            <div class="text-center"> <img src="./images/product-foto-2.jpg" alt="">
                            </div>
                            <div>日本日本多啦A夢叮日本日本多啦A夢叮</div>
                            <div class="final-price"><span class="s">$</span> <span class="b">60.00</span></div>
                            <a href="" class="add-to-cart-btn-2 mt-1"> 加入購物車</a>
                        </div>
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
                    <img class="cate-foto-2" src="./images/cate-foto-2.jpg" alt="">
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

                        <div class="col-lg-2 col-md-4 col-sm-4 col-4 product-div-2">
                            <div class="text-center"> <img src="./images/product-foto-2.jpg" alt="">
                            </div>
                            <div>日本日本多啦A夢叮日本日本多啦A夢叮</div>
                            <div class="final-price"><span class="s">$</span> <span class="b">60.00</span></div>
                            <a href="" class="add-to-cart-btn-2 mt-1"> 加入購物車</a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-4 product-div-2">
                            <div class="text-center"> <img src="./images/product-foto-2.jpg" alt="">
                            </div>
                            <div>日本日本多啦A夢叮日本日本多啦A夢叮</div>
                            <div class="final-price"><span class="s">$</span> <span class="b">60.00</span></div>
                            <a href="" class="add-to-cart-btn-2 mt-1"> 加入購物車</a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-4 product-div-2">
                            <div class="text-center"> <img src="./images/product-foto-2.jpg" alt="">
                            </div>
                            <div>日本日本多啦A夢叮日本日本多啦A夢叮</div>
                            <div class="final-price"><span class="s">$</span> <span class="b">60.00</span></div>
                            <a href="" class="add-to-cart-btn-2 mt-1"> 加入購物車</a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-4 product-div-2">
                            <div class="text-center"> <img src="./images/product-foto-2.jpg" alt="">
                            </div>
                            <div>日本日本多啦A夢叮日本日本多啦A夢叮</div>
                            <div class="final-price"><span class="s">$</span> <span class="b">60.00</span></div>
                            <a href="" class="add-to-cart-btn-2 mt-1"> 加入購物車</a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-4 product-div-2">
                            <div class="text-center"> <img src="./images/product-foto-2.jpg" alt="">
                            </div>
                            <div>日本日本多啦A夢叮日本日本多啦A夢叮</div>
                            <div class="final-price"><span class="s">$</span> <span class="b">60.00</span></div>
                            <a href="" class="add-to-cart-btn-2 mt-1"> 加入購物車</a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-4 product-div-2">
                            <div class="text-center"> <img src="./images/product-foto-2.jpg" alt="">
                            </div>
                            <div>日本日本多啦A夢叮日本日本多啦A夢叮</div>
                            <div class="final-price"><span class="s">$</span> <span class="b">60.00</span></div>
                            <a href="" class="add-to-cart-btn-2 mt-1"> 加入購物車</a>
                        </div>
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

                        <div class="col-lg-2 col-md-4 col-sm-4 col-4 product-div-2">
                            <div class="text-center"> <img src="./images/product-foto-2.jpg" alt="">
                            </div>
                            <div>日本日本多啦A夢叮日本日本多啦A夢叮</div>
                            <div class="final-price"><span class="s">$</span> <span class="b">60.00</span></div>
                            <a href="" class="add-to-cart-btn-2 mt-1"> 加入購物車</a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-4 product-div-2">
                            <div class="text-center"> <img src="./images/product-foto-2.jpg" alt="">
                            </div>
                            <div>日本日本多啦A夢叮日本日本多啦A夢叮</div>
                            <div class="final-price"><span class="s">$</span> <span class="b">60.00</span></div>
                            <a href="" class="add-to-cart-btn-2 mt-1"> 加入購物車</a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-4 product-div-2">
                            <div class="text-center"> <img src="./images/product-foto-2.jpg" alt="">
                            </div>
                            <div>日本日本多啦A夢叮日本日本多啦A夢叮</div>
                            <div class="final-price"><span class="s">$</span> <span class="b">60.00</span></div>
                            <a href="" class="add-to-cart-btn-2 mt-1"> 加入購物車</a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-4 product-div-2">
                            <div class="text-center"> <img src="./images/product-foto-2.jpg" alt="">
                            </div>
                            <div>日本日本多啦A夢叮日本日本多啦A夢叮</div>
                            <div class="final-price"><span class="s">$</span> <span class="b">60.00</span></div>
                            <a href="" class="add-to-cart-btn-2 mt-1"> 加入購物車</a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-4 product-div-2">
                            <div class="text-center"> <img src="./images/product-foto-2.jpg" alt="">
                            </div>
                            <div>日本日本多啦A夢叮日本日本多啦A夢叮</div>
                            <div class="final-price"><span class="s">$</span> <span class="b">60.00</span></div>
                            <a href="" class="add-to-cart-btn-2 mt-1"> 加入購物車</a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-4 product-div-2">
                            <div class="text-center"> <img src="./images/product-foto-2.jpg" alt="">
                            </div>
                            <div>日本日本多啦A夢叮日本日本多啦A夢叮</div>
                            <div class="final-price"><span class="s">$</span> <span class="b">60.00</span></div>
                            <a href="" class="add-to-cart-btn-2 mt-1"> 加入購物車</a>
                        </div>
                    </div>
                </li>

            </ul>
        </div>

        <?php   
        }
        ?>

    </div>













    </div>
    <script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>

    <script type="text/javascript">
    $(function() {

        $('.right-nav li a').mouseenter(function() {



            if (!$(this).hasClass('cart-a')) {
                $(this).next('.submenu').fadeIn(0);

                var d = ($(this).next('.submenu').width() + 10 - $(this).width()) / 2;
                $(this).next('.submenu').css({
                    'left': -d + 'px'
                });

                var t_d = ($(this).next('.submenu').width() + 10 - 32) / 2;
                $(this).next('.submenu').find('.tri').css({
                    'margin-left': t_d + 'px'
                });
            } else {

                $(this).next('.submenu').fadeIn(0);

                // var d = ($(this).next('.submenu').width() + 10 - $(this).width()) / 2;
                $(this).next('.submenu').css({
                    'right': '0px'
                });

                var t_d = $(this).next('.submenu').width();
                $(this).next('.submenu').find('.tri').css({
                    'margin-left': t_d - 20 + 'px'
                });


            }


        });
        $('.right-nav li a').mouseleave(function() {

            $(this).next('.submenu').delay(300).fadeOut(0);


        });
        $('.submenu').mouseenter(function() {
            $('.submenu').fadeOut(0);
            $(this).stop().fadeIn(0);
        });
        $('.submenu').mouseleave(function() {

            if (!$(this).hasClass('search-submenu')) {
                $(this).fadeOut(0);

            }
        });

        $('#search-input').focus(function() {
            // if (!$(this).closest('.mobile-menu-container')) {
            $('.search-nav .submenu').fadeIn(0)

            // }
        });
        $('#search-input').focusout(function() {
            $('.search-nav .submenu').fadeOut(0)
        });



        // $('.nation-submenu').click(function() {
        //     $('.nation-submenu').fadeIn(0);
        //     $('.nation-submenu').addClass('clicked');
        //     // alert(4)

        // });


        // $('.categories-div li a').focusout(function() {

        //     $('.nation-submenu').delay(200).fadeOut(0, function() {

        //         // if (!$('.nation-submenu').hasClass('clicked')) {
        //         //     $('.categories-div li a').removeClass('active');
        //         //     $('.nation-tri,.nation-tri-bg').css({
        //         //         'opacity': '0'
        //         //     });
        //         // }

        //     });

        // });


        $('.nation-a').click(function() {
            $('.nation-submenu').stop();
            $(this).toggleClass('active');
            $('.nation-tri,.nation-tri-bg').css({
                'opacity': '0'
            });
            $('.nation-submenu').fadeOut(0);

            if ($(this).hasClass('active')) {


                $('.nation-a').removeClass('active');
                $(this).addClass('active');
                $(this).next('.nation-tri').css({
                    'opacity': '1'
                });
                $(this).next().next('.nation-tri-bg').css({
                    'opacity': '1'
                });
                $('.nation-submenu').fadeIn(0);


                var d = $(this).offset().top - 13;
                $('.nation-submenu').css({
                    'top': d + 'px'
                });
            } else {
                $('.nation-submenu').fadeOut(0);

            }

        })

        var myPlayer = videojs('vls-video-1');
        var myPlayer2 = videojs('vls-video-2');



        var videoJsButtonClass = videojs.getComponent('Button');
        var concreteButtonClass = videojs.extend(videoJsButtonClass, {

            // The `init()` method will also work for constructor logic here, but it is 
            // deprecated. If you provide an `init()` method, it will override the
            // `constructor()` method!
            constructor: function() {
                videoJsButtonClass.call(this, myPlayer);
            }, // notice the comma

            handleClick: function() {
                // Do your stuff
            }
        });
        myPlayer2.controlBar.fullscreenToggle.dispose();


        var concreteButtonInstance = myPlayer.controlBar.addChild(new concreteButtonClass());
        concreteButtonInstance.addClass("vjs-enlarge");
        concreteButtonInstance.addClass("vjs-fullscreen-control");
        myPlayer.controlBar.fullscreenToggle.dispose();
        myPlayer.controlBar.pictureInPictureToggle.dispose();


        var concreteButtonInstance = myPlayer.controlBar.addChild(new concreteButtonClass());
        concreteButtonInstance.addClass("vjs-smaller");
        concreteButtonInstance.addClass("vjs-icon-picture-in-picture-exit");
        $('.vjs-smaller').fadeOut(0);

        $('.vjs-enlarge').click(function() {
            $('.video-img-div').prepend($('.video-js'));
            $('.vjs-enlarge').fadeOut(0);
            $('.vjs-smaller').fadeIn(0);
            $('.enlarge-video-div').slideDown(200, function() {
                $('.video-img-div').height($('.video-img-div').height());

            });
        })

        $('.vjs-smaller').click(function() {
            $('.video-img-div-small').prepend($('.video-js'));
            $('.vjs-enlarge').fadeIn(0);
            $('.vjs-smaller').fadeOut(0);
            $('.enlarge-video-div').fadeOut(0);


        });


        $(window).resize(function() {
            myPlayer.pause();
            myPlayer2.pause();
            $('.nation-a').removeClass('active');

            $('.nation-tri').css({
                'opacity': '0'
            });
            $('.nation-submenu').fadeOut(0);
        })

        $('.mobile-menu-container ul li a.level-1').click(function() {

            $('.mobile-menu-container ul li a.level-1').removeClass('active');
            $('.mobile-menu-container ul li a.level-1').next('ul').fadeOut(0)

            $(this).toggleClass('active');
            if ($(this).hasClass('active')) {
                $(this).next('ul').fadeIn(200)

            } else {
                $(this).next('ul').fadeOut(0)

            }


        });

        $('.mobile-menu-btn-icon-a').click(function() {
            $(this).toggleClass('active');
            if ($(this).hasClass('active')) {
                $('.mobile-menu-div').fadeIn(200);
                $('.mobile-bg').fadeIn(0);
            } else {
                $('.mobile-menu-div').fadeOut(0);

            }

        })

        $('.mobile-search-icon-a').click(function() {
            $(this).toggleClass('active');
            if ($(this).hasClass('active')) {
                $('.mobile-menu-div').fadeIn(200);
                $('.mobile-bg').fadeIn(0);
            } else {
                $('.mobile-menu-div').fadeOut(0);

            }

        })

        $('.mobile-bg').click(function() {
            $('.mobile-menu-div').fadeOut(0);
            $('.mobile-bg').fadeOut(0);
            $('.mobile-menu-btn-icon-a,.mobile-search-icon-a').removeClass('active');

        });

        // $('.mobile-bg').click(function() {})



        $('.search-input-2-close-btn').click(function() {
            $('#search-input-2').val('');
        })
        // $('.lvjs-fullscreen-control.vjs-control.vjs-button')
    })
    </script>

    <div id="bottom-color-bar" class=" mt-5"></div>


    <div class="footer-div">

        <div class="container">

            <div class="mt-5 d-inline-block w-100 position-relative">
                <ul class="footer-menu-1">
                    <li><a href="#"> 關於 好想買嘢 VLOVESHOPPING</a></li>
                    <li><a href="#">訂購送貨</a></li>
                    <li><a href="#">常見查詢</a></li>
                    <li><a href="#">使用條款</a></li>
                    <li><a href="#">私隱政策</a></li>
                    <li><a href="#">個人資料收集聲明</a></li>



                </ul>

                <ul class="footer-menu-2">
                    <li><a href="#">ENG</a> / <a href="#">中</a></li>
                    <li><img class="fb-icon2" src="./images/fb-icon2.png" alt=""> </li>
                    <li><img class="ig-icon2" src="./images/ig-icon2.png" alt=""> </li>
                </ul>
            </div>






        </div>

        <div class="white-line"></div>

        <div class="container pt-3 pb-2 copyright-txt"> PCCW OTT (Hong Kong) Limited 2021 保留所有權利。
        </div>





    </div>

</body>

</html>