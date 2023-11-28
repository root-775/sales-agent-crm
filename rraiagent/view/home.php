<h3 class="text-center">User Registation</h3>
    <div class="container mt-5 border p-2">
    <form action="" method="post">
        <div class="row mb-3">
            <div class="col">
                <label for="">Enter username</label>
            </div>
            <div class="col">
                <input type="text" class="form-control" name="u_username">
            </div>
            <div class="col">
                <label for="">Enter Email-ID</label>
            </div>
            <div class="col">
                <input type="email" class="form-control" name="u_email">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="">Enter Password</label>
            </div>
            <div class="col">
                <input type="password" class="form-control" name="u_password">
            </div>
            <div class="col">
                <label for="">Enter Nick Name</label>
            </div>
            <div class="col">
                <input type="text" class="form-control" name="u_nicename">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="">Select Role</label>
            </div>
            <div class="col">
                <select name="u_role" id="" class="form-control">
                    <option value="agent">Agent</option>
                    <option value="author">Author</option>
                    <option value="admin">Admin</option>
                    <option value="superadmin">SuperAdmin</option>
                </select>
            </div>
            <div class="col">
                Registation Date
            </div>
            <div class="col">
                <input type="date" name="u_registered" id="" class="form-control">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <input type="submit" value="Registation" name="insert" class="form-control btn btn-success" >
            </div>
        </div>
    </form>
    </div>

    <?php

if(isset($_POST['insert'])){
    date_default_timezone_set("Asia/Kolkata");
    $mytime = date(time());
    $data = [
        'u_username' => $_POST['u_username'],
        'u_email' => $_POST['u_email'],
        'u_password' => $_POST['u_password'],
        'u_nicename' => $_POST['u_nicename'],
        'u_role' => $_POST['u_role'],
        'u_displayname' => 'Seles Agent',
        'u_registered' => $_POST['u_registered'],
        'u_add_on' => $mytime,
    ];
    
    if($this->obj->addUsers($data)){
        echo '<script>alert("congratulations your registration was successful :)");</script>';
    }else{
        echo '<script>alert("Try Agin :)");</script>';
    }
}
?>