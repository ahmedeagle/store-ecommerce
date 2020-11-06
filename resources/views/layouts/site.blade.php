<!doctype html>
<html lang="en">
<head>


    <meta charset="utf-8">


    <meta http-equiv="x-ua-compatible" content="ie=edge">


    <title>Prestashop_Savemart</title>
    <meta name="description" content="Shop powered by PrestaShop">
    <meta name="keywords" content="">


    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=yes">


    <link rel="icon" type="image/vnd.microsoft.icon" href="{{asset('assets/front/img/favicon.ico')}}?1531456858">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/front/img/favicon.ico')}}?1531456858">


    <link href="{{asset('assets/front/css/css.css')}}?family=Roboto:300,400,500,600,700,900" rel="stylesheet">
    <link href="{{asset('assets/front/css/css-1.css')}}?family=Oswald:300,400,500,600,700,900" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('assets/front/themes/vinova_savemart/assets/cache/theme-78026624.css')}}" type="text/css" media="all">


    <script type="text/javascript">
        var added_to_wishlist = "The product was successfully added to your wishlist.";
        var isLogged = false;
        var isLoggedWishlist = false;
        var loggin_required = "You must be logged in to manage your wishlist.";
        var prestashop = {
            "cart": {
                "products": [],
                "totals": {
                    "total": {"type": "total", "label": "Total", "amount": 0, "value": "\u00a30.00"},
                    "total_including_tax": {
                        "type": "total",
                        "label": "Total (tax incl.)",
                        "amount": 0,
                        "value": "\u00a30.00"
                    },
                    "total_excluding_tax": {
                        "type": "total",
                        "label": "Total (tax excl.)",
                        "amount": 0,
                        "value": "\u00a30.00"
                    }
                },
                "subtotals": {
                    "products": {"type": "products", "label": "Subtotal", "amount": 0, "value": "\u00a30.00"},
                    "discounts": null,
                    "shipping": {"type": "shipping", "label": "Shipping", "amount": 0, "value": "Free"},
                    "tax": null
                },
                "products_count": 0,
                "summary_string": "0 items",
                "vouchers": {"allowed": 0, "added": []},
                "discounts": [],
                "minimalPurchase": 0,
                "minimalPurchaseRequired": ""
            },
            "currency": {"name": "British Pound", "iso_code": "GBP", "iso_code_num": "826", "sign": "\u00a3"},
            "customer": {
                "lastname": null,
                "firstname": null,
                "email": null,
                "birthday": null,
                "newsletter": null,
                "newsletter_date_add": null,
                "optin": null,
                "website": null,
                "company": null,
                "siret": null,
                "ape": null,
                "is_logged": false,
                "gender": {"type": null, "name": null},
                "addresses": []
            },
            "language": {
                "name": "English (English)",
                "iso_code": "en",
                "locale": "en-US",
                "language_code": "en-us",
                "is_rtl": "0",
                "date_format_lite": "m\/d\/Y",
                "date_format_full": "m\/d\/Y H:i:s",
                "id": 1
            },
            "page": {
                "title": "",
                "canonical": null,
                "meta": {
                    "title": "Prestashop_Savemart",
                    "description": "Shop powered by PrestaShop",
                    "keywords": "",
                    "robots": "index"
                },
                "page_name": "index",
                "body_classes": {
                    "lang-en": true,
                    "lang-rtl": false,
                    "country-GB": true,
                    "currency-GBP": true,
                    "layout-full-width": true,
                    "page-index": true,
                    "tax-display-enabled": true
                },
                "admin_notifications": []
            },
            "shop": {
                "name": "Prestashop_Savemart",
                "logo": "\/savemart\/img\/prestashopsavemart-logo-1531456858.jpg",
                "stores_icon": "\/savemart\/img\/logo_stores.png",
                "favicon": "\/savemart\/img\/favicon.ico"
            },
            "urls": {
                "base_url": "http:\/\/demo.bestprestashoptheme.com\/savemart\/",
                "current_url": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/?home=home_3",
                "shop_domain_url": "http:\/\/demo.bestprestashoptheme.com",
                "img_ps_url": "http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/",
                "img_cat_url": "http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/c\/",
                "img_lang_url": "http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/l\/",
                "img_prod_url": "http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/p\/",
                "img_manu_url": "http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/m\/",
                "img_sup_url": "http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/su\/",
                "img_ship_url": "http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/s\/",
                "img_store_url": "http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/st\/",
                "img_col_url": "http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/co\/",
                "img_url": "http:\/\/demo.bestprestashoptheme.com\/savemart\/themes\/vinova_savemart\/assets\/img\/",
                "css_url": "http:\/\/demo.bestprestashoptheme.com\/savemart\/themes\/vinova_savemart\/assets\/css\/",
                "js_url": "http:\/\/demo.bestprestashoptheme.com\/savemart\/themes\/vinova_savemart\/assets\/js\/",
                "pic_url": "http:\/\/demo.bestprestashoptheme.com\/savemart\/upload\/",
                "pages": {
                    "address": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/address",
                    "addresses": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/addresses",
                    "authentication": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/login",
                    "cart": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/cart",
                    "category": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/index.php?controller=category",
                    "cms": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/index.php?controller=cms",
                    "contact": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/contact-us",
                    "discount": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/discount",
                    "guest_tracking": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/guest-tracking",
                    "history": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/order-history",
                    "identity": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/identity",
                    "index": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/",
                    "my_account": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/my-account",
                    "order_confirmation": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/order-confirmation",
                    "order_detail": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/index.php?controller=order-detail",
                    "order_follow": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/order-follow",
                    "order": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/order",
                    "order_return": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/index.php?controller=order-return",
                    "order_slip": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/credit-slip",
                    "pagenotfound": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/page-not-found",
                    "password": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/password-recovery",
                    "pdf_invoice": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/index.php?controller=pdf-invoice",
                    "pdf_order_return": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/index.php?controller=pdf-order-return",
                    "pdf_order_slip": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/index.php?controller=pdf-order-slip",
                    "prices_drop": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/prices-drop",
                    "product": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/index.php?controller=product",
                    "search": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/search",
                    "sitemap": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/sitemap",
                    "stores": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/stores",
                    "supplier": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/supplier",
                    "register": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/login?create_account=1",
                    "order_login": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/order?login=1"
                },
                "alternative_langs": {
                    "en-us": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/?home=home_3",
                    "fr-fr": "http:\/\/demo.bestprestashoptheme.com\/savemart\/fr\/?home=home_3",
                    "es-es": "http:\/\/demo.bestprestashoptheme.com\/savemart\/es\/?home=home_3",
                    "it-it": "http:\/\/demo.bestprestashoptheme.com\/savemart\/it\/?home=home_3",
                    "pl-pl": "http:\/\/demo.bestprestashoptheme.com\/savemart\/pl\/?home=home_3",
                    "ar-sa": "http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/?home=home_3"
                },
                "theme_assets": "\/savemart\/themes\/vinova_savemart\/assets\/",
                "actions": {"logout": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/?mylogout="},
                "no_picture_image": {
                    "bySize": {
                        "cart_default": {
                            "url": "http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/p\/en-default-cart_default.jpg",
                            "width": 125,
                            "height": 125
                        },
                        "small_default": {
                            "url": "http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/p\/en-default-small_default.jpg",
                            "width": 150,
                            "height": 150
                        },
                        "medium_default": {
                            "url": "http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/p\/en-default-medium_default.jpg",
                            "width": 210,
                            "height": 210
                        },
                        "home_default": {
                            "url": "http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/p\/en-default-home_default.jpg",
                            "width": 600,
                            "height": 600
                        },
                        "large_default": {
                            "url": "http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/p\/en-default-large_default.jpg",
                            "width": 600,
                            "height": 600
                        }
                    },
                    "small": {
                        "url": "http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/p\/en-default-cart_default.jpg",
                        "width": 125,
                        "height": 125
                    },
                    "medium": {
                        "url": "http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/p\/en-default-medium_default.jpg",
                        "width": 210,
                        "height": 210
                    },
                    "large": {
                        "url": "http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/p\/en-default-large_default.jpg",
                        "width": 600,
                        "height": 600
                    },
                    "legend": ""
                }
            },
            "configuration": {
                "display_taxes_label": true,
                "display_prices_tax_incl": true,
                "is_catalog": false,
                "show_prices": true,
                "opt_in": {"partner": true},
                "quantity_discount": {"type": "discount", "label": "Discount"},
                "voucher_enabled": 0,
                "return_enabled": 0
            },
            "field_required": [],
            "breadcrumb": {
                "links": [{"title": "Home", "url": "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/"}],
                "count": 1
            },
            "link": {"protocol_link": "http:\/\/", "protocol_content": "http:\/\/"},
            "time": 1604517512,
            "static_token": "28add935523ef131c8432825597b9928",
            "token": "cad5fe8236d849a3b4023c4e5ca6a313"
        };
        var psr_icon_color = "#F19D76";
        var search_url = "http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/search";
    </script>


    <script type="text/javascript">
        var baseDir = "/savemart/";
        var static_token = "28add935523ef131c8432825597b9928";
    </script>


    <style type="text/css">
        #main-site {
            background-color: #ffffff;
        }

        @media (min-width: 1200px) {
            .container {
                width: 1200px;
            }

            #header .container {
                width: 1200px;
            }

            .footer .container {
                width: 1200px;
            }

            #index .container {
                width: 1200px;
            }
        }

        #popup-subscribe .modal-dialog .modal-content {
            background-image: url(../modules/novthemeconfig/images/newsletter_bg-1.png);
        }
    </style>

</head>
<body id="index" class="lang-en country-gb currency-gbp layout-full-width page-index tax-display-enabled">


<main id="main-site" class="displayhomenovthree">


    <header id="header" class="header-3 sticky-menu">

        @include('front.includes.header-mobile')
        @include('front.includes.header-top')
        @include('front.includes.header-center')
        @include('front.includes.header-bottom')
    </header>

    <div id="header-sticky">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="d-flex align-items-center col-xl-3 col-md-3">
                    <div class="contentstickynew_verticalmenu"></div>
                    <div class="contentstickynew_logo"></div>
                </div>
                <div class="contentstickynew_search col-xl-7 col-md-6"></div>
                <div class="contentstickynew_group d-flex justify-content-end col-xl-2 col-md-3"></div>
            </div>
        </div>
    </div>


    <aside id="notifications">
        <div class="container">


        </div>
    </aside>

    <div id="displayTop" class="displaytopthree">
        <div class="container">
            <div class="row">
                <div class="nov-row  col-lg-12 col-xs-12">
                    <div class="nov-row-wrap row">
                        <div class="nov-html col-xl-3 col-lg-3 col-md-3">
                            <div class="block">
                                <div class="block_content">

                                </div>
                            </div>
                        </div>
                        <div id="nov-slider" class="slider-wrapper theme-default col-xl-9 col-lg-9 col-md-9 col-md-12"
                             data-effect="random" data-slices="15" data-animspeed="500" data-pausetime="10000"
                             data-startslide="0" data-directionnav="false" data-controlnav="true"
                             data-controlnavthumbs="false" data-pauseonhover="true" data-manualadvance="false"
                             data-randomstart="false">
                            <div class="nov_preload">
                                <div class="process-loading active">
                                    <div class="loader">
                                        <div class="dot"></div>
                                        <div class="dot"></div>
                                        <div class="dot"></div>
                                        <div class="dot"></div>
                                        <div class="dot"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="nivoSlider">
                                <a href="#">
                                    <img src="modules/novnivoslider/images/266cf50ba4d1d91fa5f5ded20bb66ea38de3b350_1.jpg"
                                         alt="" title="#htmlcaption_42">
                                </a>
                                <a href="#">
                                    <img src="modules/novnivoslider/images/62896aebffd6fdce749d957fc76bd83d734fa338_2.jpg"
                                         alt="" title="#htmlcaption_43">
                                </a>
                                <a href="#">
                                    <img src="modules/novnivoslider/images/195d62088850e3489886855b4239edcc4fb1868f_3.jpg"
                                         alt="" title="#htmlcaption_57">
                                </a>
                            </div>
                            <div id="htmlcaption_42" class="nivo-html-caption">
                                <div class="nov-slider-ct">
                                    <div class="nov-center slider-none">
                                        <div class="nov-title effect-0">
                                            Slide Home 3 01
                                        </div>
                                        <div class="nov-description effect-0">
                                            <p>Slide Home 3 01</p>
                                        </div>
                                        <div class="nov-html effect-0">
                                            <p>Slide Home 3 01</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="htmlcaption_43" class="nivo-html-caption">
                                <div class="nov-slider-ct">
                                    <div class="nov-center slider-none">
                                        <div class="nov-title effect-0">
                                            Slide Home 3 02
                                        </div>
                                        <div class="nov-description effect-0">
                                            <p>Slide Home 3 02</p>
                                        </div>
                                        <div class="nov-html effect-0">
                                            <p>Slide Home 3 02</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="htmlcaption_57" class="nivo-html-caption">
                                <div class="nov-slider-ct">
                                    <div class="nov-center slider-none">
                                        <div class="nov-title effect-0">
                                            Slider Home 3 03
                                        </div>
                                        <div class="nov-description effect-0">
                                            <p>Slider Home 3 03</p>
                                        </div>
                                        <div class="nov-html effect-0">
                                            <p>Slider Home 3 03</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="wrapper-site">
        <div id="content-wrapper" class="full-width">
            @yield('content')
        </div>
    </div>

    @include('front.includes.footer')
    <div class="canvas-overlay"></div>
    <div id="back-top">
  <span>
    <i class="fa fa-long-arrow-up"></i>  </span>
    </div>
</main>

<div id="mobile_top_menu_wrapper" class="hidden-md-up">
    <div class="content">
        <div id="_mobile_verticalmenu"></div>
    </div>
</div>


<div id="mobile-pagemenu" class="mobile-boxpage d-flex hidden-md-up">
    <div class="content-boxpage col">
        <div class="box-header d-flex justify-content-between align-items-center">
            <div class="title-box">Menu</div>
            <div class="close-box">Close</div>
        </div>
        <div class="box-content">
            <div id="_mobile_top_menu" class="js-top-menu"></div>
        </div>
    </div>
</div>
<div id="mobile-blockcart" class="mobile-boxpage d-flex hidden-md-up">
    <div class="content-boxpage col">
        <div class="box-header d-flex justify-content-between align-items-center">
            <div class="title-box">Cart</div>
            <div class="close-box">Close</div>
        </div>
        <div id="_mobile_cart" class="box-content"></div>
    </div>
</div>
<div id="mobile-pageaccount" class="mobile-boxpage d-flex hidden-md-up" data-titlebox-parent="Account">
    <div class="content-boxpage col">
        <div class="box-header d-flex justify-content-between align-items-center">
            <div class="back-box">Back</div>
            <div class="title-box">Account</div>
            <div class="close-box">Close</div>
        </div>
        <div class="box-content d-flex justify-content-center align-items-center text-center">
            <div>
                <div id="_mobile_account_list">
                    <div class="account-list-content">
                        <div>
                            <a class="login" href="login-1.html" rel="nofollow" title="Log in to your customer account"><i
                                    class="fa fa-sign-in"></i>Sign in</a>
                        </div>
                        <div>
                            <a class="register" href="login-1.html" rel="nofollow" title="Register Account"><i
                                    class="fa fa-user"></i>Register Account</a>
                        </div>
                        <div>
                            <a class="check-out" href="cart.html" rel="nofollow" title="Checkout"><i
                                    class="material-icons">check_circle</i>Checkout</a>
                        </div>
                        <div class="link_wishlist">
                            <a href="login-2.html" title="My Wishlists">
                                <i class="fa fa-heart"></i>My Wishlists
                            </a>
                        </div>
                    </div>
                </div>
                <div class="links-currency" data-target="#box-currency" data-titlebox="Currency"><span>Currency</span><i
                        class="zmdi zmdi-arrow-right"></i></div>
                <div class="links-language" data-target="#box-language" data-titlebox="Language"><span>Language</span><i
                        class="zmdi zmdi-arrow-right"></i></div>
            </div>
        </div>
        <div id="box-currency" class="box-content d-flex">
            <div class="w-100">
                <div class="item-currency current">
                    <a title="British Pound" rel="nofollow"
                       href="index-1.htm?home=home_3&amp;SubmitCurrency=1&amp;id_currency=1">British Pound: GBP</a>
                </div>
                <div class="item-currency">
                    <a title="US Dollar" rel="nofollow"
                       href="index-2.htm?home=home_3&amp;SubmitCurrency=1&amp;id_currency=2">US Dollar: USD</a>
                </div>
            </div>
        </div>

        <div id="box-language" class="box-content d-flex">
            <div class="w-100">
                <div class="item-language current">
                    <a href="index.htm?home=home_3" class="d-flex align-items-center"><img class="img-fluid mr-2"
                                                                                           src="../img/l/1.jpg"
                                                                                           alt="English (English)"
                                                                                           width="16" height="11"><span>English</span></a>
                </div>
                <div class="item-language">
                    <a href="http://demo.bestprestashoptheme.com/savemart/fr/?home=home_3"
                       class="d-flex align-items-center"><img class="img-fluid mr-2" src="../img/l/2.jpg"
                                                              alt="Français (French)" width="16" height="11"><span>Français</span></a>
                </div>
                <div class="item-language">
                    <a href="http://demo.bestprestashoptheme.com/savemart/es/?home=home_3"
                       class="d-flex align-items-center"><img class="img-fluid mr-2" src="../img/l/3.jpg"
                                                              alt="Español (Spanish)" width="16" height="11"><span>Español</span></a>
                </div>
                <div class="item-language">
                    <a href="http://demo.bestprestashoptheme.com/savemart/it/?home=home_3"
                       class="d-flex align-items-center"><img class="img-fluid mr-2" src="../img/l/4.jpg"
                                                              alt="Italiano (Italian)" width="16" height="11"><span>Italiano</span></a>
                </div>
                <div class="item-language">
                    <a href="http://demo.bestprestashoptheme.com/savemart/pl/?home=home_3"
                       class="d-flex align-items-center"><img class="img-fluid mr-2" src="../img/l/5.jpg"
                                                              alt="Polski (Polish)" width="16"
                                                              height="11"><span>Polski</span></a>
                </div>
                <div class="item-language">
                    <a href="http://demo.bestprestashoptheme.com/savemart/ar/?home=home_3"
                       class="d-flex align-items-center"><img class="img-fluid mr-2" src="../img/l/6.jpg"
                                                              alt="اللغة العربية (Arabic)" width="16" height="11"><span>اللغة العربية</span></a>
                </div>
            </div>
        </div>

    </div>
</div>


<div id="stickymenu_bottom_mobile" class="d-flex align-items-center justify-content-center hidden-md-up text-center">
    <div class="stickymenu-item"><a href="http://demo.bestprestashoptheme.com/savemart/"><i
                class="zmdi zmdi-home"></i><span>Home</span></a></div>
    <div class="stickymenu-item"><a href="#" class="js-btn-search"><i
                class="zmdi zmdi-search"></i><span>Search</span></a></div>
    <div class="stickymenu-item">
        <div id="_mobile_cart_bottom" class="nov-toggle-page" data-target="#mobile-blockcart"></div>
    </div>
    <div class="stickymenu-item"><a href="login-2.html"><i class="zmdi zmdi-favorite-outline"></i><span>Wishlist</span></a>
    </div>
    <div class="stickymenu-item"><a href="#" class="nov-toggle-page" data-target="#mobile-pageaccount"><i
                class="zmdi zmdi-account-o"></i><span>Account</span></a></div>
</div>


<script type="text/javascript" src="{{asset('assets/front/themes/vinova_savemart/assets/cache/bottom-3c96ed23.js')}}"></script>


</body>
</html>
