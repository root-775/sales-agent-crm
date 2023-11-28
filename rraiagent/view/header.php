<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">





  <?php


  define('CSSPATH', 'https://oaqus.com/english/crm/view/css/'); //define css path
  define('JSPATH', 'https://oaqus.com/english/crm/view/js/'); //define css path


  $bootstrap_css = 'bootstrap.css'; //css item to display
  $bootstrap_min_css = 'bootstrap.min.css';
  $dataTables_bootstrap4_min_css = 'dataTables.bootstrap4.min.css';
  $fontawesome_css = 'fontawesome.min.css';
  $jquery_js = 'jquery-3.5.1.js';
  $dataTables_js = 'jquery.dataTables.min.js';
  $dataTables_bootstrap4_min_js = 'dataTables.bootstrap4.min.js';
  $popper_js = 'popper.min.js';
  $fontawesome_js = 'fontawesome.min.js';
  $bootstrap_js = 'bootstrap.min.js';
  $nicEdit = 'nicEdit.js';

  ?>


  <link rel="stylesheet" href="<?php echo (CSSPATH . "$bootstrap_css"); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo (CSSPATH . "$bootstrap_min_css"); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo (CSSPATH . "$dataTables_bootstrap4_min_css"); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo (CSSPATH . "$fontawesome_css"); ?>" type="text/css">


  <script src="<?php echo (JSPATH . "$jquery_js"); ?>"></script>
  <script src="<?php echo (JSPATH . "$dataTables_js"); ?>"></script>
  <script src="<?php echo (JSPATH . "$dataTables_bootstrap4_min_js"); ?>"></script>
  <script src="<?php echo (JSPATH . "$popper_js"); ?>"></script>
  <script src="<?php echo (JSPATH . "$fontawesome_js"); ?>"></script>
  <script src="<?php echo (JSPATH . "$bootstrap_js"); ?>"></script>
  <script src="<?php echo (JSPATH . "$nicEdit"); ?>"></script>
  <title>Agent Panel</title>
</head>

<body>
