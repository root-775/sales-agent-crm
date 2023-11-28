<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English</title>



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





</head>

<body>

    <div class="container">
        <div class="row text-center float-right mt-5">
            <div class="col-sm-12">
                <img src="icon.jpg" alt="" class="rounded-circle">
            </div>
        </div>
        <div class="row text-center mt-5" id="login">
            <div class="col-sm-12">
                <a href="crm"><i class="fa fa-user" aria-hidden="true"></i> Agent</a>
                <a href="auther"><i class="fa fa-user" aria-hidden="true"></i> Auther</a>
                <a href="admin"><i class="fa fa-user-plus" aria-hidden="true"></i> Admin</a>
                <a href="superadmin"><i class="fa fa-user-plus" aria-hidden="true"></i> Super Admin</a>
            </div>
        </div>
    </div>


    <div class="main">


        <marquee behavior="" direction="right"></marquee>

    </div>
</body>

</html>


<style>
    body {
        background-image: url('crm.jpg');
        width:100%;
        /* background-image: url('example_img_girl.jpg'); */
        background-repeat: no-repeat;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    #login {
        position: absolute;
        bottom: 25px;
        right: 16px;
        font-size: 18px;
    }
</style>
<style>
    a {
        background-color: red;
        box-shadow: 0 5px 0 darkred;
        color: white;
        padding: 1em 1.5em;
        text-decoration: none;
        text-transform: uppercase;

    }

    a:hover {
        background-color: #ce0606;
        cursor: pointer;
    }

    a:active {
        box-shadow: none;
        top: 5px;
    }
</style>