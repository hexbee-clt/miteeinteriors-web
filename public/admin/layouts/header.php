<!doctype html>
<html lang="en">

    
<head>
        
        <meta charset="utf-8" />
        <title>Cremount</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <!-- <link rel="shortcut icon" href="assets/images/favicon.ico"> -->

        <link href="assets/libs/%40fullcalendar/core/main.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/%40fullcalendar/daygrid/main.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/%40fullcalendar/bootstrap/main.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/%40fullcalendar/timegrid/main.min.css" rel="stylesheet" type="text/css" />

        <!-- preloader css -->
        <link rel="stylesheet" href="assets/css/preloader.min.css" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <!-- style Css-->
        <link href="assets/css/style.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>
<body>
    <div id="layout-wrapper">
        <?php include('./assets/layouts/connection.php') ?>
        <?php include('./assets/layouts/menu.php') ?>
        <?php 

  if (empty($_SESSION['usename'])) {
    // header('Location: index.php');
    ?>
    <script>window.location.href = './index.php';</script> 
        <?php
  }else{
?>
ljbkhvgcfxd
    <!-- <script>window.location.href = './index.php';</script>  -->
<?php
  }
?>
        