<?php 

session_start();
$employee_email = $_SESSION['employee_email'];
$employee_name = $_SESSION['employee_name'];

if(!isset($_SESSION['employee_email'])){
    header("location: index.php");

}


include('admin/config/connect.php');
include("l.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Title -->
    <title>Logic Temple | Employee Portal</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <meta name="description" content="Responsive Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="admin/assets/plugins/materialize/css/materialize.min.css"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="admin/assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">        


    <!-- Theme Styles -->
    <link href="admin/assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
    <link href="admin/assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body class="mailbox">
    <!--navbar-->
        <?php
            include ("include/main-navbar.php");
        ?>
    <!--main navbar include end-->
    <!--left navbar start here-->

        <?php
            include ("include/left-navbar.php");
        ?>

    <!--navbar-->
        <div class="mn-content valign-wrapper">
            <main class="mn-inner container">
                <div class="valign">
                      <div class="row">
                          <div class="col s12">
                              <div class="card white darken-1">
                                  <div class="card-content ">
                                      <div class="page-title"><span class="card-title" align="center">Leave Apply<br/><br/></span></div>
                                       <div class="row">
                                           <form class="col s12" method="POST" action="process/leave-apply-process.php">

                                             <div class="input-field col s12">
                                                   <input id="hdate" type="text" name="apply_date" class="datepicker">
                                                   <label for="meal_date" >Date  </label>
                                               </div>
                                                <div class="input-field col s12">
                                                   
                                                   <input id="cause" name="leave_cause" type="text" class="validate">
                                                   <label for="cause">Cause</label>
                                                </div>
                                                 <div class="input-field col s12">
                                                 
                                                   <textarea id="textarea1" name="leave_details" type="text" class="materialize-textarea"></textarea>
                                                   <label for="textarea1">Details</label>
                                                </div>
                                               <div class="col s12 right-align m-t-sm">
                                                   <!--<a href="sign-up.html" class="waves-effect waves-grey btn-flat">sign up</a>-->
                                                   <button href="" class="waves-effect waves-light btn teal" name="leave_apply">Apply</button>
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
        
        <!-- Javascripts -->

        <script src="admin/assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="admin/assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="admin/assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="admin/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="admin/assets/js/alpha.min.js"></script>
        <script src="admin/assets/plugins/materialize/js/form-select2.js"></script>
        <script src="admin/assets/plugins/materialize/js/form_elements.js"></script>


    </body>

    </html>

