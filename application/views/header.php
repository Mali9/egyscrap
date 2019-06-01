<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="robots" content="all,follow">
        <meta name="googlebot" content="index,follow,snippet,archive">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Universal - All In 1 Template</title>

        <meta name="keywords" content="">

        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

        <!-- Bootstrap and Font Awesome css -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

        <!-- Css animations  -->
        <link href="<?= base_url() ?>css/animate.css" rel="stylesheet">

        <!-- Theme stylesheet, if possible do not edit this stylesheet -->
        <link href="<?= base_url() ?>css/style.default.css" rel="stylesheet" id="theme-stylesheet">

        <!-- Custom stylesheet - for your changes -->
        <link href="<?= base_url() ?>css/custom.css" rel="stylesheet">

        <!-- Responsivity for older IE -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

        <!-- Favicon and apple touch icons-->
        <link rel="shortcut icon" href="<?= base_url() ?>img/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="<?= base_url() ?>img/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url() ?>img/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url() ?>img/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>img/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url() ?>img/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url() ?>img/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url() ?>img/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url() ?>img/apple-touch-icon-152x152.png" />
        <!-- owl carousel css -->

        <link href="<?= base_url() ?>css/owl.carousel.css" rel="stylesheet">
        <link href="<?= base_url() ?>css/owl.theme.css" rel="stylesheet">
        <style>
            .ads:hover{
                text-decoration: none;
            }
        </style>
    </head>

    <body>

        <div id="all">

            <header>

                <!-- *** TOP ***
    _________________________________________________________ -->
                <div id="top">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-5 contact">
                                <p class="hidden-sm hidden-xs">Contact us on +420 777 555 333 or hello@universal.com.</p>
                                <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="#" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                                </p>
                            </div>
                            <div class="col-xs-7">
                                <div class="social">
                                    <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                                </div>

                                <div class="login">
                                    <?php if($this->session->userdata('logged_in') == TRUE): ?>
                                    <a href="<?= base_url() ?>Admin/logout"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Logout</span></a>
                                    <?php else: ?>
                                    <a href="<?= base_url() ?>Admin"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Login</span></a>
                                    
                                    <a href="<?= base_url() ?>Admin/reg"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">Register</span></a>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- *** TOP END *** -->

                <!-- *** NAVBAR ***
        _________________________________________________________ -->

                <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

                    <div class="navbar navbar-default yamm" role="navigation" id="navbar">

                        <div class="container">
                            <div class="navbar-header">

                                <a class="navbar-brand home" href="<?= base_url() ?>Home">
                                    <img src="<?= base_url() ?>img/logo.png" alt="Universal logo" class="" style="width: 300px;height: 100px; position: relative;bottom: 10px;right: 220px;">                                </a>
                                <div class="navbar-buttons">
                                    <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                        <span class="sr-only">Toggle navigation</span>
                                        <i class="fa fa-align-justify"></i>
                                    </button>
                                </div>
                            </div>
                            <!--/.navbar-header -->

                            <div class="navbar-collapse collapse" id="navigation">

                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown" style="color: white;background-color: #009edf;height: 100px;">
                                        <a href="javascript: void(0) " class="dropdown-toggle" data-toggle="dropdown" style="margin-top: 20px;color: white">تواصل معنا<b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="contact.html">راسلنا</a>
                                            </li>
                                            <li><a href="contact2.html">عن الموقع </a>
                                            </li>


                                        </ul>
                                    </li>

                                    <?php foreach ($cats as $cat): ?>
                                    <?php if ($cat->sub == 0): ?> 
                                    <li style="background-color: <?= $cat->color ?>; height: 100px">
                                        <a href="<?= base_url() ?>Home/cat/<?= $cat->id ?>" style="text-decoration: none;color: white;font-size: 15px; margin-top: 20px;"> <?= $cat->cat_name ?></a>

                                    </li>
                                    <!-- ========== FULL WIDTH MEGAMENU END ================== -->
                                    <?php else : ?>
                                    <li class="dropdown" style="background-color: <?= $cat->color ?>; color: white;height: 100px">
                                        <a style="color: white; font-size: 15px;margin-top: 20px" href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown"><?= $cat->cat_name ?> <b class="caret" ></b></a>
                                        <ul class="dropdown-menu">
                                            <?php foreach ($sub_cat as $sub): ?>

                                            <?php if ($sub->cat_id == $cat->id): ?>
                                            <li><a href="<?= base_url() ?>Home/sub_cat/<?= $sub->id ?>"><?= $sub->sub_cat_name ?></a>
                                            </li>
                                            <?php endif; ?>
                                            <?php endforeach; ?>



                                        </ul>
                                    </li>
                                    <?php endif; ?>

                                    <?php endforeach; ?>
                                    <li style="height: 120px">

                                        <a href="<?= base_url() ?>Home" style="text-decoration: none; margin-top: 20px">الصفحه الرئيسيه</a>

                                    </li>
                                </ul>

                            </div>
                            <!--/.nav-collapse -->



                            <div class="collapse clearfix" id="search">

                                <form class="navbar-form" role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <span class="input-group-btn">

                                            <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>

                                        </span>
                                    </div>
                                </form>

                            </div>
                            <!--/.nav-collapse -->

                        </div>


                    </div>
                    <!-- /#navbar -->

                </div>

                <!-- *** NAVBAR END *** -->

            </header>