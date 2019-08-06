<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Title -->
    <title>Employee | Password Recovery</title>

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
    <link href="<?php echo base_url(); ?>assets/plugins/material-preloader/css/materialPreloader.min.css"
          rel="stylesheet">


    <!-- Theme Styles -->
    <link href="<?php echo base_url(); ?>assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
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

<?php $this->load->view('includes/header') ?>


<aside id="slide-out" class="side-nav white fixed">
    <div class="side-nav-wrapper">


        <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion" style="">
            <li>&nbsp;</li>
            <li class="no-padding"><a class="waves-effect waves-grey"
                                      href="<?php echo base_url(); ?>index.php/Page_Controller/index"><i
                            class="material-icons">account_box</i>Employe
                    Login</a></li>
            <li class="no-padding"><a class="waves-effect waves-grey"
                                      href="<?php echo base_url(); ?>index.php/Page_Controller/forgotPasswordView"><i
                            class="material-icons">account_box</i>Emp Password Recovery</a></li>

            <li class="no-padding"><a class="waves-effect waves-grey" href="#"><i class="material-icons">account_box</i>Admin
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
            <div class="page-title"><h4>Employee Password Recovery</h4></div>

            <div class="col s12 m6 l8 offset-l2 offset-m3">
                <div class="card white darken-1">

                    <div class="card-content ">
                        <span class="card-title" style="font-size:20px;">Employee details</span>


                        <div class="row">
                            <form class="col s12" name="signin" method="post"
                                  action="<?php echo base_url(); ?>index.php/forgot_password_con/pwdRecoveryCheck">
                                <?php if (isset($_SESSION['success'])) { ?>
                                    <div class="success-msg"><i
                                                class="fa fa-check"> </i><?php echo $_SESSION['success']; ?>
                                    </div>
                                    <?php
                                } ?>
                                <?php if (isset($_SESSION['error'])) { ?>
                                    <div class="error-msg"><i
                                                class="fa fa-times-circle"></i> <?php echo $_SESSION['error']; ?></div>
                                    <?php
                                } ?>

                                <div class="input-field col s12">
                                    <input id="empid" type="text" name="empid" class="validate" autocomplete="off"
                                           required>
                                    <label for="email">Employee Id</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="username" type="text" class="validate" name="username"
                                           autocomplete="off" required>
                                    <label for="username">Username</label>
                                </div>
                                <div class="col s12 right-align m-t-sm">

                                    <input type="submit" name="submit" value="Reset"
                                           class="waves-effect waves-light btn teal">
                                </div>
                            </form>
                        </div>
                    </div>

                    <?php if ($pwdChk == 'Match') { ?>


                        <div class="card-content ">

                            <span class="card-title" style="font-size:20px;">change your password </span>

                            <div class="row">
                                <form class="col s12" name="udatepwd" method="post"
                                      action="<?php echo base_url(); ?>index.php/forgot_password_con/updatePassword?id=<?php echo $chgEmpId->EmpId; ?>">

                                    <div class="input-field col s12">
                                        <input id="newpassword" type="password" name="newpassword" class="validate"
                                               autocomplete="off" onkeyup="check();" required>
                                        <label for="password">New Password</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <input id="confirmpassword" type="password" name="confirmpassword"
                                               class="validate"
                                               autocomplete="off" onkeyup="check();" required>
                                        <label for="password">Confirm Password</label>
                                        <span id="msg"></span>
                                    </div>


                                    <div class="input-field col s12">
                                        <button type="submit" name="change"
                                                class="waves-effect waves-light btn indigo m-b-xs">Change
                                        </button>

                                    </div>
                                </form>
                            </div>

                        </div>
                        <?php
                    } ?>


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

<script>
    var check = function () {
        if (document.getElementById('newpassword').value ==
            document.getElementById('confirmpassword').value) {
            document.getElementById('msg').style.color = 'green';
            document.getElementById('msg').innerHTML = 'MATCHING';
        } else {
            document.getElementById('msg').style.color = 'red';
            document.getElementById('msg').innerHTML = 'NOT MATCHING';
        }
    }
</script>

</body>
</html>