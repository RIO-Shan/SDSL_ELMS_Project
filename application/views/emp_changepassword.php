<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Title -->
    <title>Employee | Change Password</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <meta name="description" content="Responsive Admin Dashboard Template"/>
    <meta name="keywords" content="admin,dashboard"/>
    <meta name="author" content="Steelcoders"/>

    <!-- Styles -->
    <link type="text/css" rel="stylesheet"
          href="<?php echo base_url(); ?>assets/plugins/materialize/css/materialize.min.css"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet"
          href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"/>
    <link href="<?php echo base_url(); ?>assets/plugins/material-preloader/css/materialPreloader.min.css"
          rel="stylesheet">
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
<?php $this->load->view('includes/header'); ?>

<?php $this->load->view('includes/sidebar'); ?>

<main class="mn-inner">
    <div class="row">
        <div class="col s12">
            <div class="page-title">Change Pasword</div>
        </div>
        <div class="col s12 m12 l6">
            <div class="card">
                <div class="card-content">

                    <div class="row">
                        <form class="col s12" name="chngpwd" method="post"
                              action="<?php echo base_url(); ?>index.php/emp_changepassword_con/empChangePassword">
                            <?php if (isset($_SESSION['success'])) { ?>
                                <div class="success-msg"><i class="fa fa-check"> </i><?php echo $_SESSION['success']; ?>
                                </div>
                                <?php
                            } ?>
                            <?php if (isset($_SESSION['error'])) { ?>
                                <div class="error-msg"><i
                                            class="fa fa-times-circle"></i> <?php echo $_SESSION['error']; ?></div>
                                <?php
                            } ?>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="curr_password" type="password" class="validate" autocomplete="off"
                                           name="password" required>
                                    <label for="password">Current Password</label>
                                </div>

                                <div class="input-field col s12">
                                    <input id="new_password" type="password" name="newpassword" class="validate"
                                           autocomplete="off" onkeyup="check();" required>
                                    <label for="password">New Password</label>
                                </div>

                                <div class="input-field col s12">
                                    <input id="confirm_password" type="password" name="confirmpassword" class="validate"
                                           autocomplete="off" onkeyup='check();' required>
                                    <label for="password">Confirm Password</label>
                                    <span id="message"></span>
                                </div>


                                <div class="input-field col s12">
                                    <button type="submit" name="change"
                                            class="waves-effect waves-light btn indigo m-b-xs"> Change
                                    </button>

                                </div>


                            </div>

                        </form>
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
<script src="<?php echo base_url(); ?>assets/js/pages/form_elements.js"></script>

<script>

    var check = function () {
        if (document.getElementById('new_password').value ==
            document.getElementById('confirm_password').value) {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'MATCHING';
        } else {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'NOT MATCHING';
        }
    }

</script>

</body>
</html>
