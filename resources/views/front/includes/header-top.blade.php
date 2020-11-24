<div class="header-top hidden-sm-down">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="header-top-left col-lg-6 col-md-6 d-flex justify-content-start align-items-center">
                    <div class="detail-email d-flex align-items-center justify-content-center">
                        <i class="icon-email"></i>
                        <p>Email : </p>
                        <span>
                  support@gmail.com
                </span>
                    </div>
                    <div class="detail-call d-flex align-items-center justify-content-center">
                        <i class="icon-deal"></i>
                        <p>Today Deals </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-flex justify-content-end align-items-center header-top-right">
                    <div class="register-out">
                        <i class="zmdi zmdi-account"></i>
                        @guest()
                            <a class="register" href="{{route('register')}}"
                               data-link-action="display-register-form">
                                Register
                            </a>
                            <span class="or-text">or</span>
                            <a class="login" href="{{route('login')}}" rel="nofollow" title="Log in to your customer account">Sign
                                in</a>
                        @endguest
                        @auth()


                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>

                        @endauth
                    </div>
                    <div id="_desktop_currency_selector"
                         class="currency-selector groups-selector hidden-sm-down currentcy-selector-dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                             role="main">
                            <span class="expand-more">GBP</span>
                        </div>
                        <div class="currency-list dropdown-menu">
                            <div class="currency-list-content text-left">
                                <div class="currency-item current flex-first">
                                    <a title="British Pound" rel="nofollow"
                                       href="index-1.htm?home=home_3&amp;SubmitCurrency=1&amp;id_currency=1">£ GBP</a>
                                </div>
                                <div class="currency-item">
                                    <a title="US Dollar" rel="nofollow"
                                       href="index-2.htm?home=home_3&amp;SubmitCurrency=1&amp;id_currency=2">$ USD</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="_desktop_language_selector"
                         class="language-selector groups-selector hidden-sm-down language-selector-dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                             role="main">
                            <span class="expand-more"><img class="img-fluid" src="img/1.jpg" alt="English" width="16"
                                                           height="11"></span>
                        </div>
                        <div class="language-list dropdown-menu">
                            <div class="language-list-content text-left">
                                <div class="language-item current flex-first">
                                    <div class="current">
                                        <a href="index.htm?home=home_3">
                                            <img class="img-fluid" src="img/1.jpg" alt="English" width="16" height="11">
                                            <span>English</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="language-item">
                                    <div>
                                        <a href="http://demo.bestprestashoptheme.com/savemart/fr/?home=home_3">
                                            <img class="img-fluid" src="img/2.jpg" alt="Français" width="16"
                                                 height="11">
                                            <span>Français</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="language-item">
                                    <div>
                                        <a href="http://demo.bestprestashoptheme.com/savemart/es/?home=home_3">
                                            <img class="img-fluid" src="img/2.jpg" alt="Español" width="16" height="11">
                                            <span>Español</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="language-item">
                                    <div>
                                        <a href="http://demo.bestprestashoptheme.com/savemart/it/?home=home_3">
                                            <img class="img-fluid" src="img/1.jpg" alt="Italiano" width="16"
                                                 height="11">
                                            <span>Italiano</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="language-item">
                                    <div>
                                        <a href="http://demo.bestprestashoptheme.com/savemart/pl/?home=home_3">
                                            <img class="img-fluid" src="img/5.jpg" alt="Polski" width="16" height="11">
                                            <span>Polski</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="language-item">
                                    <div>
                                        <a href="http://demo.bestprestashoptheme.com/savemart/ar/?home=home_3">
                                            <img class="img-fluid" src="img/6.jpg" alt="اللغة العربية" width="16"
                                                 height="11">
                                            <span>اللغة العربية</span>
                                        </a>
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
