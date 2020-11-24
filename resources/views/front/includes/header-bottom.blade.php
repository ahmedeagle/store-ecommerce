<div class="header-bottom hidden-sm-down">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="contentsticky_verticalmenu verticalmenu-main col-lg-3 col-md-1 d-flex"
                 data-textshowmore="Show More" data-textless="Hide" data-desktop_item="4">
                <div class="toggle-nav d-flex align-items-center justify-content-start">
                    <span class="btnov-lines"></span>
                    <span>Shop By Categories</span>
                </div>
                <div class="verticalmenu-content has-showmore show">
                    <div id="_desktop_verticalmenu" class="nov-verticalmenu block" data-count_showmore="6">
                        <div class="box-content block_content">
                            <div id="verticalmenu" class="verticalmenu" role="navigation">
                                <ul class="menu level1">

                                    @isset($categories)
                                        @foreach($categories as $category)
                                            <li class="item  parent"><a href="{{route('category',$category -> slug )}}" title="Laptops &amp; Accessories"><i
                                                        class="hasicon nov-icon"
                                                        style="background:url('http://demo.bestprestashoptheme.com/savemart/themes/vinova_savemart/assets/img/modules/novverticalmenu/icon/laptop.png') no-repeat scroll center center;">

                                                    </i>{{$category -> name}}</a>

                                                @isset($category -> childrens)

                                                    <span
                                                        class="show-sub fa-active-sub"></span>
                                                    <div class="dropdown-menu" style="width:222px">
                                                        <ul>
                                                            @foreach($category -> childrens as $childern)
                                                                <li class="item ">
                                                                <li class="item  parent">
                                                                    <a href="{{route('category',$childern -> slug )}}"
                                                                       title="Laptop Thinkpad">{{$childern -> name}}</a>
                                                                    @isset($childern -> childrens )
                                                                        <span class="show-sub fa-active-sub"></span>
                                                                        <div class="dropdown-menu">
                                                                            <ul>
                                                                                @foreach($childern -> childrens  as $_childern)
                                                                                    <li class="item ">
                                                                                        <a href="{{route('category',$_childern -> slug )}}"
                                                                                           title="Aliquam lobortis">
                                                                                            {{$_childern -> name}}
                                                                                        </a>
                                                                                    </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                    @endisset
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endisset
                                            </li>
                                        @endforeach
                                    @endisset


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-11 header-menu d-flex align-items-center justify-content-start">
                <div class="header-menu-search d-flex justify-content-between w-100 align-items-center">

                    <div id="_desktop_top_menu">
                        <nav id="nov-megamenu" class="clearfix">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div id="megamenu" class="nov-megamenu clearfix">
                                <ul class="menu level1">
                                    <li class="item home-page has-sub"><span class="opener"></span><a
                                            href="index-3.htm?home" title="Home"><i class="zmdi zmdi-home"></i>Home</a>
                                        <div class="dropdown-menu" style="width:200px">
                                            <ul class="">
                                                <li class="item "><a href="index-4.htm?home=home_1" title="Homepage 1">Homepage
                                                        1</a></li>
                                                <li class="item "><a href="index-5.htm?home=home_2" title="Homepage 2">Homepage
                                                        2</a></li>
                                                <li class="item "><a href="index.htm?home=home_3" title="Homepage 3">Homepage
                                                        3</a></li>
                                                <li class="item "><a href="index-6.htm?home=home_4" title="Homepage 4">Homepage
                                                        4</a></li>
                                                <li class="item "><a href="index-7.htm?home=home_5" title="Homepage 5">Homepage
                                                        5</a></li>
                                                <li class="item "><a href="index-8.htm?home=home_6" title="Homepage 6">Homepage
                                                        6</a></li>
                                                <li class="item "><a href="index-9.htm?home=home_7" title="Homepage 7">Homepage
                                                        7</a></li>
                                                <li class="item "><a href="index-10.htm?home=home_8" title="Homepage 8">Homepage
                                                        8</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="item  has-sub"><span class="opener"></span><a href="#" title="Blog"><i
                                                class="zmdi zmdi-library"></i>Blog</a>
                                        <div class="dropdown-menu" style="width:270px">
                                            <ul class="">
                                                <li class="item "><a
                                                        href="index.php.html?fc=module&amp;module=smartblog&amp;id_post=14&amp;controller=details"
                                                        title="Blog detail">Blog detail</a></li>
                                                <li class="item "><a
                                                        href="/savemart/blog.html?index.php&cateblog_layout=layout-left-column&cateblog_type=list&cateblog_columns=1"
                                                        title="Category Blog ( Left column)">Category Blog ( Left
                                                        column)</a></li>
                                                <li class="item "><a
                                                        href="/savemart/blog.html?index.php&cateblog_layout=layout-right-column&cateblog_type=list&cateblog_columns=1"
                                                        title="Category Blog ( Right column)">Category Blog ( Right
                                                        column)</a></li>
                                                <li class="item "><a
                                                        href="/savemart/blog.html?index.php&cateblog_layout=layout-one-column&cateblog_type=grid&cateblog_columns=1"
                                                        title="Category Blog ( One column)">Category Blog ( One
                                                        column)</a></li>
                                                <li class="item "><a
                                                        href="/savemart/blog.html?index.php&cateblog_layout=layout-one-column&cateblog_type=grid&cateblog_columns=3"
                                                        title="Category Blog ( Grid  column )">Category Blog ( Grid
                                                        column )</a></li>
                                                <li class="item "><a
                                                        href="/savemart/blog.html?index.php&cateblog_type=list&cateblog_columns=1&cateblog_layout=layout-one-column"
                                                        title="Category Blog List">Category Blog List</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="item menu-page group"><span class="opener"></span><a
                                            href="sitemap.html?controller=sitemap" title="Pages"><i
                                                class="zmdi zmdi-assignment"></i>Pages</a>
                                        <div class="dropdown-menu">
                                            <ul class="">
                                                <li class="item container group">
                                                    <div class="dropdown-menu">
                                                        <ul class="">
                                                            <li class="item col-md-3 mw-20 html"><span
                                                                    class="menu-title">Category Style</span>
                                                                <div class="menu-content">
                                                                    <ul class="col">
                                                                        <li><a href="3-computer-networking.html">Category
                                                                                Layout Grid</a></li>
                                                                        <li><a href="#">Category Layout List</a></li>
                                                                        <li><a href="#">Category Left Sidebar</a></li>
                                                                        <li><a href="#">Category Right Sidebar</a></li>
                                                                        <li><a href="#">Category No Sidebar</a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="item col-md-3 mw-20 html"><span
                                                                    class="menu-title">Product Detail Style</span>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="/savemart/index.php?id_product=1&id_product_attribute=1&rewrite=faded-short-sleeves-tshirt&controller=product&id_lang=1&product_detail=product_detail_style_1">Left
                                                                                Column</a></li>
                                                                        <li>
                                                                            <a href="/savemart/index.php?id_product=1&id_product_attribute=1&rewrite=faded-short-sleeves-tshirt&controller=product&id_lang=1&product_detail=product_detail_style_2">Right
                                                                                Column</a></li>
                                                                        <li>
                                                                            <a href="/savemart/index.php?id_product=1&id_product_attribute=1&rewrite=faded-short-sleeves-tshirt&controller=product&id_lang=1&product_detail=product_detail_style_3">Left
                                                                                Thumbnail</a></li>
                                                                        <li>
                                                                            <a href="/savemart/index.php?id_product=1&id_product_attribute=1&rewrite=faded-short-sleeves-tshirt&controller=product&id_lang=1&product_detail=product_detail_style_4">Right
                                                                                Thumbnail</a></li>
                                                                        <li>
                                                                            <a href="/savemart/index.php?id_product=1&id_product_attribute=1&rewrite=faded-short-sleeves-tshirt&controller=product&id_lang=1&product_detail=product_detail_style_5">Outside
                                                                                Thumbnail</a></li>
                                                                        <li>
                                                                            <a href="/savemart/index.php?id_product=1&id_product_attribute=1&rewrite=faded-short-sleeves-tshirt&controller=product&id_lang=1&product_detail=product_detail_style_7">Sticky
                                                                                Image Thumbnail 1</a></li>
                                                                        <li>
                                                                            <a href="/savemart/index.php?id_product=1&id_product_attribute=1&rewrite=faded-short-sleeves-tshirt&controller=product&id_lang=1&product_detail=product_detail_style_6">Sticky
                                                                                Image Thumbnail 2</a></li>
                                                                        <li>
                                                                            <a href="/savemart/index.php?id_product=1&id_product_attribute=2&rewrite=faded-short-sleeves-tshirt&controller=product&id_lang=1&product_detail=product_detail_style_8">Detail
                                                                                Without Sidebar</a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="item col-md-3 mw-20 html"><span
                                                                    class="menu-title">Bonus Page</span>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="/savemart/en/index.php?controller=page-not-found">404
                                                                                Page</a></li>
                                                                        <li>
                                                                            <a href="/savemart/index.php?controller=contact">Contact
                                                                                Us Page</a></li>
                                                                        <li>
                                                                            <a href="/savemart/index.php?id_cms=4&controller=cms">About
                                                                                Us Page</a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="item col-md-3 mw-40 html">
                                                                <div class="menu-content">
                                                                    <div class="menu-banner-3 text-center"><a
                                                                            href="#"><img class="img-fluid"
                                                                                          src="img/mega-menu-3.jpg"
                                                                                          alt="mega-menu-3.jpg"></a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="item  group"><span class="opener"></span><a href="2-home.html"
                                                                                           title="Categories"><i
                                                class="zmdi zmdi-group"></i>Categories</a>
                                        <div class="dropdown-menu">
                                            <ul class="">
                                                <li class="item container group">
                                                    <div class="dropdown-menu">
                                                        <ul class="">
                                                            <li class="item col-lg-3 col-md-3 html"><span
                                                                    class="menu-title">Laptop</span>
                                                                <div class="menu-content">
                                                                    <ul class="col">
                                                                        <li><a href="#" title="EliteBook">EliteBook</a>
                                                                        </li>
                                                                        <li><a href="#" title="Lenovo Yoga">Lenovo
                                                                                Yoga</a></li>
                                                                        <li><a href="#" title="Probook">Probook</a></li>
                                                                        <li><a href="#" title="Dell Precision">Dell
                                                                                Precision</a></li>
                                                                        <li><a href="#" title="Dell Alienware">Dell
                                                                                Alienware</a></li>
                                                                        <li><a href="#" title="HP Pavilion">HP
                                                                                Pavilion</a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="item col-lg-3 col-md-3 html"><span
                                                                    class="menu-title">Electronics</span>
                                                                <div class="menu-content">
                                                                    <ul class="col">
                                                                        <li><a href="#">Fridge</a></li>
                                                                        <li><a href="#">Air conditioning</a></li>
                                                                        <li><a href="#">Electric Fan</a></li>
                                                                        <li><a href="#">Spray Mist Fan</a></li>
                                                                        <li><a href="#">Vacuum Cleanr</a></li>
                                                                        <li><a href="#">Washing Machine</a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="item col-lg-3 col-md-3 html"><span
                                                                    class="menu-title">Audio</span>
                                                                <div class="menu-content">
                                                                    <ul class="col">
                                                                        <li><a href="#" title="Lansing Products">Lansing
                                                                                Products</a></li>
                                                                        <li><a href="#" title="UFi Products">UFi
                                                                                Products</a></li>
                                                                        <li><a href="#" title="Edifier Products">Edifier
                                                                                Products</a></li>
                                                                        <li><a href="#" title="Sarotech Products">Sarotech
                                                                                Products</a></li>
                                                                        <li><a href="#" title="Plantronics Products">Plantronics
                                                                                Products</a></li>
                                                                        <li><a href="#" title="Sennheiser Products">Sennheiser
                                                                                Products</a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="item col-lg-3 col-md-3 html"><span
                                                                    class="menu-title">Smartphone</span>
                                                                <div class="menu-content">
                                                                    <ul class="col">
                                                                        <li><a href="#" title="Samsung ">Samsung </a>
                                                                        </li>
                                                                        <li><a href="#" title="OPPO ">OPPO </a></li>
                                                                        <li><a href="#" title="Sony">Sony</a></li>
                                                                        <li><a href="#" title="Xiaomi ">Xiaomi </a></li>
                                                                        <li><a href="#" title="Huawei ">Huawei </a></li>
                                                                        <li><a href="#" title="Nokia ">Nokia </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="item container group">
                                                    <div class="dropdown-menu">
                                                        <ul class="">
                                                            <li class="item  html">
                                                                <div class="menu-content">
                                                                    <div class="row">
                                                                        <div
                                                                            class="col-12 col-lg-4 col-md-4 mt-xs-10 text-center">
                                                                            <a href="#"><img class="img-fluid"
                                                                                             src="img/banner-mega-1.jpg"
                                                                                             alt="menu-banner-1"></a>
                                                                        </div>
                                                                        <div
                                                                            class="col-4 col-lg-4 col-md-4 mt-xs-10 text-center">
                                                                            <a href="#"><img class="img-fluid"
                                                                                             src="img/banner-mega-2.jpg"
                                                                                             alt="menu-banner-2"></a>
                                                                        </div>
                                                                        <div
                                                                            class="col-4 col-lg-4 col-md-4 mt-xs-10 text-center">
                                                                            <a href="#"><img class="img-fluid"
                                                                                             src="img/banner-mega-3.jpg"
                                                                                             alt="menu-banner-3"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <div class="advencesearch_header">
                        <span class="toggle-search hidden-lg-up"><i class="zmdi zmdi-search"></i></span>
                        <div id="_desktop_search" class="contentsticky_search">
                            <!-- block seach mobile -->
                            <!-- Block search module TOP -->
                            <div id="desktop_search_content" data-id_lang="1" data-ajaxsearch="1"
                                 data-novadvancedsearch_type="top" data-instantsearch="" data-search_ssl=""
                                 data-link_search_ssl="http://demo.bestprestashoptheme.com/savemart/en/search"
                                 data-action="http://demo.bestprestashoptheme.com/savemart/en/module/novadvancedsearch/result">
                                <form method="get"
                                      action="http://demo.bestprestashoptheme.com/savemart/en/module/novadvancedsearch/result"
                                      id="searchbox" class="form-novadvancedsearch">
                                    <input type="hidden" name="fc" value="module">
                                    <input type="hidden" name="module" value="novadvancedsearch">
                                    <input type="hidden" name="controller" value="result">
                                    <input type="hidden" name="orderby" value="position">
                                    <input type="hidden" name="orderway" value="desc">
                                    <input type="hidden" name="id_category" class="id_category" value="0">
                                    <div class="input-group">
                                        <input type="text" id="search_query_top"
                                               class="search_query ui-autocomplete-input form-control"
                                               name="search_query" value="" placeholder="Search">

                                        <div class="input-group-btn nov_category_tree hidden-sm-down">
                                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                                                    aria-haspopup="true" value="" aria-expanded="false">
                                                CATEGORIES
                                            </button>
                                            <ul class="dropdown-menu list-unstyled">
                                                <li class="dropdown-item active" data-value="0">
                                                    <span>All Categories</span></li>
                                                <li class="dropdown-item " data-value="2"><span>Home</span></li>
                                                <ul class="list-unstyled pl-5">
                                                    <li class="dropdown-item" data-value="3">
                                                        <span>Computer &amp; Networking</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="10">
                                                        <span>-- USB</span>
                                                        <ul class="list-unstyled">
                                                            <li class="dropdown-item" data-value="11">
                                                                <span>---- USB Kingston</span>
                                                            </li>
                                                            <li class="dropdown-item" data-value="12">
                                                                <span>---- USB Sandisk</span>
                                                            </li>
                                                            <li class="dropdown-item" data-value="13">
                                                                <span>---- USB Samsung</span>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-item" data-value="14">
                                                        <span>-- Hard Disk</span>
                                                        <ul class="list-unstyled">
                                                            <li class="dropdown-item" data-value="19">
                                                                <span>---- Hard Disk Drive</span>
                                                            </li>
                                                            <li class="dropdown-item" data-value="20">
                                                                <span>---- Solid State Drives</span>
                                                            </li>
                                                            <li class="dropdown-item" data-value="21">
                                                                <span>---- SATA</span>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-item" data-value="15">
                                                        <span>-- Modem WIFI</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="16">
                                                        <span>-- Keyboard</span>
                                                        <ul class="list-unstyled">
                                                            <li class="dropdown-item" data-value="22">
                                                                <span>---- Keyboard 1</span>
                                                            </li>
                                                            <li class="dropdown-item" data-value="23">
                                                                <span>---- Keyboard 2</span>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-item" data-value="17">
                                                        <span>-- Mouse</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="18">
                                                        <span>-- Monitor</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="6">
                                                        <span>Laptop &amp; Accessories</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="7">
                                                        <span>-- Laptop 1</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="8">
                                                        <span>-- Laptop 2</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="9">
                                                        <span>Smartphone &amp; Tablet</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="24">
                                                        <span>-- Apple</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="25">
                                                        <span>-- Samsung</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="26">
                                                        <span>-- Motorola</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="27">
                                                        <span>-- Chargers</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="4">
                                                        <span>Home Appliance</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="5">
                                                        <span>Camera &amp; Photo</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="28">
                                                        <span>-- Camera 1</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="29">
                                                        <span>-- Camera 2</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="30">
                                                        <span>-- Photo 1</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="31">
                                                        <span>-- Photo 2</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="32">
                                                        <span>Audio</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="33">
                                                        <span>-- Headphone</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="34">
                                                        <span>-- Wireless Speaker</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="35">
                                                        <span>-- Bluetooth Speaker</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="36">
                                                        <span>-- Mini Speaker</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="37">
                                                        <span>-- Sound Card</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="38">
                                                        <span>-- Accessories</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="39">
                                                        <span>-- Earbuds and  In-ear</span>
                                                    </li>
                                                </ul>
                                            </ul>
                                        </div>

                                        <span class="input-group-btn">
				 <button class="btn btn-secondary" type="submit" name="submit_search"><i
                         class="material-icons">search</i></button>
			</span>
                                    </div>

                                </form>
                            </div>
                            <!-- /Block search module TOP -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
