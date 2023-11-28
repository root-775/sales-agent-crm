<h3 class="text-center">All User</h3>
    <div class="container mt-5 border p-2">
        <table id="example" class="table" style="width:100%" border="2">
            <thead>
                <tr>
                    <th>User ID</th> <!-- 4 -->
                    <th>Username</th>
                    <th>Email</th> <!-- 5 -->
                    <th>Password</th>
                    <th>Role</th>
                    <th>Create On</th>
                </tr>
         </thead>
            <tbody>
                <?php foreach ($this->obj->allusers() as $row) {  ?>
                    <tr>
                        <td><?=$row['u_id'] ?></td>
                        <td><?=$row['u_username'] ?></td>
                        <td><?=$row['u_email'] ?></td>
                        <td><?=$row['u_password'] ?></td>
                        <td><?=$row['u_role'] ?></td>
                        <td><?=$row['create_on'] ?></td>
                    </tr>
                <?php  } ?>
            </tbody>
        </table>
    </div>

