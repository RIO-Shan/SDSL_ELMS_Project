<?php error_reporting(0);
//show_error("An error","500");
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Title -->
    <title>Employee | Update Employee</title>

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
<?php $this->load->view('includes/header'); ?>

<?php $this->load->view('includes/sidebar'); ?>
<main class="mn-inner">
    <div class="row">
        <div class="col s12">
            <div class="page-title">Update employee</div>
        </div>
        <div class="col s12 m12 l12">
            <div class="card">
                <div class="card-content">

                    <form id="example-form" method="post" name="updatemp"
                          action="<?php echo base_url(); ?>index.php/profile_con/updateEmployee">
                        <div>
                            <h3>Update Employee Info</h3>

                            <!--Error and Succes msg-->
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

                            <section>
                                <div class="wizard-content">
                                    <div class="row">
                                        <div class="col m6">
                                            <div class="row">

                                                <div class="input-field col  s12">
                                                    <label for="empcode">Employee Code</label>
                                                    <input name="empcode" id="empcode"
                                                           value="<?php echo $_SESSION['empno']; ?>"
                                                           type="text" autocomplete="off" readonly required>
                                                    <span id="empid-availability" style="font-size:12px;"></span>
                                                </div>


                                                <div class="input-field col m6 s12">
                                                    <label for="firstName">First name</label>
                                                    <input id="firstName" name="firstName"
                                                           value="<?php echo $EmpDtl->FirstName; ?>"
                                                           type="text" required>
                                                </div>

                                                <div class="input-field col m6 s12">
                                                    <label for="lastName">Last name </label>
                                                    <input id="lastName" name="lastName"
                                                           value="<?php echo $EmpDtl->LastName; ?>"
                                                           type="text" autocomplete="off" required>
                                                </div>

                                                <div class="input-field col s12">
                                                    <label for="email">Email</label>
                                                    <input name="email" type="email" id="email"
                                                           value="<?php echo $EmpDtl->EmailId; ?>"
                                                           autocomplete="off" readonly required>
                                                    <span id="emailid-availability" style="font-size:12px;"></span>
                                                </div>

                                                <div class="input-field col s12">
                                                    <label for="phone">Mobile number</label>
                                                    <input id="phone" name="mobileno" type="tel"
                                                           value="<?php echo $EmpDtl->Phonenumber; ?>"
                                                           maxlength="10" autocomplete="off" required>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col m6">
                                            <div class="row">
                                                <div class="input-field col m6 s12">
                                                    <select name="gender" autocomplete="off">
                                                        <option value="<?php echo $EmpDtl->Gender; ?>"><?php echo $EmpDtl->Gender; ?></option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                                <label for="birthdate">Date of Birth</label>
                                                <div class="input-field col m6 s12">

                                                    <input id="birthdate" name="dob" class="datepicker"
                                                           value="<?php echo $EmpDtl->Dob; ?>">
                                                </div>


                                                <div class="input-field col m6 s12">
                                                    <select name="department" autocomplete="off">
                                                        <option value="<?php echo $EmpDtl->Department ?>"><?php echo $EmpDtl->Department; ?></option>
                                                        <?php //$sql = "SELECT DepartmentName from tbldepartments";
                                                        //$query = $dbh->prepare($sql);
                                                        //$query->execute();
                                                        //                                                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                        //                                                        $cnt = 1;
                                                        //                                                        if ($query->rowCount() > 0) {
                                                        //                                                            foreach ($results as $resultt) { ?>
                                                        <!--                                                                <option value="-->
                                                        <?php //echo htmlentities($resultt->DepartmentName); ?><!--">-->
                                                        <?php //echo htmlentities($resultt->DepartmentName); ?><!--</option>-->
                                                        <!--                                                            --><?php //}
                                                        //                                                        } ?>
                                                    </select>
                                                </div>

                                                <div class="input-field col m6 s12">
                                                    <label for="address">Address</label>
                                                    <input id="address" name="address" type="text"
                                                           value="<?php echo $EmpDtl->Address; ?>"
                                                           autocomplete="off" required>
                                                </div>

                                                <div class="input-field col m6 s12">
                                                    <label for="city">City/Town</label>
                                                    <input id="city" name="city" type="text"
                                                           value="<?php echo $EmpDtl->City; ?>"
                                                           autocomplete="off" required>
                                                </div>

                                                <div class="input-field col m6 s12">
                                                    <label for="country">Country</label>
                                                    <input id="country" name="country" type="text"
                                                           value="<?php echo $EmpDtl->Country; ?>"
                                                           autocomplete="off" required>
                                                </div>


                                                <div class="input-field col s12">
                                                    <button type="submit" name="update" id="update"
                                                            class="waves-effect waves-light btn indigo m-b-xs">UPDATE
                                                    </button>

                                                </div>

                                            </div>
                                        </div>
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

</body>
</html>
