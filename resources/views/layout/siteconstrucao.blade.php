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

            @yield('conteudo')

            <section class="theme-bg top-padding-sm no-bottom-padding typo-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="text-center" data-animation="fadeInLeft">
                                <ul class="list-inline">
                                    <li>
                                        <h2 class="section-titles">Este site está em processo de contrução!</h2>
                                      </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </div>
    <!-- /. content-wrapper -->

    <!-- FOOTER SECTION -->
    <footer id="footer" class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row bg-no-repeat background-position-left">
                    <div class="col-xs-6 col-sm-3">
                    </div>
                    <div class="col-xs-7 col-sm-9 footer-widgets">
                      {!! Form::open(array('route' => 'site.home.cadastronews', 'class' =>'form-inline')) !!}
                      <div class="form-group form-group-lg" style="width:50%">
                            <input name="emailnews" type="email" style="width:100%" class="form-control input-lg" placeholder="Fique por dentro da vinde, se inscreva!" value="" />
                      </div>
                      {!! Form::submit('Cadastrar', ['class' => 'btn btn-default']) !!}
                      {!! Form::close() !!}
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
                            <b>&copy; Copy Right {{ date('Y') }} Todos os direitos reservados - VINDE CELULAS.</b>
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <!-- SOCIAL SHARE -->
                        <ul class="footer-social-icons">
                            <li class="facebook"><a href="https://www.facebook.com/vindecelulas" target="_blank"><i
                                            class="fa fa-facebook social-facebook-hvcolor"></i></a></li>
                            <li class="youtube"><a href="https://www.youtube.com/channel/UCBgLtHc2rMyfKHxDbViB4aw" target="_blank"><i
                                            class="fa fa-youtube text-darkest social-youtube-hvcolor"></i></a></li>
                            <li class="dribbble"><a href="https://www.instagram.com/vindecelulas/" target="_blank"><i
                                            class="fa fa-instagram text-darkest social-instagram-hvcolor"></i></a></li>
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
