<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Title -->
    <title>SDSL_LMS | Home Page</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <meta name="description" content="Responsive Admin Dashboard Template"/>
    <meta name="keywords" content="admin,dashboard"/>
    <meta name="author" content="Steelcoders"/>

    <!-- Styles -->
    <link type="text/css" rel="stylesheet"
          href="<?php echo base_url(); ?>assets/plugins/materialize/css/materialize.min.css"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialdesign.css"/>
    <link type="text/css" rel="stylesheet"
          href="<?php echo base_url(); ?>assets/plugins/material-preloader/css/materialPreloader.min.css"/>


    <!-- Theme Styles -->
    <link type="text/css" href="<?php echo base_url(); ?>assets/css/alpha.min.css" rel="stylesheet"/>
    <link type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet"/>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<!--    css Styles for error success msgs-->
    <style>
        .success-msg,
        .error-msg {
            margin: 10px 0;
            padding: 10px;
            border-radius: 3px 3px 3px 3px;
        }

        .success-msg {
            color: #270;
            background-color: #DFF2BF;
        }

        .error-msg {
            color: #D8000C;
            background-color: #FFBABA;
        }

    </style>

</head>
<body>

<div class="loader-bg"></div>
<div class="loader">
    <div class="preloader-wrapper big active">
        <div class="spinner-layer spinner-blue">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div>
            <div class="gap-patch">
                <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
        <div class="spinner-layer spinner-spinner-teal lighten-1">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div>
            <div class="gap-patch">
                <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
        <div class="spinner-layer spinner-yellow">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div>
            <div class="gap-patch">
                <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
        <div class="spinner-layer spinner-green">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div>
            <div class="gap-patch">
                <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
    </div>
</div>
<div class="mn-content fixed-sidebar">
    <header class="mn-header navbar-fixed">
        <nav class="cyan darken-1">
            <div class="nav-wrapper row">
                <section class="material-design-hamburger navigation-toggle">
                    <a href="#" data-activates="slide-out"
                       class="button-collapse show-on-large material-design-hamburger__icon">
                        <span class="material-design-hamburger__layer"></span>
                    </a>
                </section>
                <div class="header-title col s4">
                    <span class="chapter-title">SDSL_LMS | ශ්‍රී ලංකා මිනින්දෝරු දෙපාර්තමේන්තුව </span>
                </div>
            </div>
        </nav>
    </header>


    <aside id="slide-out" class="side-nav white fixed">
        <div class="side-nav-wrapper">


            <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion" style="">
                <li>&nbsp;</li>
                <li class="no-padding"><a class="waves-effect waves-grey" href="<?php echo base_url(); ?>index.php/Page_Controller/index"><i
                                class="material-icons">account_box</i>Employe
                        Login</a></li>
                <li class="no-padding"><a class="waves-effect waves-grey" href="<?php echo base_url(); ?>index.php/Page_Controller/forgotPasswordView"><i
                                class="material-icons">account_box</i>Emp Password Recovery</a></li>

                <li class="no-padding"><a class="waves-effect waves-grey" href="<?php echo base_url(); ?>index.php/Page_Controller/adminLoginView"><i
                                class="material-icons">account_box</i>Admin
                        Login</a></li>

            </ul>
            <div class="footer">
                <p class="copyright"><a href="#">RIO_SHAN </a>©</p>

            </div>
        </div>
    </aside>
    <main class="mn-inner">
        <div class="row">
            <div class="col s12">
                <div class="page-title"><h4>Welcome to Employee Leave Management System</h4></div>

                <div class="col s12 m6 l8 offset-l2 offset-m3">
                    <div class="card white darken-1">

                        <div class="card-content ">
                            <span class="card-title" style="font-size:20px;">Employee Login</span>
                            <div class="row">

                                <form class="col s12" name="signin" method="post"
                                      action="<?php echo base_url(); ?>index.php/auth_controller/User_Login">

<!--                                    Display flash error and success msgs -->
                                    <?php if (isset($_SESSION['success'])) { ?>
                                        <div class="success-msg"><i
                                                    class="fa fa-check"></i> <?php echo $_SESSION['success'] ?></div>
                                        <?php
                                    } ?>

                                    <?php if (isset($_SESSION['error'])) { ?>
                                        <div class="error-msg"><i
                                                    class="fa fa-times-circle"></i> <?php echo $_SESSION['error']; ?>
                                        </div>
                                        <?php
                                    } ?>

                                    <div class="input-field col s12">
                                        <input id="username" type="text" name="username" class="validate"
                                               autocomplete="off" required>
                                        <label for="username">Username</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="password" type="password" class="validate" name="password"
                                               autocomplete="off" required>
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="col s12 right-align m-t-sm">

                                        <input type="submit" name="signin" value="Sign in"
                                               class="waves-effect waves-light btn teal">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</div>
<div class="left-sidebar-hover"></div>

<!-- Javascripts -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-2.2.0.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/materialize/js/materialize.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-blockui/jquery.blockui.js"></script>
<script src="<?php echo base_url(); ?>assets/js/alpha.min.js"></script>

</body>
</html>