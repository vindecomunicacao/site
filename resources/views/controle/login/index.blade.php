<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vinde | Acesso Restrito </title>

    <!-- Bootstrap core CSS -->

    <link href="/css/controle/bootstrap.min.css" rel="stylesheet">

    <link href="/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/controle/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="/css/controle/custom.css" rel="stylesheet">
    <link href="/css/controle/icheck/flat/green.css" rel="stylesheet">


    <script src="/library/jquery.min.js"></script>

    <!--[if lt IE 9]>
        <script src="../assets/library/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">
    
    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                    @if ($errors->first())
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-warning alert-white rounded">
                                    <strong>Alerta!</strong>
                                    <ul>
                                        @foreach($errors->all() as $chave => $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                    {!! Form::open(['route' => 'controle.login.autenticar']) !!}
                        <h1>Área Restrita</h1>
                        <div>
                            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail', 'required']) !!}
                        </div>
                        <div>
                            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Senha', 'required']) !!}
                        </div>
                        <div class="col-md-12">
                            {!! Form::submit('Login', ['class' => 'pull-right btn btn-default']) !!}
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <img src="/images/login-logo-vinde.png" alt="VINDE">

                                <p>©{{ date('Y') }} Todos os direitos reservados. Vinde! Equipe de comunição da rede vinde.</p>
                            </div>
                        </div>
                    {!! Form::close() !!}
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
            <div id="register" class="animate form">
                <section class="login_content">
                    <form>
                        <h1>Create Account</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" required="" />
                        </div>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div>
                            <a class="btn btn-default submit" href="index.html">Submit</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <p class="change_link">Already a member ?
                                <a href="#tologin" class="to_register"> Log in </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Gentelella Alela!</h1>

                                <p>©2015 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
        </div>
    </div>

</body>

</html>