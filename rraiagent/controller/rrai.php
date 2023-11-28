<?php 
session_start();
class rraiController
{
    function __construct()
    {
        include_once('model/rrai.php');
        $this->obj = new rraiModel();
    }

    function sessionCheck()
    {
        if (!isset($_SESSION["u_id"])) {
            header('location: index.php?controller=rrai&function=login');
        }
    }
    function login()
    {
        include('view/header.php');
        include('view/login.php');
        include('view/footer.php');
    }
    function home()
    {
        $this->sessionCheck();
        include('view/header.php');
        include('view/navbar.php');
        include('view/home.php');
        include('view/footer.php');
    }
    
    function userupdate()
    {
        $this->sessionCheck();
        include('view/header.php');
        include('view/navbar.php');
        include('view/userupdate.php');
        include('view/footer.php');
    }
    
    
    function allusers()
    {
        $this->sessionCheck();
        include('view/header.php');
        include('view/navbar.php');
        include('view/allusers.php');
        include('view/footer.php');
    }

    function report()
    {
        $this->sessionCheck();
        include('view/header.php');
        include('view/navbar.php');
        include('view/report.php');
        include('view/footer.php');
    }

    function logout()
    {
        $this->sessionCheck();
        include('view/header.php');
        include('view/navbar.php');
        include('view/logout.php');
        include('view/footer.php');
    }
}


?>