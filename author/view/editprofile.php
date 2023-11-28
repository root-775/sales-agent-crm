<?php $id = $_SESSION['e_author_u_id'];
$result = $this->obj->viewUser($id);

foreach ($result as $row) {
    $u_email = $row['u_email'];
    $u_password = $row['u_password'];
    $u_nicename = $row['u_nicename'];
}
?>
<div class="container mt-5">
    <form action="" method="post">
        <div class="row mb-3">
            <div class="col">
                <label for="">Username</label>
            </div>
            <div class="col">
                <input type="text" class="form-control" name="u_username" value="<?= $_SESSION['e_author_u_username'] ?>" disabled>
            </div>
            <div class="col">
                <label for="">Email-ID</label>
            </div>
            <div class="col">
                <input type="email" class="form-control" name="u_email" value="<?= $u_email ?>" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="">Password</label>
            </div>
            <div class="col">
                <input type="password" class="form-control" name="u_password" value="<?= $u_password ?>">
            </div>
            <div class="col">
                <label for="">Nick Name</label>
            </div>
            <div class="col">
                <input type="text" class="form-control" name="u_nicename" value="<?= $u_nicename ?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="">Select Role</label>
            </div>
            <div class="col">
                <select name="u_role" id="" class="form-control" disabled>
                    <option value="author">Author</option>
                </select>
            </div>
            <div class="col">

            </div>
            <div class="col">

            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <input type="submit" value="Update Profile" name="update" class="form-control btn btn-danger">
            </div>
        </div>
    </form>
</div>


<?php
if(isset($_POST['update'])){
    $data = [
        'u_password' => $_POST['u_password'],
        'u_id' => $id,
    ];
    
    if($this->obj->updateUser($data)){
        echo '<script>alert("Update successful :)");</script>';
    }
}

?>