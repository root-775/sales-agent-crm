<h3 class="text-center">Update User</h3>
    <div class="container mt-5 border p-2">
    <form action="" method="post">
        <div class="row mb-3">
            <div class="col">
                <label for="">Username</label>
            </div>
            <div class="col">
                <input type="text" class="form-control" name="u_username">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="">Enter Password</label>
            </div>
            <div class="col">
                <input type="password" class="form-control" name="u_password">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="">Select Role</label>
            </div>
            <div class="col">
                <select name="u_role" id="" class="form-control">
                    <option value="agent">Agent</option>
                    <option value="admin">Admin</option>
                    <option value="superadmin">SuperAdmin</option>
                    <option value="rrai">Rrai Agent</option>
                </select>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <input type="submit" value="Update" name="update" class="form-control btn btn-success" >
            </div>
        </div>
    </form>
    </div>

    <?php

if(isset($_POST['update'])){
    $data = [
        'u_username' => $_POST['u_username'],
        'u_password' => $_POST['u_password'],
        'u_role' => $_POST['u_role'],
    ];
    
    if($this->obj->updateUser($data)){
        echo '<script>alert("congratulations successful Update Data :)");</script>';
    }else{
        echo '<script>alert("Try Agin :)");</script>';
    }
}
?>