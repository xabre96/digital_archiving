<!DOCTYPE html>
<html>
    <head>
        
    <meta charset="utf-8">
    <title>Digital Archiving</title>
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="author" content="Dennis Ji">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
        <!-- 1st Bootstrap name = bootstrap -->
    <link id="bootstrap-style" href="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('bootstrap/css/bootstrap-responsive.min.css');?>" rel="stylesheet">
    <link id="base-style" href="<?php echo base_url('bootstrap/css/style.css');?>" rel="stylesheet">
    <link id="base-style-responsive" href="<?php echo base_url('bootstrap/css/style-responsive.css');?>" rel="stylesheet">
    <!-- End of bootstrap -->

        <style type="text/css">.jqstooltip {
                position: absolute;
                left: 0px;
                top: 0px;
                visibility: hidden;
                background: rgb(0, 0, 0) transparent;
                background-color: rgba(0,0,0,0.6);
                filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
                color: white;
                font: 10px arial, san serif;
                text-align: left;
                white-space: nowrap;
                padding: 5px;
                border: 1px solid white;
                z-index: 10000;
                     }
         .jqsfield { 
                color: white;
                font: 10px arial, san serif;
                text-align: left;
            }
        #ImgLogo {
                height: 200px;
            }
        #searchBar {
                width: 730px;
                height: 40px;
                font-size: 20px;
                text-align: center;
                }

        #ImgBanner{
                    height: 125px;
                    width: 580px;
                    margin-top: 15px;
                }    
            </style>
    </head>
    <header>
        <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <center>
               <img src="<?php echo base_url('images/banner-logo.png'); ?>" alt="image-banner" id="ImgBanner"/>
                </center>
                  <!-- <a href="<?php echo base_url('digitalController/logoutUser');?>" class="btn btn-flat pull-right" style="background-color: green; border-color: none; width: 100px;">Logout</a> -->
  
                <div>
                    <a href="<?php echo base_url('digitalController/logoutUser');?>" class="btn btn-small btn-danger pull-right" style="width: 100px; margin-right: 60px; color: white;">Logout</a>
                </div>
            </div>
        </div>
    </div>

    </header>