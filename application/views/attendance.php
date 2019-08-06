<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Title -->
    <title>Employee | Daily Attendance</title>

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

<!--Include Header page-->
<?php $this->load->view('includes/header'); ?>
<!--Include Sidebar-->
<?php $this->load->view('includes/sidebar'); ?>

<main class="mn-inner">
    <div class="row">
        <div class="col s12">
            <div class="page-title">Daily Attendance</div>
        </div>
        <div class="col s12 m12 l6">
            <div class="card">
                <div class="card-content">

                    <div class="row">
                        <?php if (isset($_SESSION['success'])) { ?>
                            <div class="success-msg"><i class="fa fa-check"></i> <?php echo $_SESSION['success']; ?></div>
                            <?php
                        } ?>
                        <?php if (isset($_SESSION['error'])) { ?>
                            <div class="error-msg"><i class="fa fa-times-circle"> <?php echo $_SESSION['error']; ?></div>
                            <?php
                        } ?>

                        <div>
                            <p>Attendance In Out Data Table will go here</p>
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
<script src="<?php echo base_url(); ?>assets/js/pages/form_elements.js"></script>

<script>
    $(document).ready(function () {

        <?php if(isset($_SESSION['log_success'])) {?>

        setTimeout(function () {
            Materialize.toast('<?php echo "Hello" . " " . $_SESSION['fname'] . " " . $_SESSION['log_success'] ?>', 4000)
        }, 2000);

        <?php }?>
    });

</script>


</body>
</html>
