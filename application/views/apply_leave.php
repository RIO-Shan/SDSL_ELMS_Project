<?php
error_reporting(0);
/**
 * Created by PhpStorm.
 * User: MDS Heshan
 * Date: 7/28/2019
 * Time: 9:50 PM
 */

//<?php
//session_start();
//error_reporting(0);
//include('includes/config.php');
//if(strlen($_SESSION['emplogin'])==0)
//    {
//header('location:index.php');
//}
//else{
//if(isset($_POST['apply']))
//{
//$empid=$_SESSION['eid'];
// $leavetype=$_POST['leavetype'];
//$fromdate=$_POST['fromdate'];
//$todate=$_POST['todate'];
//$description=$_POST['description'];
//$status=0;
//$isread=0;
//if($fromdate > $todate){
//                $error=" ToDate should be greater than FromDate ";
//           }
//$sql="INSERT INTO tblleaves(LeaveType,ToDate,FromDate,Description,Status,IsRead,empid) VALUES(:leavetype,:todate,:fromdate,:description,:status,:isread,:empid)";
//$query = $dbh->prepare($sql);
//$query->bindParam(':leavetype',$leavetype,PDO::PARAM_STR);
//$query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
//$query->bindParam(':todate',$todate,PDO::PARAM_STR);
//$query->bindParam(':description',$description,PDO::PARAM_STR);
//$query->bindParam(':status',$status,PDO::PARAM_STR);
//$query->bindParam(':isread',$isread,PDO::PARAM_STR);
//$query->bindParam(':empid',$empid,PDO::PARAM_STR);
//$query->execute();
//$lastInsertId = $dbh->lastInsertId();
//if($lastInsertId)
//{
//$msg="Leave applied successfully";
//}
//else
//{
//$error="Something went wrong. Please try again";
//}
//
//}
//
//    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>

        <!-- Title -->
        <title>Employe | Apply Leave</title>

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
                <div class="page-title">Apply for Leave</div>
            </div>
            <div class="col s12 m12 l8">
                <div class="card">
                    <div class="card-content">
                        <form id="example-form" method="post" name="addemp" action="<?php echo base_url(); ?>index.php/apply_leave_con/insertLeave">
                            <div>
                                <h3>Apply for Leave</h3>
                                <section>
                                    <div class="wizard-content">
                                        <div class="row">
                                            <div class="col m12">
                                                <div class="row">
                                                    <!--     -->
                                                    <?php if (isset($_SESSION['success'])) { ?>
                                                        <div class="success-msg"><i
                                                                    class="fa fa-check"> <?php echo $_SESSION['success']; ?>
                                                        </div>
                                                        <?php
                                                    } ?>
                                                    <?php if (isset($_SESSION['error'])) { ?>
                                                        <div class="error-msg"><i
                                                                    class="fa fa-times-circle"></i> <?php echo $_SESSION['error']; ?>
                                                        </div>
                                                        <?php
                                                    } ?>


                                                    <div class="input-field col  s12">
                                                        <select name="leavetype" autocomplete="off" required>
                                                            <option value="">Select leave type...</option>

                                                            <?php foreach ($Types as $types) { ?>
                                                                <option value="<?php echo $types['LeaveType']; ?>"><?php echo $types['LeaveType']; ?></option>

                                                                <?php
                                                            } ?>

                                                        </select>
                                                    </div>


                                                    <div class="input-field col m6 s12">
                                                        <label for="fromdate">From Date</label>
                                                        <input placeholder="" id="fromdate" name="fromdate"
                                                               class="masked"
                                                               type="text" data-inputmask="'alias': 'date'" required>
                                                    </div>
                                                    <div class="input-field col m6 s12">
                                                        <label for="todate">To Date</label>
                                                        <input placeholder="" id="todate" name="todate" class="masked"
                                                               type="text" data-inputmask="'alias': 'date'"  required>
                                                    </div>
                                                    <div class="input-field col m12 s12">
                                                        <label for="birthdate">Description</label>

                                                        <textarea id="textarea1" name="description"
                                                                  class="materialize-textarea" length="500"
                                                                  required></textarea>
                                                    </div>
                                                </div>
                                                <button type="submit" name="apply" id="apply"
                                                        class="waves-effect waves-light btn indigo m-b-xs">Apply
                                                </button>

                                            </div>
                                        </div>
                                </section>


                                </section>
                            </div>
                        </form>
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
    <script src="<?php echo base_url(); ?>assets/js/pages/form-input-mask.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    </body>
    </html>
<?php //} ?>