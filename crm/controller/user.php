<?php
session_cache_expire(1120);
session_start();


class userController
{
    function __construct()
    {
        include_once('model/user.php');
        $this->obj = new userModel();
        // $this->obj->GetDdata(3);
    }

    function sessionCheck()
    {
        if (!isset($_SESSION["u_id"])) {
            header('location: index.php?controller=user&function=login');
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
        echo '<p style="min-width: 100%;">'.$a[0]['l_comments'].'</p>';
    }
    
    function save()
    {
        $this->sessionCheck();
        include('view/header.php');
        include('view/navbar.php');
        include('view/save.php');
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
    function profile()
    {
        $this->sessionCheck();
        include('view/header.php');
        include('view/navbar.php');
        include('view/profile.php');
        include('view/footer.php');
    }


    function leads()
    {
        $this->sessionCheck();
        include('view/header.php');
        include('view/navbar.php');
        include('view/leads.php');
        include('view/footer.php');
    }

   
    function search()
    {
        $this->sessionCheck();
        include('view/header.php');
        include('view/navbar.php');
        include('view/search.php');
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
    function data_view()
    {
        $this->sessionCheck();
        include('view/header.php');
        include('view/navbar.php');
        include('view/data_view.php');
        include('view/footer.php');
    }


    function note()
    {
        $this->sessionCheck();
        include('view/header.php');
        include('view/navbar.php');
        include('view/note.php');
        include('view/footer.php');
    }

    function attendance()
    {
        echo $this->obj->userAttendance($_POST['action']);
    }

    function notes()
    {
        $a = $this->obj->usersNote($_SESSION['u_username'], $_POST['notedata']);
        print_r($a);
    }

    function editprofile(){
        $this->sessionCheck();
        include('view/header.php');
        include('view/navbar.php');
        include('view/editprofile.php');
        include('view/footer.php');

    }
    function dataView(){
        $this->sessionCheck();
        include('view/header.php');
        include('view/navbar.php');
        include('view/data_view.php');
        include('view/footer.php');

    }
    
}
