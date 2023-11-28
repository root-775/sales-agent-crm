<?php

    $c_username = $_SESSION['u_username'];
    $c_id = '';
    
    foreach ($this->obj->getCommentByCondition($c_username) as $row2) {
        if ((isset($row2['c_text']) && $row2['c_text'] == '') ) {
            $c_id = $row['c_id'];
?>

            <div class="contanier">
                <form action="" method="post">
                    <table class="container mb-5" style="width:100%" border="1">
                        <thead>
                            <tr>
                                <th style="font-size: 20px;">Comment</th>
                                <th>&nbsp;&nbsp;Comment <span class="text-danger font-weight-bold">*</span>
                                    <input type="submit" name="submit" value="Submit" class="float-right">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <input type="hidden" name="c_lead_id" value="<?= $row['l_confirmation_no'] ?>">
                                <td><textarea name="c_text" id="" cols="35" rows="10" class="form-control"></textarea></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
    <?php
    $c_text = 'dgd';
    $c_username = $_SESSION['u_username'];
    $c_lead_id = 'sfsf';
    echo $c_id ;
    $this->obj->saveComment($c_text, $c_username, $c_lead_id, $c_id);
            die();
        }

        if (isset($_POST['commsubmit']) && $_POST['commsubmit'] == 'Submit') {
            $c_text = $_POST['c_text'];
            $c_username = $_SESSION['u_username'];
            $c_lead_id = $_POST['c_lead_id'];
            $this->obj->saveComment($c_text, $c_username, $c_lead_id, $c_id);
        }
    }

    ?>
            </div>