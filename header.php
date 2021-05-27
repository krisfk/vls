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

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script type="text/javascript" src="common.js"></script>
</head>

<body>

    <div class="mobile-menu-div">
        <div class="top-color-bar top-color-bar-1"></div>
        <div class="text-center mt-3 logo-div pb-3">
            <a href="./" class="mobile-logo-a">
                <img class="logo" src="./images/logo.png" alt="">
            </a>

            <a href="javascript:void(0)" class="close-btn"></a>
        </div>

        <div class="mobile-menu-container me-3 ms-3 mt-3">
            <div class="position-relative">
                <a href="javascript:void(0)" class="search-input-2-close-btn"></a>
                <input type="text" class="form-control" id="search-input-2">
            </div>
            <ul class="mt-3">
                <li>
                    <a href="./account-login.php"><img class="login-icon" src="./images/login-icon.png" alt="">
                        登入/登記</a>
                </li>
                <?php
                for($i=0;$i<10;$i++)
                {
                    ?>

                <li class="mt-3">

                    <a href="javascript:void(0)" class="level-1"> 日本市集

                        <div class="arrow"></div>
                    </a>
                    <ul>
                        <li class="level-2-li"><a href=""> 日本調味醬料</a></li>
                        <li class="level-2-li"><a href="">日本調味醬料</a></li>
                        <li>
                            <div class="row g-2 mt-0">

                                <div class="col-6 mt-0">

                                    <a href="javascript:void(0)"><img class="w-100" src="./images/no-brand-img.jpg"
                                            alt=""></a>
                                </div>

                                <div class="col-6 mt-0">

                                    <a href="javascript:void(0)"><img class="w-100" src="./images/no-brand-img.jpg"
                                            alt=""></a>
                                </div>
                                <div class="col-6 mt-0">

                                    <a href="javascript:void(0)"><img class="w-100" src="./images/no-brand-img.jpg"
                                            alt=""></a>
                                </div>

                                <div class="col-6 mt-0">

                                    <a href="javascript:void(0)"><img class="w-100" src="./images/no-brand-img.jpg"
                                            alt=""></a>
                                </div>
                                <div class="col-6 mt-0">

                                    <a href="javascript:void(0)"><img class="w-100" src="./images/no-brand-img.jpg"
                                            alt=""></a>
                                </div>

                                <div class="col-6 mt-0">

                                    <a href="javascript:void(0)"><img class="w-100" src="./images/no-brand-img.jpg"
                                            alt=""></a>
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

    <div class="top-menu-div">
        <div class="top-color-bar top-color-bar-1"></div>
        <div class="container g-2 position-relative">

            <div class="mobile-search">

                <div class="tri"></div>

                <input type="text" class="form-control" id="mobile-search-input">


                <ul class=" mobile-search-submenu">
                    <li><a href="http://www.yahoo.com.hk"> 可口可樂</a></li>
                    <li><a href="http://www.yahoo.com.hk">維他奶</a></li>
                    <li><a href="http://www.yahoo.com.hk">益力多</a></li>

                </ul>

            </div>

            <ul class="top-nav-ul w-100 mt-3">

                <li class="mobile-left-nav-li">
                    <ul>
                        <li class="">
                            <a href="javascript:void(0)" class="mobile-menu-btn-icon-a"> <img
                                    class="mobile-menu-btn-icon" src="./images/mobile-menu-btn.png" alt=""></a>
                        </li>


                        <li class="mobile-search-li"><a href="javascript:void(0)" class="mobile-search-icon-a"><img
                                    class="mobile-search-icon" src="./images/search-icon-2.png" alt=""></a>
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
                                        <li> <a href="javascript:void(0)"> 零食甜品</a></li>
                                        <li><a href="javascript:void(0)">零食甜品</a></li>
                                        <li><a href="javascript:void(0)">零食甜品</a></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <ul class="submenu search-submenu">
                        <li class="tri"></li>
                        <li class="bg"></li>
                        <li><a href="http://www.yahoo.com.hk"> 可口可樂</a></li>
                        <li><a href="http://www.yahoo.com.hk">維他奶</a></li>
                        <li><a href="http://www.yahoo.com.hk">益力多</a></li>

                    </ul>

                </li>
                <li class="text-center logo-li">
                    <a href="./" class="mobile-logo-a">
                        <img class="logo" src="./images/logo.png" alt=""></a>
                </li>
                <li class="right-nav-li">

                    <ul class="right-nav">
                        <li class="account-login-li">
                            <a href="./account-login.php">

                                <img class="right-nav-icon" src="./images/reg-icon.png" alt="">

                                <div class="right-nav-txt">登入/登記</div>

                            </a>

                            <ul class="submenu submenu-1">
                                <li class="tri"></li>
                                <li class="bg"></li>
                                <li><a href="javascript:void(0)"> 買過的產品</a></li>
                                <li><a href="javascript:void(0)">訂單紀錄</a></li>
                                <li><a href="javascript:void(0)">送貨地址</a></li>
                                <li><a href="javascript:void(0)">帳戶資訊</a></li>
                                <li><a href="javascript:void(0)">優惠資訊</a></li>
                                <li><a href="javascript:void(0)">登出</a></li>
                            </ul>
                        </li>
                        <li class="favorite-li">
                            <a href="./favorite.php"><img class="right-nav-icon" src="./images/bm-icon.png" alt="">
                                <div class="right-nav-txt">好想買清單</div>
                            </a>
                            <ul class="submenu  submenu-2">
                                <li class="tri"></li>
                                <li class="bg"></li>
                                <li><a href="./favorite.php">好想買清單</a></li>
                                <li><a href="./favorite.php">買過的產品</a></li>
                                <li><a href="./favorite.php">最近睇過的產品</a></li>
                            </ul>
                        </li>
                        <li><a href="./cart.php" class="cart-a">

                                <span class="position-relative reg-icon-span">
                                    <div class="cart-item-no">2</div>
                                    <img class="right-nav-icon" src="./images/cart-icon.png" alt="">
                                </span>
                                <div class="right-nav-txt">購物車</div>
                            </a>
                            <ul class="submenu  submenu-3 cart-ul-ul">
                                <li class="tri"></li>
                                <li class="bg"></li>
                                <ul class="cart-ul">

                                    <?php for ($i=0;$i<10;$i++)
                                {
                                    ?>
                                    <li class="cart-row">

                                        <table>
                                            <tr>
                                                <td rowspan="2"><img class="submenu-product-img "
                                                        src="images/product-foto-1.jpg" alt="">
                                                </td>
                                                <td class="ps-3">

                                                    <div class="cart-product-name">
                                                        日版多啦A夢/叮噹造型曲奇日版多啦A夢/叮噹造型曲奇日版多啦A夢/叮噹造型曲奇</div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td class="ps-3">

                                                    <span>$59.9</span>
                                                    <span class="float-end">數量:99</span>
                                                </td>
                                            </tr>
                                        </table>
                                    </li>
                                    <?php
                                    
                                }?>


                                </ul>
                                <li class="total-amount">$2,540.99</li>
                                <li class="go-to-cart-btn-li">
                                    <a href="./cart.php">前往結帳</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>


    <div class="top-space d-block"></div>

    <div class="categories-div-wrapper pt-3">


        <div class="categories-div">

            <div class="row g-0">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <ul>
                        <li><a href="./market.php" class="nation-a">
                                <img class="flag" src="./images/flag-1.png" alt="">
                                <div class="mt-1 market-txt">日本市集</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>

                        </li>
                        <li><a href="./market.php" class="nation-a">
                                <img class="flag" src="./images/flag-2.png" alt="">
                                <div class="mt-1 market-txt">韓國市集</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="./market.php" class="nation-a">
                                <img class="flag" src="./images/flag-3.png" alt="">
                                <div class="mt-1 market-txt">泰國市集</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="./market.php" class="nation-a">
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
                        <li><a href="./market.php" class="nation-a">
                                <img class="flag" src="./images/flag-5.png" alt="">
                                <div class="mt-1 market-txt">意大利市集</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="./market.php" class="nation-a">
                                <img class="flag" src="./images/flag-6.png" alt="">
                                <div class="mt-1 market-txt">澳紐市集</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="./market.php" class="nation-a">
                                <img class="flag" src="./images/flag-7.png" alt="">
                                <div class="mt-1 market-txt">茶莊市集</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="./market.php" class="nation-a">
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
                        <li><a href="./market.php" class="nation-a">
                                <img class="flag" src="./images/flag-9.png" alt="">
                                <div class="mt-1 market-txt">韓國市集</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="./market.php" class="nation-a">
                                <img class="flag" src="./images/flag-9.png" alt="">
                                <div class="mt-1 market-txt">韓國市集</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="./market.php" class="nation-a">
                                <img class="flag" src="./images/flag-9.png" alt="">
                                <div class="mt-1 market-txt">韓國市集</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="./market.php" class="nation-a">
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

                <h4 class="mt-1 mb-3">


                    <ul class="d-table p-0 m-0 w-auto">
                        <li class="d-table-cell w-auto nation-submenu-flag-title-li">
                            <img class="flag" src="./images/flag-2.png" alt="">
                        </li>
                        <li class="d-table-cell ps-2  nation-submenu-flag-title-li"> 韓國市集</li>
                    </ul>

                </h4>
                <div class="row">


                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 ">
                        <div class="row">

                            <div class="col-6">
                                <ul>
                                    <li><a href="javascript:void(0)"> 韓國速食</a></li>
                                    <li> <a href="javascript:void(0)">韓國天然食品</a></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul>
                                    <li> <a href="javascript:void(0)">韓國調味醬料</a></li>
                                    <li><a href="javascript:void(0)">韓國健康食品</a></li>
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
                                    <li> <a href="javascript:void(0)">韓國米飯醬油</a></li>
                                    <li> <a href="javascript:void(0)">韓國飲品</a></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul>
                                    <li> <a href="javascript:void(0)">韓國烘焙</a></li>
                                    <li> <a href="javascript:void(0)">韓國酒</a></li>
                                </ul>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 ">

                        <div class="row">
                            <div class="col-6">
                                <ul>
                                    <li> <a href="javascript:void(0)">韓國麵食</a></li>
                                    <li> <a href="javascript:void(0)">追韓星必食</a></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul>
                                    <li> <a href="javascript:void(0)">韓國零食</a></li>
                                    <li> <a href="javascript:void(0)">煲韓劇必食</a></li>
                                </ul>
                            </div>

                        </div>


                    </div>

                </div>

                <h4 class="mt-3 mb-3">好想買品牌</h4>
                <div class="row g-2">

                    <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="row g-2">
                            <div class="col-6"> <a href="javascript:void(0)" class="brand-img-a"><img class="w-100"
                                        src="./images/no-brand-img.jpg" alt=""></a>
                            </div>
                            <div class="col-6"> <a href="javascript:void(0)" class="brand-img-a"><img class="w-100"
                                        src="./images/no-brand-img.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="row g-2">
                            <div class="col-6"> <a href="javascript:void(0)" class="brand-img-a"><img class="w-100"
                                        src="./images/no-brand-img.jpg" alt=""></a>
                            </div>
                            <div class="col-6"> <a href="javascript:void(0)" class="brand-img-a"><img class="w-100"
                                        src="./images/no-brand-img.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="row g-2">
                            <div class="col-6"> <a href="javascript:void(0)" class="brand-img-a"><img class="w-100"
                                        src="./images/no-brand-img.jpg" alt=""></a>
                            </div>
                            <div class="col-6"> <a href="javascript:void(0)" class="brand-img-a"><img class="w-100"
                                        src="./images/no-brand-img.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>