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

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script type="text/javascript" src="common.js"></script>
</head>

<body>

    <div class="lightbox-bg"></div>

    <div class="mobile-menu-div">
        <div class="top-color-bar top-color-bar-1"></div>
        <div class="text-center mt-3 logo-div pb-3">
            <a href="./" class="mobile-logo-a">
                <img class="logo" src="./images/logo.png" alt="">
            </a>

            <a href="javascript:void(0)" class="close-btn"></a>
        </div>

        <div class="mobile-menu-container p-3">
            <div class="position-relative">
                <a href="javascript:void(0)" class="search-input-2-close-btn"></a>
                <input type="text" class="form-control" id="search-input-2">
            </div>
            <ul class="mt-3">
                <li>
                    <a href="./account-login.php"><img class="login-icon" src="./images/reg-icon.png" alt="">
                        <span class="login-txt">??????/??????</span></a>
                </li>

                <li>
                    <a href="./account-login.php"><img class="login-icon" src="./images/bm-icon.png" alt="">
                        ???????????????</a>
                </li>

                <?php
                for($i=0;$i<20;$i++)
                {
                    ?>

                <li class="mt-0">
                    <a class="arrow" href="javascript:void(0)"></a>

                    <a href="./market.php" class="level-1"> ????????????

                    </a>
                    <ul>
                        <li class="level-2-li"><a href=""> ??????????????????</a></li>
                        <li class="level-2-li"><a href="">??????????????????</a></li>
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
                    <li><a href="http://www.yahoo.com.hk"> ????????????</a></li>
                    <li><a href="http://www.yahoo.com.hk">?????????</a></li>
                    <li><a href="http://www.yahoo.com.hk">?????????</a></li>

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
                                    ???????????????
                                </td>
                                <td class="align-middle">
                                    <ul class="hot-search-ul">
                                        <li> <a href="javascript:void(0)"> ????????????</a></li>
                                        <li><a href="javascript:void(0)">????????????</a></li>
                                        <li><a href="javascript:void(0)">????????????</a></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <ul class="submenu search-submenu">
                        <li class="tri"></li>
                        <li class="bg"></li>
                        <li><a href="http://www.yahoo.com.hk"> ????????????</a></li>
                        <li><a href="http://www.yahoo.com.hk">?????????</a></li>
                        <li><a href="http://www.yahoo.com.hk">?????????</a></li>

                    </ul>

                </li>
                <li class="text-center logo-li">
                    <a href="./" class="mobile-logo-a">
                        <img class="logo" src="./images/logo.png" alt=""></a>
                </li>
                <li class="right-nav-li">

                    <ul class="right-nav">
                        <li class="account-login-li">
                            <a href="./account-login.php" data-color="#ffb100">

                                <img class="right-nav-icon" src="./images/reg-icon.png" alt="">

                                <div class="right-nav-txt"> <span class="login-txt">??????/??????</span></div>

                            </a>

                            <ul class="submenu submenu-1">
                                <li class="tri"></li>
                                <li class="bg"></li>
                                <li><a href="javascript:void(0)"> ???????????????</a></li>
                                <li><a href="javascript:void(0)">????????????</a></li>
                                <li><a href="javascript:void(0)">????????????</a></li>
                                <li><a href="javascript:void(0)">????????????</a></li>
                                <li><a href="javascript:void(0)">????????????</a></li>
                                <li><a href="javascript:void(0)">??????</a></li>
                            </ul>
                        </li>
                        <li class="favorite-li favorite-li-mr">
                            <a href="./favorite.php" data-color="#00d5b3"><img class="right-nav-icon"
                                    src="./images/bm-icon.png" alt="">
                                <div class="right-nav-txt">???????????????</div>
                            </a>
                            <ul class="submenu  submenu-2">
                                <li class="tri"></li>
                                <li class="bg"></li>
                                <li><a href="./favorite.php">???????????????</a></li>
                                <li><a href="./favorite.php">???????????????</a></li>
                                <li><a href="./favorite.php">?????????????????????</a></li>
                            </ul>
                        </li>
                        <li><a href="./cart.php" class="cart-a" data-color="#0060b6">

                                <span class="position-relative reg-icon-span">
                                    <div class="cart-item-no">
                                        <span>2</span>

                                    </div>
                                    <img class="right-nav-icon" src="./images/cart-icon.png" alt="">
                                </span>
                                <div class="right-nav-txt">?????????</div>
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
                                                        ????????????A???/??????????????????????????????A???/??????????????????????????????A???/??????????????????</div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td class="ps-3">

                                                    <span>$59.9</span>
                                                    <span class="float-end">??????:99</span>
                                                </td>
                                            </tr>
                                        </table>
                                    </li>
                                    <?php
                                    
                                }?>


                                </ul>
                                <li class="total-amount">$2,540.99</li>
                                <li class="go-to-cart-btn-li">
                                    <a href="./cart.php">????????????</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>


    <div class="top-space d-block"></div>

    <div class="categories-div-wrapper pt-lg-0 pt-md-0 pt-sm-0 pt-0">


        <div class="categories-div">

            <div class="row g-0">
                <div class="flag-col col-lg-4 col-md-12 col-sm-12 col-12">
                    <ul>
                        <li><a href="./market.php" class="nation-a active" data-color="#c12932">
                                <div class="flag-div" style="background:url(./images/flag-1.png)">
                                    <img class="flag" src="./images/flag-1.png" alt="">
                                </div>
                                <div class="mt-1 market-txt">????????????</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>

                        </li>
                        <li><a href="./market.php" class="nation-a" data-color="#006a97">
                                <div class="flag-div" style="background:url(./images/flag-2.png)">
                                    <img class="flag" src="./images/flag-2.png" alt="">
                                </div>
                                <div class="mt-1 market-txt">????????????</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="./market.php" class="nation-a" data-color="#0060b7">
                                <div class="flag-div" style="background:url(./images/flag-3.png)">
                                    <img class="flag" src="./images/flag-3.png" alt="">

                                </div>
                                <div class="mt-1 market-txt">????????????</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="./market.php" class="nation-a" data-color="#ffab00">
                                <div class="flag-div" style="background:url(./images/flag-4.png)">
                                    <img class="flag" src="./images/flag-4.png" alt="">
                                </div>
                                <div class="mt-1 market-txt">????????????</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                    </ul>
                </div>
                <div class="flag-col col-lg-4 col-md-12 col-sm-12 col-12">
                    <ul>
                        <li><a href="./market.php" class="nation-a" data-color="#009300">
                                <div class="flag-div" style="background:url(./images/flag-5.png)">

                                    <img class="flag" src="./images/flag-5.png" alt="">
                                </div>
                                <div class="mt-1 market-txt">???????????????</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="./market.php" class="nation-a" data-color="#0060b7">
                                <div class="flag-div" style="background:url(./images/flag-6.png)">

                                    <img class="flag" src="./images/flag-6.png" alt="">
                                </div>
                                <div class="mt-1 market-txt">????????????</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="./market.php" class="nation-a" data-color="#009d2f">
                                <div class="flag-div" style="background:url(./images/flag-7.png)">

                                    <img class="flag" src="./images/flag-7.png" alt="">
                                </div>
                                <div class="mt-1 market-txt">????????????</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="./market.php" class="nation-a" data-color="#16597c">
                                <div class="flag-div" style="background:url(./images/flag-8.png)">

                                    <img class="flag" src="./images/flag-8.png" alt="">
                                </div>
                                <div class="mt-1 market-txt">????????????</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                    </ul>
                </div>
                <div class="flag-col col-lg-4 col-md-12 col-sm-12 col-12">
                    <ul>
                        <li><a href="./market.php" class="nation-a" data-color="#c9c7c7">
                                <div class="flag-div" style="background:url(./images/flag-9.png)">

                                    <img class="flag" src="./images/flag-9.png" alt="">
                                </div>
                                <div class="mt-1 market-txt">????????????</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="./market.php" class="nation-a" data-color="#c9c7c7">
                                <div class="flag-div" style="background:url(./images/flag-9.png)">

                                    <img class="flag" src="./images/flag-9.png" alt="">
                                </div>
                                <div class="mt-1 market-txt">????????????</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="./market.php" class="nation-a" data-color="#c9c7c7">
                                <div class="flag-div" style="background:url(./images/flag-9.png)">

                                    <img class="flag" src="./images/flag-9.png" alt="">
                                </div>
                                <div class="mt-1 market-txt">????????????</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="./market.php" class="nation-a" data-color="#c9c7c7">
                                <div class="flag-div" style="background:url(./images/flag-9.png)">

                                    <img class="flag" src="./images/flag-9.png" alt="">
                                </div>
                                <div class="mt-1 market-txt">??????</div>
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
                            <div class="flag-div" style="background:url(./images/flag-2.png)">

                                <img class="flag" src="./images/flag-2.png" alt="">
                            </div>


                        </li>
                        <li class="d-table-cell ps-2  nation-submenu-flag-title-li"> ????????????</li>
                    </ul>

                </h4>
                <div class="row">


                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 ">
                        <div class="row">

                            <div class="col-6">
                                <ul>
                                    <li><a href="javascript:void(0)"> ????????????</a></li>
                                    <li> <a href="javascript:void(0)">??????????????????</a></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul>
                                    <li> <a href="javascript:void(0)">??????????????????</a></li>
                                    <li><a href="javascript:void(0)">??????????????????</a></li>
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
                                    <li> <a href="javascript:void(0)">??????????????????</a></li>
                                    <li> <a href="javascript:void(0)">????????????</a></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul>
                                    <li> <a href="javascript:void(0)">????????????</a></li>
                                    <li> <a href="javascript:void(0)">?????????</a></li>
                                </ul>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 ">

                        <div class="row">
                            <div class="col-6">
                                <ul>
                                    <li> <a href="javascript:void(0)">????????????</a></li>
                                    <li> <a href="javascript:void(0)">???????????????</a></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul>
                                    <li> <a href="javascript:void(0)">????????????</a></li>
                                    <li> <a href="javascript:void(0)">???????????????</a></li>
                                </ul>
                            </div>

                        </div>


                    </div>

                </div>

                <h4 class="mt-3 mb-3">???????????????</h4>
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


    <div class="sticky categories-div-wrapper pt-3 ">


        <div class="categories-div">

            <div class="row g-0">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <ul>
                        <li><a href="./market.php" class="nation-a" data-color="#c12932">
                                <div class="flag-div" style="background:url(./images/flag-1.png)">

                                    <img class="flag" src="./images/flag-1.png" alt="">
                                </div>
                                <div class="mt-1 market-txt">????????????</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>

                        </li>
                        <li><a href="./market.php" class="nation-a" data-color="#006a97">
                                <div class="flag-div" style="background:url(./images/flag-2.png)">

                                    <img class="flag" src="./images/flag-2.png" alt="">
                                </div>
                                <div class="mt-1 market-txt">????????????</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="./market.php" class="nation-a" data-color="#0060b7">
                                <div class="flag-div" style="background:url(./images/flag-3.png)">

                                    <img class="flag" src="./images/flag-3.png" alt="">
                                </div>
                                <div class="mt-1 market-txt">????????????</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="./market.php" class="nation-a" data-color="#ffab00">
                                <div class="flag-div" style="background:url(./images/flag-4.png)">

                                    <img class="flag" src="./images/flag-4.png" alt="">
                                </div>
                                <div class="mt-1 market-txt">????????????</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <ul>
                        <li><a href="./market.php" class="nation-a" data-color="#009300">
                                <div class="flag-div" style="background:url(./images/flag-5.png)">

                                    <img class="flag" src="./images/flag-5.png" alt="">
                                </div>
                                <div class="mt-1 market-txt">???????????????</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="./market.php" class="nation-a" data-color="#0060b7">
                                <div class="flag-div" style="background:url(./images/flag-6.png)">

                                    <img class="flag" src="./images/flag-6.png" alt="">
                                </div>
                                <div class="mt-1 market-txt">????????????</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="./market.php" class="nation-a" data-color="#009d2f">
                                <div class="flag-div" style="background:url(./images/flag-7.png)">

                                    <img class="flag" src="./images/flag-7.png" alt="">
                                </div>
                                <div class="mt-1 market-txt">????????????</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="./market.php" class="nation-a" data-color="#16597c">
                                <div class="flag-div" style="background:url(./images/flag-8.png)">

                                    <img class="flag" src="./images/flag-8.png" alt="">
                                </div>
                                <div class="mt-1 market-txt">????????????</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <ul>
                        <li><a href="./market.php" class="nation-a" data-color="#c9c7c7">
                                <div class="flag-div" style="background:url(./images/flag-9.png)">

                                    <img class="flag" src="./images/flag-9.png" alt="">
                                </div>
                                <div class="mt-1 market-txt">????????????</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="./market.php" class="nation-a" data-color="#c9c7c7">
                                <div class="flag-div" style="background:url(./images/flag-9.png)">

                                    <img class="flag" src="./images/flag-9.png" alt="">
                                </div>
                                <div class="mt-1 market-txt">????????????</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="./market.php" class="nation-a" data-color="#c9c7c7">
                                <div class="flag-div" style="background:url(./images/flag-9.png)">

                                    <img class="flag" src="./images/flag-9.png" alt="">
                                </div>
                                <div class="mt-1 market-txt">????????????</div>
                            </a>
                            <div class="nation-tri">
                            </div>
                            <div class="nation-tri-bg"></div>
                        </li>
                        <li><a href="./market.php" class="nation-a" data-color="#c9c7c7">
                                <div class="flag-div" style="background:url(./images/flag-9.png)">

                                    <img class="flag" src="./images/flag-9.png" alt="">
                                </div>
                                <div class="mt-1 market-txt">??????</div>
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
                            <div class="flag-div" style="background:url(./images/flag-2.png)">

                                <img class="flag" src="./images/flag-2.png" alt="">
                            </div>
                        </li>
                        <li class="d-table-cell ps-2  nation-submenu-flag-title-li"> ????????????</li>
                    </ul>

                </h4>
                <div class="row">


                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 ">
                        <div class="row">

                            <div class="col-6">
                                <ul>
                                    <li><a href="javascript:void(0)"> ????????????</a></li>
                                    <li> <a href="javascript:void(0)">??????????????????</a></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul>
                                    <li> <a href="javascript:void(0)">??????????????????</a></li>
                                    <li><a href="javascript:void(0)">??????????????????</a></li>
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
                                    <li> <a href="javascript:void(0)">??????????????????</a></li>
                                    <li> <a href="javascript:void(0)">????????????</a></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul>
                                    <li> <a href="javascript:void(0)">????????????</a></li>
                                    <li> <a href="javascript:void(0)">?????????</a></li>
                                </ul>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 ">

                        <div class="row">
                            <div class="col-6">
                                <ul>
                                    <li> <a href="javascript:void(0)">????????????</a></li>
                                    <li> <a href="javascript:void(0)">???????????????</a></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul>
                                    <li> <a href="javascript:void(0)">????????????</a></li>
                                    <li> <a href="javascript:void(0)">???????????????</a></li>
                                </ul>
                            </div>

                        </div>


                    </div>

                </div>

                <h4 class="mt-3 mb-3">???????????????</h4>
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