<!DOCTYPE html>
<html>
    <head>
        
    <meta charset="utf-8">
    <center>
    <title>Digital Archiving</title>
    </center>
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="author" content="Dennis Ji">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!-- 1st Bootstrap name = bootstrap -->
    <link id="bootstrap-style" href="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('bootstrap/css/bootstrap-responsive.min.css');?>" rel="stylesheet">
    <link id="base-style" href="<?php echo base_url('bootstrap/css/style.css');?>" rel="stylesheet">
    <link id="base-style-responsive" href="<?php echo base_url('bootstrap/css/style-responsive.css');?>" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext" rel="stylesheet" type="text/css">
    <!-- End of bootstrap -->
    </head>
            <style>
       
        </style>
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
                height: 150px;
            }
        #searchBar {
                width: 730px;
                height: 40px;
                font-size: 20px;
                text-align: center;
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
                <a class="brand" href="<?php echo base_url('digitalController/adminDashboard'); ?>"><span><i class="halflings-icon arrow-left white" style="font-size: 40px;"></i>BACK</span></a>
               
                 
                 <button class="btn btn-danger pull-right btn-flat"  style="margin-top: 3px; width: 150px;"><i class="halflings-icon download-alt white"></i>Export to PDF</button>
                
            </div>
        </div>
    </div>

    </header>