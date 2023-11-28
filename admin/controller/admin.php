<?php
session_start();

class adminController
{
    function __construct()
    {
        include_once('model/admin.php');
        $this->obj = new adminModel();
        $this->obj->GetDdata(3);
    }

    function sessionCheck()
    {
        if (!isset($_SESSION["admin_u_id"])) {
            header('location: index.php?controller=admin&function=login');
        }
    }
    function login()
    {
        include('view/header.php');
        include('view/login.php');
        include('view/footer.php');
    }


    function getContent(){
        $this->sessionCheck();
        $a = $this->obj->getContentItinerary($_GET['id']);
        echo '<p>'.$a[0]['l_comments'].'</p>';
    }


    function home(){
        $this->sessionCheck();
        include('view/header.php');
        include('view/navbar.php');
        include('view/home.php');
        include('view/footer.php');
    }

    function attendance(){
        $this->sessionCheck();
        include('view/header.php');
        include('view/navbar.php');
        include('view/attendance.php');
        include('view/footer.php');
    }


    function reportstatus(){
        $this->sessionCheck();
        include('view/header.php');
        include('view/navbar.php');
        include('view/reportstatus.php');
        include('view/footer.php');
    }
    
    function profile(){
        $this->sessionCheck();
        include('view/header.php');
        include('view/navbar.php');
        include('view/profile.php');
        include('view/footer.php');
    }


    function quick_search(){
        $this->sessionCheck();
        include('view/header.php');
        include('view/navbar.php');
        include('view/quick_search.php');
        include('view/footer.php');
    }



    function report(){
        $this->sessionCheck();
        include('view/header.php');
        include('view/navbar.php');
        include('view/report.php');
        include('view/footer.php');
    }



    function top_10(){
        $this->sessionCheck();
        include('view/header.php');
        include('view/navbar.php');
        include('view/top_10.php');
        include('view/footer.php');
    }



    function top_high_entry(){
        $this->sessionCheck();
        include('view/header.php');
        include('view/navbar.php');
        include('view/top_high_entry.php');
        include('view/footer.php');
    }



    function date_serach(){
        $this->sessionCheck();
        include('view/header.php');
        include('view/navbar.php');
        include('view/date_serach.php');
        include('view/footer.php');
    }


    function search_by_date(){
        $this->sessionCheck();
        include('view/header.php');
        include('view/navbar.php');
        include('view/search_by_date.php');
        include('view/footer.php');
    }

    


    function dataView(){
        $this->sessionCheck();
        include('view/header.php');
        include('view/navbar.php');
        include('view/data_view.php');
        include('view/footer.php');
    }


    function editprofile(){
        $this->sessionCheck();
        include('view/header.php');
        include('view/navbar.php');
        include('view/editprofile.php');
        include('view/footer.php');
    }


    function logout(){
        $this->sessionCheck();
        include('view/header.php');
        include('view/navbar.php');
        include('view/logout.php');
        include('view/footer.php');
    }
}
