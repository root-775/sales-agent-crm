<?php


define('CSSPATH', 'http://localhost/css/'); //define css path
define('JSPATH', 'http://localhost/js/'); //define css path


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