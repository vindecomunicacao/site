<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="utf-8">
    <!-- Latest IE rendering engine & Chrome Frame Meta Tags -->
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <![endif]-->
    <!-- TITLE-->
    <title>Vinde - IEQ Catedral da Familia</title>
    <!-- Favicon -->

    <!-- GOOGLE FONTS
            ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">
    <link rel="stylesheet" id="google-fonts-zozo_options-css"
          href="http://fonts.googleapis.com/css?family=Hind%3A300%2C400%2C500%2C600%2C700%7CRaleway%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic"
          type="text/css" media="all">

    <!-- CSS BEGINS
            ================================================== -->
    <!-- ELEMENTS BASE CSS -->
    <link href="/css/site/elements.min.css" rel="stylesheet" type="text/css"/>
    <!-- THEME BASE CSS -->
    <link href="/css/site/style.css" rel="stylesheet" type="text/css"/>
    <!-- COLOR SCHEME -->
    <link href="/css/site/colors/color1.css" id="changeable-colors" rel="stylesheet"/>
    <!-- CSS ENDS
		 	 ================================================== -->
       @yield('styles')
</head>

<body>
<!-- Page Loader -->
<div id="pageloader">
    <div class="loader-inner">
        <img src="/images/base/loader.gif" alt="">
    </div>
</div>
<!-- PAGE WRAPPER -->
<div id="page-wrapper" class="right-push header-dropdown-light">
    <div class="content-wrapper">
        <header class="header-details-toggle header-light header-top-transparent header-sticky-light">
            <!-- HEADER TOP SECTION -->
            <div class="header-top-section header-typo-light dark-bg navbar hidden-xs hidden-sm" id="header-top-bar">
                <div class="container">
                    <!-- CONTAINER -->
                    <!-- TOGGLE ICON -->
                    <div class="navbar-header nav-respons">
                        <button data-target=".topnavbar-collapse" data-toggle="collapse" class="navbar-toggle collapsed"
                                aria-expanded="false" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- /. TOGGLE ICON -->
                    <div class="navbar-collapse topnavbar-collapse collapse">
                        <!-- HEADER TOP LEFT -->
                        <ul class="nav navbar-nav top-left">
                            <!-- HEADER TEXT BLOCK -->
                            <li>
                                <p class="header-text-block typo-light">Rede Vinde - IEQ Catedral da Familia</p>
                            </li>
                            <!-- /. HEADER TEXT BLOCK -->
                        </ul>
                        <!-- /. HEADER TOP LEFT -->
                        <!-- HEADER TOP RIGHT -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- SOCIAL ICONS -->
                            <li>
                                <ul class="header-social-icons">
                                    <li class="facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="linkedin"><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li class="pinterest"><a href="#" target="_blank"><i
                                                    class="fa fa-pinterest"></i></a></li>
                                    <li class="google-plus"><a href="#" target="_blank"><i
                                                    class="fa fa-google-plus"></i></a></li>
                                    <li class="youtube"><a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                                    </li>
                                    <li class="dribbble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a>
                                    </li>
                                </ul>
                            </li>
                            <!-- /. SOCIAL ICONS -->
                        </ul>
                        <!-- /. HEADER TOP RIGHT -->
                    </div>
                </div>
            </div>
            <!-- /. HEADER TOP SECTION -->

            @yield('conteudo')

            <section class="theme-bg top-padding-sm no-bottom-padding typo-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="text-center" data-animation="fadeInLeft">
                                <ul class="list-inline">
                                    <li>
                                        <h2 class="section-titles">Get A Free Quote / Need a Help ?</h2></li>
                                    <li class="left-padding-sm"><a
                                                class="btn btn-sm btn-light btn-hv-light btn-rounded btn-default"
                                                href="contact-us.html"> Contact Now</a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

    </div>
    <!-- /. content-wrapper -->

    <!-- FOOTER SECTION -->
    <footer id="footer" class="footer dark-bg">
        <div class="footer-top">
            <div class="container">
                <div class="row bg-no-repeat background-position-left">
                    <div class="col-md-3 col-sm-6">
                        <!-- LOGO -->
                        <img src="/images/logo1.png" alt="logo">
                        <br>
                        <p>FinTheme is a superbly innovative, robustly reliable, clean-coded and feature rich WordPress
                            theme with powerful administration settings. It is easy to customize for all kinds of
                            financial companies.</p>

                        <div class="feature-box no-bottom-margin style-3">
                            <div class="icon-wrapper">
                                <!-- ICON -->
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="inner-wrapper">
                                <!--  PHONE NUMBER -->
                                <p class="feature-description"> - +44 123 4567</p>
                            </div>
                        </div>
                        <div class="feature-box style-3">
                            <div class="icon-wrapper">
                                <!-- ICON -->
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="inner-wrapper">
                                <!-- EMAIL -->
                                <p class="feature-description"><a class="" href="mailto:info@website.com"> -
                                      {{ env('TESTE') }}</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6">
                        <!-- WIDGET -->
                        <h5 class="widget-title text-style text-uppercase">Services</h5>
                        <!-- LIST -->
                        <ul class="list-unstyled">
                            <li class="bottom-margin-vsm"><a href="market-strategy.html">Market Strategy</a>
                            </li>
                            <li class="bottom-margin-vsm"><a href="trades-stocks.html">Trades & Stocks</a>
                            </li>
                            <li class="bottom-margin-vsm"><a href="strategic-planning.html">Strategic Planning</a
                                ></li>
                            <li class="bottom-margin-vsm"><a href="investment-planning.html">Investment planning</a>
                            </li>
                            <li class="bottom-margin-vsm"><a href="taxes-advisory.html">Taxes Advisory</a>
                            </li>
                            <li class="bottom-margin-vsm"><a href="mutual-funds.html">Mutual Funds</a>
                            </li>
                            <li class="bottom-margin-vsm"><a href="retaining-planning.html">Retaining Planning</a>
                            </li>
                            <li class="bottom-margin-vsm"><a href="charities.html">charities</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6  recent-block">
                        <h5 class="widget-title text-style left-padding-sm text-uppercase">Latest News</h5>
                        <ul class="list-unstyled left-padding-sm">
                            <li><a href="secrets-about-investment-they-are-still-keeping-from-you.html"><span
                                            class="icons fa fa-minus"></span>Secrets About Investment They Are Still
                                    Keeping From You </a>
                            </li>
                            <li>December 12, 2016</li>
                            <li><a href="marketing-strategy-secrets-revealed.html"><span
                                            class="icons fa fa-minus"></span>Marketing Strategy Secrets Revealed</a>
                            </li>
                            <li>December 12, 2016</li>
                            <li><a href="business-plan-strategies-for-the-entrepreneurially-challenged.html"><span
                                            class="icons fa fa-minus"></span>Business Plan Strategies For The
                                    Entrepreneurially Challenged</a>
                            </li>
                            <li>December 12, 2016</li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6  footer-widgets">
                        <!-- NEWSLETTER -->
                        <h5 class="widget-title text-style text-uppercase">Newsletter Signup</h5>
                        <p>Sign up for new FinTheme content, updates, surveys & offers. </p>
                        <p class="form-message1" style="display: none;"></p>
                        <form class="input-group form-flat form-theme padding-top-10 bv-form" name="subscribe-form"
                              method="post" action="php/subscription.php" id="subscribe-form" novalidate="novalidate">
                            <button type="submit" class="bv-hidden-submit"
                                    style="display: none; width: 0px; height: 0px;"></button>
                            <div class="form-group has-feedback">
                                <input class="form-control typo-light" placeholder="Enter Your Email" value=""
                                       name="subscribe_email" data-bv-field="subscribe_email" type="email"><i
                                        style="display: none;" class="form-control-feedback bv-no-label"
                                        data-bv-icon-for="subscribe_email"></i>
                                <small style="display: none;" class="help-block" data-bv-validator="notEmpty"
                                       data-bv-for="subscribe_email" data-bv-result="NOT_VALIDATED">Email is required.
                                    Please enter email.
                                </small>
                                <small style="display: none;" class="help-block" data-bv-validator="emailAddress"
                                       data-bv-for="subscribe_email" data-bv-result="NOT_VALIDATED">Please enter a
                                    correct email address.
                                </small>
                            </div>
                            <span class="input-group-btn"><button class="btn btn-default" type="submit"><i
                                            class="flaticon-next-1 fa"></i></button></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom footer-top-border">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="copyright">
                            &copy; Copy Right {{ date('Y') }} All Rights Reserved.
                            <ul class="footer-bottom-links text-uppercase">
                                <li><a href="http://catchpixel.com/" target="_blank">Crafted By CatchPixel</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <!-- SOCIAL SHARE -->
                        <ul class="footer-social-icons">
                            <li class="facebook"><a href="#" target="_blank"><i
                                            class="fa fa-facebook text-darkest social-facebook-hvcolor"></i></a></li>
                            <li class="twitter"><a href="#" target="_blank"><i
                                            class="fa fa-twitter text-darkest social-twitter-hvcolor"></i></a></li>
                            <li class="linkedin"><a href="#" target="_blank"><i
                                            class="fa fa-linkedin text-darkest social-linkedin-hvcolor"></i></a></li>
                            <li class="pinterest"><a href="#" target="_blank"><i
                                            class="fa fa-pinterest text-darkest social-pinterest-hvcolor"></i></a></li>
                            <li class="google-plus"><a href="#" target="_blank"><i
                                            class="fa fa-google-plus text-darkest social-google-plus-hvcolor"></i></a>
                            </li>
                            <li class="youtube"><a href="#" target="_blank"><i
                                            class="fa fa-youtube text-darkest social-youtube-hvcolor"></i></a></li>
                            <li class="dribbble"><a href="#" target="_blank"><i
                                            class="fa fa-dribbble text-darkest social-dribbble-hvcolor"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="#" id="back-to-top" title="Back to top"></a>
    <!-- FOOTER SECTION -->
</div>
<!-- /. PAGE WRAPPER -->
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="/js/jquery.mmenu.min.all.js"></script>
<script type="text/javascript" src="/js/jquery.sticky.js"></script>
<script type="text/javascript" src="/js/jquery.appear.min.js"></script>
<script type="text/javascript" src="/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/js/jquery.stellar.min.js"></script>
<script type="text/javascript" src="/js/jquery.easypiechart.min.js"></script>
<script type="text/javascript" src="/js/count-to.js"></script>
<script type="text/javascript" src="/js/custom.js"></script>
@yield('scripts')
</body>

</html>
