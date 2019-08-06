<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Title -->
    <title>SDSL_LMS | Admin</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <meta name="description" content="Responsive Admin Dashboard Template"/>
    <meta name="keywords" content="admin,dashboard"/>
    <meta name="author" content="Steelcoders"/>

    <!-- Styles -->
    <link type="text/css" rel="stylesheet"
          href="<?php echo base_url(); ?>assets/plugins/materialize/css/materialize.min.css"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/plugins/material-preloader/css/materialPreloader.min.css"
          rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>


    <style>

        h4 {
            position: relative;
            font-family: sans-serif;
            text-transform: uppercase;
            font-size: 2em;
            letter-spacing: 4px;
            overflow: hidden;
            background: linear-gradient(90deg, #000, #fff, #000);
            background-repeat: no-repeat;
            background-size: 80%;
            animation: animate 5s linear infinite;
            -webkit-background-clip: text;
            -webkit-text-fill-color: rgba(255, 255, 255, 0);
        }

        @keyframes animate {
            0% {
                background-position: -500%;
            }
            100% {
                background-position: 500%;
            }
        }

        .signin-page {
            height: 100%;
            width: 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-image: url("<?php echo base_url(); ?>assets/images/bg2.jpg");
            background-size: cover
        }

    </style>
</head>
<body class="signin-page">

<div >

    <main class="mn-inner container">
        <h4 align="center"><a href="<?php echo base_url(); ?>index.php/Page_Controller/index">Employee
                Leave Management System | Admin Login</a></h4>
        <div class="valign">
            <div class="row">

                <div class="col s12 m6 l4 offset-l4 offset-m3">
                    <div class="card white darken-1">
                        <div class="card-content ">
                            <span class="card-title">Sign In</span>
                            <div class="row">
                                <form class="col s12" name="signin" method="post">
                                    <div class="input-field col s12">
                                        <input id="username" type="text" name="username" class="validate"
                                               autocomplete="off" required>
                                        <label for="email">Username</label>
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

<!--<!-- Javascripts -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-2.2.0.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/materialize/js/materialize.min.js"></script>
<script src=".<?php echo base_url(); ?>assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-blockui/jquery.blockui.js"></script>
<script src="<?php echo base_url(); ?>assets/js/alpha.min.js"></script>

</body>
</html>