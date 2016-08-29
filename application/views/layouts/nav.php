<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><?= $app; ?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html">Inicio</a>
                    </li>
                    <li>
                        <a href="about.html">Acerca De</a>
                    </li>
                    <li>
                        <a href="contact.html">Contacto</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" style="background:transparent;">Iniciar Sesión</a>
                        <div class="dropdown-menu" style="padding: 10px; padding-bottom: 0px; background: transparent;">
                            <?= form_open('login'); ?>
                                <div class="form-group">
                                    <?= form_input(['type'=>'email', 'name'=>'email'], '', ['class'=>'form-control', 'placeholder'=>'Email', 'required'=>'required']); ?>
                                </div>
                                <div class="form-group">
                                    <?= form_password('password', '', ['class'=>'form-control', 'placeholder'=>'Contraseña', 'required'=>'required']); ?>
                                </div>
                                <div class="form-group">
                                    <?= form_submit('boton', 'INGRESAR', ['class'=>'btn btn-primary', 'style'=>'width: 380px;']); ?>
                                </div>
                            <?= form_close(); ?>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?= base_url('public/img/home-bg.jpg'); ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1><?= $post; ?></h1>
                        <hr class="small">
                        <span class="subheading"><?= $descripcion; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
