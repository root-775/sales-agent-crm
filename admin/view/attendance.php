<style>
    th {
        white-space: nowrap;
        padding: 10px;
    }

    td {
        padding-left: 10px;
        padding-right: 10px;
    }
</style>
<?php if (isset($_POST['pin']) && $_POST['pass'] == '1234') { ?>
    <table id="example" class="container" border="1">
        <thead class="bg-primary">
            <tr>
                <th>Index</th>
                <th>Agent Username</th>
                <th>Login Time</th>
                <th>Logout Time</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php 
             $i = 1;
            foreach ($this->obj->showuserDetails() as $row) {  ?>

                <tr>
                    
                    <td><?= $i ?></td>
                    <td><?= $row['a_username'] ?></td>
                    <td><?= $row['a_login'] ?></td>
                    <td><?= $row['a_logout'] ?></td>
                    <td><?= $row['a_date'] ?></td>
                </tr>


            <?php
            $i++;
            } ?>
        </tbody>
    </table>


<?php } else { ?>
    <form action="" method="post">
        <div class="row">
            <div class="col-sm-2">
                <input type="password" name="pass" id="" class="form-control">
            </div>
            <div class="col-sm-2">
                <input type="submit" value="Enter Pin" name="pin" class="btn btn-primary">
            </div>
        </div>

    </form>
<?php } ?>


<script>
    $(document).ready(function() {
        $('#example').DataTable({
            aLengthMenu: [
                [25, 50, 100, 200, -1],
                [25, 50, 100, 200, "All"]
            ],
            "order": [[ 0, "desc" ]]  
        });
    });
</script>