     <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper">
                    <div class="sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src="<?php echo base_url(); ?>assets/images/profile-image.png" class="circle" alt="">
                        </div>
                        <div class="sidebar-profile-info">

                                <p><?php echo $_SESSION['fname']." ". $_SESSION['lname'] ?></p>
                                <span><?php echo $_SESSION['empno'] ?></span>
                </div>
         </div>

                    <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">

  <li class="no-padding"><a class="waves-effect waves-grey" href="<?php echo base_url();?>index.php/profile_con/profileView"><i class="material-icons">account_box</i>My Profiles</a></li>
  <li class="no-padding"><a class="waves-effect waves-grey" href="<?php echo base_url(); ?>index.php/attendance_con/attendanceView"><i class="material-icons">date_range</i>Attendance</a></li>
  <li class="no-padding"><a class="waves-effect waves-grey" href="<?php echo base_url(); ?>index.php/emp_changepassword_con/empChangePasswordView"><i class="material-icons">settings_input_svideo</i>Chnage Password</a></li>

                    <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>Leaves<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="<?php echo base_url(); ?>index.php/apply_leave_con/applyLeaveView">Apply Leave</a></li>
                                <li><a href="leavehistory.php">Leave History</a></li>
                            </ul>
                        </div>
                    </li>



                  <li class="no-padding">
                                <a class="waves-effect waves-grey" href="<?php echo base_url();?>index.php/auth_controller/logout"><i class="material-icons">exit_to_app</i>Sign Out</a>
                            </li>


                </ul>
                <div class="footer">
                    <p class="copyright"><a href="#"> RIO_SHAN </a>©</p>

                </div>
                </div>
            </aside>