@extends('layout.site')
@section('conteudo')
    <!-- HEADER Logo SECTION -->
    <div class="dark-bg hidden-xs hidden-sm">
        <div class="container">
            <!-- CONTAINER -->
            <!-- TOGGLE ICON -->
            <div class="navbar-header logo-contact-details">
                <a class="navbar-toggle" href="#nav-menu">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <!-- LOGO & LOGO STICKY  -->
                <a class="navbar-brand hidden-sm no-left-padding" href="index.html"><img src="images/logo1.png" alt="logo" width="155" height="25"><img src="images/logo1.png" class="sticky-logo" alt="logo" width="155" height="25"></a>
            </div>
            <!-- /. TOGGLE ICON -->
            <div class="header-widgets navbar-right">
                <div class="widget widget-icon-box">
                    <a class="icon-box" href="tel:123456789">
                        <!-- ICON -->
                        <i class="fa fa-phone fa-3x"></i>
                        <!-- CONTACT DETAILS -->
                        <div class="icon-box-text">
                            <h4 class="icon-box-title">1-234-345-6789</h4>
                            <span class="icon-box-subtitle">contato@redevinde.com</span>
                        </div>
                    </a>
                </div>
                <div class="widget widget-icon-box">
                    <a class="icon-box" href="tel:123456789">
                        <!-- ICON -->
                        <i class="fa fa-institution fa-3x"></i>
                        <!-- ADDRESS -->
                        <div class="icon-box-text">
                            <h4 class="icon-box-title">Tv. Vinte e Cinco de Junho, 318 </h4>
                            <span class="icon-box-subtitle">Guamá - Belém - PA, 66075-513</span>
                        </div>
                    </a>
                </div>
                <div class="widget widget-icon-box">
                    <a class="icon-box" href="tel:123456789">
                        <!-- ICON -->
                        <i class="fa fa-clock-o fa-3x"></i>
                        <!-- TEXT -->
                        <div class="icon-box-text">
                            <h4 class="icon-box-title">Sab 20h00 - Dom 20h00</h4>
                            <span class="icon-box-subtitle">Horário dos Cultos</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /. HEADER Logo SECTION -->
    <!-- STICKY WRAPPER -->
    <div id="sticker" class="header-main  sticky-navigation s-header">
        <nav class="navbar navbar-default fixed">
            <div class="container">
                <!-- TOGGLE ICON -->
                <div class="navbar-header">
                    <a class="navbar-toggle" href="#nav-menu">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                                </a>
                    <!-- LOGO & LOGO STICKY  -->
                    <a class="navbar-brand hidden-md hidden-lg" href="index.html"><img src="images/logo-light1.png" class="img-responsive" alt="logo" width="155" height="26"><img src="images/logo1.png" class="sticky-logo" alt="logo" width="155" height="26"></a>                            </div>
                <!-- /. TOGGLE ICON -->
                <!-- EXTRA NAV (FOR ELEMENTS) -->
                <div id="extra-nav" class="extra-nav">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- TOGGLR SEARCH -->
                        <li class="dropdown search-dropdown">
                            <a id="search-toggle" class="header-toggle-icon" href="#"> <span class="flaticon-magnifying-glass"></span></a>
                        </li>
                        <!-- /. TOGGLR SEARCH -->

                        <!-- /. TOGGLR SEARCH -->
                        <li id="extra-toggle-search" class="theme-bg header-toggle-content">
                            <div class="container">
                                <form>
                                    <input type="text" class="form-control typo-light" id="search-form" name="search-form" placeholder="TYPE AND HIT ENTER..">
                                    <a id="toggle-close-search" class="toggle-close" href="#"><span class="fa fa-times text-style typo-light"></span></a>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /. EXTRA NAV (FOR ELEMENTS) -->
                <!-- MAIN MENU -->
                <div id="nav-menu">
                    <ul class=" nav navbar-nav">
                        <!-- DROPDOWN -->
                        <li class="dropdown">
                            <a href="/">Home</a>
                        </li>
                        <!-- MENU -->
                        <!-- MEGA MENU -->
                        <li class="dropdown" data-animations="fadeIn">
                            <a href="about.html">About <span class="caret"></span></a>
                            <!-- MEGA MENU WRAPPER -->
                            <ul class="dropdown-menu">
                                <li class="extra-link"><a href="our-business.html" class="sub-menu">Our Business</a>
                                </li>
                                <li><a href="our-history.html">Our History</a>
                                </li>
                                <li><a href="our-awards.html">Our Awards</a>
                                </li>
                                <li><a href="our-vision-and-values.html">Our Vision and Values</a>
                                </li>
                                <li><a href="our-team.html">Our Team</a>
                                </li>
                                <li><a href="corporate-social-responsibility.html">Corporate Social Responsibility</a>
                                </li>
                                <li><a href="careers.html">Careers</a>
                                </li>
                            </ul>
                        </li>

                        <!-- MEGA MENU -->
                        <li class="dropdown">
                            <a href="services.html">Service <span class="caret"></span></a>
                            <!-- DROPDOWN MENU -->
                            <ul class="dropdown-menu">
                                <li><a href="market-strategy.html">Market Strategy</a>
                                </li>
                                <li><a href="trades-stocks.html">Trades & Stocks</a>
                                </li>
                                <li><a href="strategic-planning.html">Strategic Planning</a
                                    ></li>
                                <li><a href="investment-planning.html">Investment planning</a>
                                </li>
                                <li><a href="taxes-advisory.html">Taxes Advisory</a>
                                </li>
                                <li><a href="mutual-funds.html">Mutual Funds</a>
                                </li>
                                <li><a href="retaining-planning.html">Retaining Planning</a>
                                </li>
                                <li><a href="charities.html">charities</a>
                                </li>
                            </ul>
                        </li>
                        <!-- MENU -->
                        <!-- DROPDOWN -->
                        <li class="dropdown">
                            <a href="blog-resources.html">Blog &amp; Resources <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-resources.html">Blog</a>
                                </li>
                                <li><a href="case-studies.html">Case studies</a>
                                </li>
                            </ul>
                        </li>
                        <!-- DROPDOWN -->
                        <li class="dropdown">
                            <a href="events.html">Events</a>
                        </li>
                        <!-- MENU -->
                        <!-- MEGA MENU -->
                        <li class="dropdown mega-dropdown scroll"><a href="contact-us.html">Contact Us</a>
                        </li>
                    </ul>

                </div>
                <!-- /. MAIN MENU -->
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
    <!-- /. STICKY WRAPPER -->
    </header>
    <!-- /. HEADER -->
    <!-- SLIDER SECTION -->
    @if(isset($banners) && $banners->count())
        <section class="slider-section slider-section-custom half-screen typo-light slider-position">
            <div class="owl-carousel navigation-dark nav-mini show-nav-hover nav-rounded dots-mini" data-items="1" data-margin="" data-loop="true" data-merge="true" data-nav="true" data-dots="false" data-stagepadding="0" data-mobile="1" data-tablet="1" data-desktopsmall="1" data-desktop="1" data-autoplay="false" data-delay="5000" data-navigation="true">
            @foreach($banners as $banner)
                @if(is_file(storage_path() . '/data/banner/g/' . $banner->imagem))
                    <!-- ITEM-->
                        <div class="item">
                            <!-- IMAGE-->
                            <img src="{{ route('image.render', ['banner','g',$banner->imagem]) }}" alt="" class="img-responsive" width="1920" height="580">
                            <div class="vertical-middle slider-content text-left top-padding-lg bottom-padding-lg">
                                <div class="col-md-6 col-md-offset-{{ $banner->posicao }} semi-dark-bg item-box animated" data-animate="fadeIn" data-animation-delay="400">
                                    <h4 class="bor-lr font-weight-bold  text-uppercase animated" data-animate="fadeInLeftBig" data-animation-delay="400">{{ $banner->nome }}</h4>
                                    <!-- TEXT-->
                                    <p class="normal animated" data-animate="fadeInRightBig" data-animation-delay="400">{{ $banner->texto }}</p>
                                    <!-- BUTTON-->
                                    <div class="animated" data-animate="fadeInDownBig" data-animation-delay="400">
                                        {{--<button class="btn btn-theme btn-hv-dark btn-rounded btn-default">VIEW OUR SOLUTION</button>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ITEM-->
                    @endif
                @endforeach
            </div>
        </section>
        <!-- SLIDER SECTION -->
    @endif
    <section id="about-us" class="bottom-padding-md">
        <div class="container">
            <div class="row">
                <div class="col-md-11 text-center">
                    <!-- SECTION TITLE -->
                    <div class="section-title">
                        <h3 class="parallax-title">Sejam Bem-Vindos</h3>
                        <div class="bottom-pad">
                            <p>"Vinde a mim, todos os que estais cansados e oprimidos, e eu vos aliviarei."
                                <br> Matheus 11:28</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 parallax-desc">
                    <h3 class="text-uppercase parallax-title ">We Translate Your Vision into Action.</h3>
                    <!-- TEXT  -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis. Nunc consectetur odio sed dolor tincidunt porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis. Nunc consectetur odio sed dolor tincidunt porttitor consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis. porttitor consecteturadipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis. </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis. Nunc consectetur odio sed dolor tincidunt porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. . </p>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="abt-title">
                                <!-- ICON  -->
                                <i class="fa fa-lg fa-pencil-square-o right-pad"></i>
                                <!-- TITLE  -->
                                <h5 class="inline font-weight-lbold">Clean</h5>
                            </div>
                            <!-- TEXT  -->
                            <p> Lorem ipsum dolor amet, consectetur adipiscing. </p>
                        </div>
                        <div class="col-md-4">
                            <div class="abt-title">
                                <!-- ICON  -->
                                <i class="fa fa-umbrella fa-lg right-pad"></i>
                                <!-- TITLE  -->
                                <h5 class="inline font-weight-lbold">Simple </h5>
                            </div>
                            <!-- TEXT  -->
                            <p> Lorem ipsum dolor amet, consectetur adipiscing.</p>
                        </div>
                        <div class="col-md-4">
                            <div class="abt-title">
                                <!-- ICON  -->
                                <i class="fa fa-line-chart right-pad"></i>
                                <!-- TITLE  -->
                                <h5 class="inline font-weight-lbold">Reliable</h5>
                                <!-- TEXT  -->
                            </div>
                            <p> Lorem ipsum dolor amet, consectetur adipiscing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- IMAGE-->
                    <div class="bottom-margin-sm">
                        <img class="img-responsive" src="images/content/others/welcome-img.jpg" alt="" width="750" height="380" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PROJECTS SECTION -->
    <section id="projects" class="dark-bg typo-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- SECTION TITLE -->
                    <div class="section-title bottom-line text-center">
                        <!-- TITLE -->
                        <h3>Ultimas Notícias</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                @if(isset($noticias) && $noticias->count())
                    <!-- CAROUSEL -->
                        <div class="owl-carousel nav-outer navigation-transparent" data-items="1" data-margin="20" data-loop="true" data-merge="true" data-nav="true" data-dots="false" data-stagepadding="" data-mobile="1" data-tablet="2" data-desktopsmall="4" data-desktop="4" data-autoplay="false" data-delay="6000">
                            @foreach($noticias as $noticia)
                            <!-- PORTFOLIO ITEM -->
                            <div class="item all design web">
                                <!-- IMAGE WRAPPER -->
                                <div class="image-wrapper border typo-light">
                                    <!-- IMAGE -->
                                    <a href="{{ route('site.noticia.detalhe', $noticia) }}">
                                        <img class="wrapper-scale-in img-responsive" src="{{ route('image.render', ['noticia', 'm', $noticia->imagem ]) }}" width="400" height="270" alt="" />
                                    </a>
                                    <!-- OVERLAY -->
                                    <div class="overlay-dark wrapper-fade-in">
                                        <!-- DESCRIPTION -->
                                        <div class="overlay-desc  wrapper-fade-in text-left">
                                            <!-- PROJECT TITLE-->
                                            <h5><a href="{{ route('site.noticia.detalhe', $noticia) }}">{{ $noticia->nome }}</a></h5>
                                            <!-- PROJECT DESC-->
                                            <p>{{ substr($noticia->texto,0,40) }}</p>
                                        </div>
                                        <!-- /.DESCRIPTION -->
                                    </div>
                                </div>
                                <!-- /.IMAGE WRAPPER -->
                            </div>
                            <!-- /. PORTFOLIO ITEM -->
                            @endforeach
                            <!-- PORTFOLIO ITEM 1 -->
                            <div class="item all design identity photography">
                                <!-- IMAGE WRAPPER -->
                                <div class="image-wrapper border typo-light">
                                    <!-- IMAGE -->
                                    <a href="trades-stocks.html"><img class="wrapper-scale-in img-responsive" src="images/content/services/set3/post-24.jpg" width="400" height="270" alt="" /></a>
                                    <!-- OVERLAY -->
                                    <div class="overlay-dark wrapper-fade-in">
                                        <!-- DESCRIPTION -->
                                        <div class="overlay-desc  wrapper-fade-in text-left">
                                            <!-- PROJECT TITLE-->
                                            <h5><a href="trades-stocks.html">Trades & Stocks</a></h5>
                                            <!-- PROJECT DESC-->
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                        <!-- /.DESCRIPTION -->
                                    </div>
                                </div>
                                <!-- /.IMAGE WRAPPER -->
                            </div>
                            <!-- /. PORTFOLIO ITEM -->
                            <!-- PORTFOLIO ITEM 1 -->
                            <div class="item all identity web">
                                <!-- IMAGE WRAPPER -->
                                <div class="image-wrapper border typo-light">
                                    <!-- IMAGE -->
                                    <a href="strategic-planning.html"><img class="wrapper-scale-in img-responsive" src="images/content/services/set3/post-13.jpg" width="400" height="270" alt="" /></a>
                                    <!-- OVERLAY -->
                                    <div class="overlay-dark wrapper-fade-in">
                                        <!-- DESCRIPTION -->
                                        <div class="overlay-desc wrapper-fade-in text-left">
                                            <!-- PROJECT TITLE-->
                                            <h5><a href="strategic-planning.html">StrategicPlanning</a></h5>
                                            <!-- PROJECT DESC-->
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                        <!-- /.DESCRIPTION -->
                                    </div>
                                </div>
                                <!-- /.IMAGE WRAPPER -->
                            </div>
                            <!-- /. PORTFOLIO ITEM -->
                            <!-- PORTFOLIO ITEM -->
                            <div class="item all design web">
                                <!-- IMAGE WRAPPER -->
                                <div class="image-wrapper border typo-light">
                                    <!-- IMAGE -->
                                    <a href="investment-planning.html"><img class="wrapper-scale-in img-responsive" src="images/content/services/set3/post-6.jpg" width="400" height="270" alt="" /></a>
                                    <!-- OVERLAY -->
                                    <div class="overlay-dark wrapper-fade-in">
                                        <!-- DESCRIPTION -->
                                        <div class="overlay-desc wrapper-fade-in text-left">
                                            <!-- PROJECT TITLE-->
                                            <h5><a href="investment-planning.html">InvestmentPlanning</a></h5>
                                            <!-- PROJECT DESC-->
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                        <!-- /.DESCRIPTION -->
                                    </div>
                                </div>
                                <!-- /.IMAGE WRAPPER -->
                            </div>
                            <!-- /. PORTFOLIO ITEM -->
                            <!-- PORTFOLIO ITEM -->
                            <div class="item all identity">
                                <!-- IMAGE WRAPPER -->
                                <div class="image-wrapper border typo-light">
                                    <!-- IMAGE -->
                                    <a href="taxes-advisory.html"><img class="wrapper-scale-in img-responsive" src="images/content/services/set3/post-7.jpg" width="400" height="270" alt="" /></a>
                                    <!-- OVERLAY -->
                                    <div class="overlay-dark wrapper-fade-in">
                                        <!-- DESCRIPTION -->
                                        <div class="overlay-desc wrapper-fade-in text-left">
                                            <!-- PROJECT TITLE-->
                                            <h5><a href="taxes-advisory.html">Taxes Advisory</a></h5>
                                            <!-- PROJECT DESC-->
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                        <!-- /.DESCRIPTION -->
                                    </div>
                                </div>
                                <!-- /.IMAGE WRAPPER -->
                            </div>
                            <!-- /. PORTFOLIO ITEM -->
                            <!-- PORTFOLIO ITEM -->
                            <div class="item all identity web">
                                <!-- IMAGE WRAPPER -->
                                <div class="image-wrapper border typo-light">
                                    <!-- IMAGE -->
                                    <a href="mutual-funds.html"><img class="wrapper-scale-in img-responsive" src="images/content/services/set3/post-9.jpg" width="400" height="270" alt="" /></a>
                                    <!-- OVERLAY -->
                                    <div class="overlay-dark wrapper-fade-in">
                                        <!-- DESCRIPTION -->
                                        <div class="overlay-desc wrapper-fade-in text-left">
                                            <!-- PROJECT TITLE-->
                                            <h5><a href="mutual-funds.html">Mutual Funds</a></h5>
                                            <!-- PROJECT DESC-->
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                        <!-- /.DESCRIPTION -->
                                    </div>
                                </div>
                                <!-- /.IMAGE WRAPPER -->
                            </div>
                            <!-- /. PORTFOLIO ITEM -->
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- /.CONTAINER -->
    </section>

    <!-- ABOUT SECTION -->
    <section id="why-choose-us" class="bottom-padding-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-12 bottom-padding-sm" data-animation="fadeInLeft">
                        <!-- FEATURE BOX -->
                        <div class="feature-box hv-wrapper style-3">
                            <div class="feature-inner-wrapper">
                                <div class="icon-wrapper">
                                    <!-- ICON -->
                                    <i class="flaticon-edit fa-2x icon-shape-circle icon-light icon-dark-bg icon-hvdark icon-hvtransparent-bg icon-hvbordered-theme border b2 solid"></i>
                                </div>
                                <div class="title-wrapper">
                                    <!--TITLE -->
                                    <h5 class="text-uppercase feature-title">SEO Optimized</h5>
                                    <!-- TEXT -->
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum blandit faucibus.Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 bottom-padding-sm" data-animation="fadeInUp">
                        <!-- FEATURE BOX -->
                        <div class="feature-box hv-wrapper style-3">
                            <div class="feature-inner-wrapper">
                                <div class="icon-wrapper">
                                    <!-- ICON -->
                                    <i class="flaticon-cogwheel fa-2x icon-shape-circle icon-light icon-dark-bg icon-hvdark icon-hvtransparent-bg icon-hvbordered-theme border b2 solid"></i>
                                </div>
                                <div class="title-wrapper">
                                    <!--TITLE -->
                                    <h5 class="text-uppercase feature-title">Easy Customizable</h5>
                                    <!-- TEXT -->
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum blandit faucibus.Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 bottom-padding-sm" data-animation="fadeInRight">
                        <!-- FEATURE BOX -->
                        <div class="feature-box hv-wrapper style-3">
                            <div class="feature-inner-wrapper">
                                <div class="icon-wrapper">
                                    <!-- ICON -->
                                    <i class="flaticon-tool-23 fa-2x icon-shape-circle icon-light icon-dark-bg icon-hvdark icon-hvtransparent-bg icon-hvbordered-theme border b2 solid"></i>
                                </div>
                                <div class="title-wrapper">
                                    <!--TITLE -->
                                    <h5 class="text-uppercase feature-title">24 / 7 Support</h5>
                                    <!-- TEXT -->
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum blandit faucibus.Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12 bottom-padding-sm" data-animation="fadeInLeft">
                        <div class="item-box light-bg">
                            <h5>Strategic Planning</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum blandit faucibus.</p>
                        </div>
                    </div>
                    <div class="col-md-12 bottom-padding-sm" data-animation="fadeInRight">
                        <div class="item-box light-bg">
                            <h5>Market Strategy</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum blandit faucibus.</p>
                        </div>
                    </div>
                    <div class="col-md-12 bottom-padding-sm" data-animation="fadeInRight">
                        <div class="item-box light-bg">
                            <h5>Investment planning</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum blandit faucibus.</p>
                        </div>
                    </div>
                    <div class="col-md-12 bottom-padding-sm" data-animation="fadeInLeft">
                        <div class="item-box light-bg">
                            <h5>Taxes Advisory</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum blandit faucibus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT SECTION -->

    <!-- SERVICES SECTION -->
    <section id="services" class="light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center bottom-padding">
                    <!-- TITLE -->
                    <h5>Are you still saving money for growing your business?</h5>
                    <!-- TEXT  -->
                    <h2 class="text-uppercase">we can manage your finance</h2>
                    <p class="title-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <!-- CAROUSEL -->
                    <div class="owl-carousel" data-items="1" data-margin="30" data-loop="true" data-merge="true" data-nav="false" data-dots="false" data-stagepadding="" data-mobile="1" data-tablet="2" data-desktopsmall="3" data-desktop="3" data-autoplay="true" data-delay="6000">
                        <div class="item item-box white-bg">
                            <div class="feature-text">
                                <!-- TITLE -->
                                <h5 class="text-uppercase">Private Banking </h5>
                                <!-- TEXT -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <!-- BUTTON -->
                                <button class="btn btn-outline btn-hv-dark btn-md btn-rounded">LEARN MORE</button>
                            </div>
                        </div>
                        <div class="item item-box white-bg">
                            <div class="feature-text">
                                <!-- TITLE -->
                                <h5 class="text-uppercase">Wealth Management </h5>
                                <!-- TEXT -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <!-- BUTTON -->
                                <button class="btn btn-outline btn-hv-dark btn-md btn-rounded">LEARN MORE</button>
                            </div>
                        </div>
                        <div class="item item-box white-bg">
                            <div class="feature-text">
                                <!-- TITLE -->
                                <h5 class="text-uppercase">Investment Management </h5>
                                <!-- TEXT -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <!-- BUTTON -->
                                <button class="btn btn-outline btn-hv-dark btn-md btn-rounded">LEARN MORE</button>
                            </div>
                        </div>
                        <div class="item item-box white-bg">
                            <div class="feature-text">
                                <!-- TITLE -->
                                <h5 class="text-uppercase">Business Solution</h5>
                                <!-- TEXT -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <!-- BUTTON -->
                                <button class="btn btn-outline btn-hv-dark btn-md btn-rounded">LEARN MORE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.CONTAINER -->
    </section>
    <!-- SERVICES SECTION -->
    <!-- CTA SECTION -->
    <section class="bg-image bottom-padding-md parallax-bg typo-light" data-stellar-background-ratio="0.5" data-background="images/content/bg/elements/16.jpg">
        <div class="overlay-darker"></div>
        <div class="container text-left">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <!-- TITLE -->
                    <h4 class="font-weight-bold"> WE ARE <span class="text-primary">PASSIONATE</span> ABOUT OUR WORK</h4>
                </div>
                <div class="col-md-6 col-md-offset-1">
                    <!-- TEXT -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et culpa dolore odio voluptate suscipit corporis sed ad sunt autem! </p>
                </div>
            </div>
            <div class="row top-padding-sm">
                <div class="col-md-3 col-xs-6">
                    <div class="text-center counter-wrapper hv-wrapper ">
                        <!-- COUNTER NUMBER -->
                        <div data-count="1250" class="number-counter "><span class="counter"></span></div>
                        <!-- COUNTER TITLE -->
                        <h5 class="text-grey">Branches</h5>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="text-center counter-wrapper hv-wrapper">
                        <!-- COUNTER NUMBER -->
                        <div data-count="599" class="number-counter"><span class="counter"></span></div>
                        <!-- COUNTER TITLE -->
                        <h5 class="text-grey">Projects</h5>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="text-center counter-wrapper hv-wrapper">
                        <!-- COUNTER NUMBER -->
                        <div data-count="822" class="number-counter"><span class="counter"></span></div>
                        <!-- COUNTER TITLE -->
                        <h5 class="text-grey">Awards</h5>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="text-center counter-wrapper hv-wrapper">
                        <!-- COUNTER NUMBER -->
                        <div data-count="4766" class="number-counter"><span class="counter"></span></div>
                        <!-- COUNTER TITLE -->
                        <h5 class="text-grey">clients</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS SECTION -->
    <section id="testimonials" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- SECTION TITLE -->
                    <div class="section-title bottom-line text-center">
                        <!-- TITLE -->
                        <h3>What Clients Says?</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- CAROUSEL -->
                    <div class="owl-carousel nav-bottom top-bullet dots-dark dots-outer dots-mini" data-items="1" data-margin="40" data-loop="true" data-merge="true" data-nav="false" data-dots="true" data-stagepadding="" data-mobile="1" data-tablet="2" data-desktopsmall="3" data-desktop="3" data-autoplay="true" data-delay="3000">
                        <!-- TESTIMONIAL -->
                        <div class="item client-says text-center">
                            <img class="img-circle image-small" src="images/content/client/client-5.jpg" width="100" height="100" alt="" />
                            <div class="testimonial-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="client-name">John Deo - Yahoo</div>
                        </div>
                        <!-- TESTIMONIAL -->
                        <div class="item client-says text-center">
                            <img class="img-circle image-small" src="images/content/client/client-3.jpg" width="100" height="100" alt="" />
                            <div class="testimonial-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="client-name">Rachel Moore - Google</div>
                        </div>
                        <!-- TESTIMONIAL -->
                        <div class="item client-says text-center">
                            <img class="img-circle image-small" src="images/content/client/client-2.jpg" width="100" height="100" alt="" />
                            <div class="testimonial-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="client-name">Michael Y - Facebook</div>
                        </div>
                        <!-- TESTIMONIAL -->
                        <div class="item client-says text-center">
                            <img class="img-circle image-small" src="images/content/client/client-1.jpg" width="100" height="100" alt="" />
                            <div class="testimonial-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="client-name">Sue San - Bing</div>
                        </div>
                    </div>
                    <!-- /. CAROUSEL -->
                </div>
            </div>
        </div>
    </section>
    <!-- TESTIMONIALS SECTION -->
    <!-- CLIENT SECTION -->
    <section id="team" class="no-bottom-padding light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-4 bottom-padding">
                    <!-- SECTION TITLE -->
                    <div class="section-title">
                        <!-- TITLE -->
                        <h3 class="bottom-line">Our Awards</h3>
                        <!-- TEXT -->
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                    </div>
                </div>
                <div class="col-md-8 bottom-padding">
                    <!-- IMAGES -->
                    <ul class="client-grid client-grid-4 clearfix">
                        <li><img src="images/content/client/1.png" alt="" class="img-responsive" width="100" height="50"></li>
                        <li><img src="images/content/client/2.png" alt="" class="img-responsive" width="100" height="50"></li>
                        <li><img src="images/content/client/3.png" alt="" class="img-responsive" width="100" height="50"></li>
                        <li><img src="images/content/client/4.png" alt="" class="img-responsive" width="100" height="50"></li>
                        <li><img src="images/content/client/5.png" alt="" class="img-responsive" width="100" height="50"></li>
                        <li><img src="images/content/client/6.png" alt="" class="img-responsive" width="100" height="50"></li>
                        <li><img src="images/content/client/7.png" alt="" class="img-responsive" width="100" height="50"></li>
                        <li><img src="images/content/client/8.png" alt="" class="img-responsive" width="100" height="50"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- CLIENT SECTION -->
    <!-- /.GRID SECTION -->
@endsection