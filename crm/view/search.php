<div class="contanier p-5">
    <form action="" method="post">
        <!-- Quick Search -->
        <div class="p-1" style="border-bottom: 5px solid #ccc; border-color: royalblue;">
            <div class="row">
                <div class="col-sm-3">
                    Confirmation
                    <input type="text" class="form-control" name="l_confirmation_no">
                </div>
                <div class="col-sm-3">
                    First Name
                    <input type="text" class="form-control" name="l_p_first_name">
                </div>
                <div class="col-sm-3">
                    Last Name
                    <input type="text" class="form-control" name="l_p_last_name">
                </div>
                <div class="col-sm-3">
                    Phone Number
                    <input type="text" class="form-control" name="l_phone_no" maxlength="10">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    Ticket-ID
                    <input type="text" class="form-control" name="l_id">
                </div>
                <div class="col-sm-3">
                    Email-ID
                    <input type="text" class="form-control" name="l_email">
                </div>
                <div class="col-sm-2"><br>
                    <input type="submit" value="Search" name="seacrh" class="btn btn-success">
                </div>
            </div> <br>
        </div>
    </form>
</div>


<?php
$c_id = '';

if (isset($_POST['seacrh'])) {
    $confirmation = $_POST['l_confirmation_no'];
    $last_name = $_POST['l_p_last_name'];
    $c_username = $_SESSION['u_username'];
    

    // foreach($this->obj->setCommentByCondition($c_username, $confirmation) as $row){
    //     $c_id = $row['c_id'];
    // }
    
    
    
    $i = 0;
    $data = $this->obj->seach($confirmation, $_POST['l_p_first_name'], $last_name, $_POST['l_phone_no'], $_POST['l_id'], $_POST['l_email']);
    if ($data == null) {
        echo '
        <script>
            alert("Sorry, no data found");
        </script>
        ';
        die();
    }

    foreach ($data as $row) {


        $confirmation = $row['l_confirmation_no'];

        foreach($this->obj->setCommentByCondition($c_username, $confirmation) as $row1){
            $c_id = $row1['c_id'];
        }        
?>

        <?php $l_p_type = explode(', ', $row['l_p_type']); ?>
        <?php $l_p_first_name = explode(', ', $row['l_p_first_name']); ?>
        <?php $l_p_middle_name = explode(', ', $row['l_p_middle_name']); ?>
        <?php $l_p_last_name = explode(', ', $row['l_p_last_name']); ?>
        <?php $l_p_dob = explode(', ', $row['l_p_dob']); ?>

        <div class="container text-center">
            <h5><span class="text-primary">Submit By</span> <?= $row['l_submitted_by'] ?> // <span class="text-primary">Submit Date</span> <?= date('d-m-Y h:i:s A', $row['l_add_on']) ?></h5>
        </div>
        <div class="container">
            <b style="font-size: 22px;     MARGIN-LEFT: -13PX;">Booking Details</b>
        </div>

        <table class="container mb-5" style="width:100%" border="1">
            <thead>
                <tr>
                    <th>&nbsp;Confirmation</th>
                    <th>&nbsp;Service</th>
                    <th>&nbsp;Booking Type</th>
                    <th>&nbsp;Booking Status</th>
                    <th>&nbsp;Reason</th>
                    <th>&nbsp;Fare Type</th>
                    <th>&nbsp;Class</th>
                    <th>&nbsp;Airline</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>&nbsp;<?= $row['l_confirmation_no'] ?></td>
                    <td>&nbsp;<?= $row['l_service'] ?></td>
                    <td>&nbsp;<?= $row['l_booking_type'] ?></td>
                    <td>&nbsp;<?= $row['l_booking_status'] ?></td>
                    <td>&nbsp;<?= $row['l_reason'] ?></td>
                    <td>&nbsp;<?= $row['l_fare_type'] ?></td>
                    <td>&nbsp;<?= $row['l_class'] ?></td>
                    <td>&nbsp;<?= $row['l_airline'] ?></td>
                </tr>
            </tbody>
        </table>

        <div class="container">
            <b style="font-size: 22px;     MARGIN-LEFT: -13PX;">Passenger</b>
        </div>
        <table class="container mb-5" style="width:100%" border="1">
            <thead>
                <tr>
                    <th>&nbsp;Passenger Type</th>
                    <th>&nbsp;First Name</th>
                    <th>&nbsp;Middle Name</th>
                    <th>&nbsp;Last Name</th>
                    <th>&nbsp;DOB</th>

                </tr>
            </thead>
            <tbody>
                <?php

                $i = 0;
                while ($i < count($l_p_type)) {
                ?>
                    <tr>
                        <td>&nbsp;<?php echo $l_p_type[$i]; ?></td>
                        <td>&nbsp;<?php echo $l_p_first_name[$i]; ?></td>
                        <td>&nbsp;<?php echo $l_p_middle_name[$i]; ?></td>
                        <td>&nbsp;<?php echo $l_p_last_name[$i]; ?></td>
                        <td>&nbsp;<?php echo $l_p_dob[$i]; ?></td>
                    <tr>

                    <?php
                    $i++;
                }
                    ?>

            </tbody>
        </table>
        <div class="container">
            <b style="font-size: 22px;     MARGIN-LEFT: -13PX;">Contact Details</b>
        </div>
        <table class="container mb-5" style="width:100%" border="1">
            <thead>
                <tr>
                    <th style="width: 100px;">&nbsp;Contact Name</th>
                    <th style="width: 100px;">&nbsp;Phone Type</th>
                    <th style="width: 100px;">&nbsp;Phone No.</th>
                    <th style="width: 100px;">&nbsp;Alt Phone No.</th>
                    <th style="width: 100px;">&nbsp;Email-ID</th>
                    <th style="width: 100px;">&nbsp;Alt Email-ID</th>
                    <th style="width: 100px;">&nbsp;Address</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>&nbsp;<?= $row['l_contact_name'] ?></td>
                    <td>&nbsp;<?= $row['l_phone_type'] ?></td>
                    <td>&nbsp;<?= $row['l_phone_no'] ?></td>
                    <td>&nbsp;<?= $row['l_alt_phone_no'] ?></td>
                    <td>&nbsp;<?= $row['l_email'] ?></td>
                    <td>&nbsp;<?= $row['l_alt_email'] ?></td>
                    <td>&nbsp;<?= $row['l_address'] ?></td>
                </tr>
            </tbody>
        </table>
        <div class="container">
            <b style="font-size: 22px;     MARGIN-LEFT: -13PX;">Price Details</b>
        </div>
        <table class="container mb-5" style="width:100%" border="1">
            <thead>
                <tr>
                    <th>&nbsp;Passenger</th>
                    <th>&nbsp;No Of Passenger</th>
                    <th>&nbsp;Net Amt</th>
                    <th>&nbsp;MCO</th>
                    <th>&nbsp;Gross</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>&nbsp;<?= $row['l_passenger_type'] ?></td>
                    <td>&nbsp;<?= $row['l_passenger_no_of'] ?></td>
                    <td>&nbsp;<?= $row['l_passenger_net_amount'] ?></td>
                    <td>&nbsp;<?= $row['l_mco'] ?></td>
                    <td>&nbsp;<?= $row['l_gross'] ?></td>
                </tr>
            </tbody>
        </table>
        <div class="container">
            <b style="font-size: 22px;     MARGIN-LEFT: -13PX;">Ancillaries Details</b>
        </div>
        <table class="container mb-5" style="width:100%" border="1">
            <thead>
                <tr>
                    <th>&nbsp;Miscellaneous</th>
                    <th>&nbsp;Net. Amount</th>
                    <th>&nbsp;MCO</th>
                    <th>&nbsp;Gross</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>&nbsp;<?= $row['l_a_micellaneous'] ?></td>
                    <td>&nbsp;<?= $row['l_a_net_amount'] ?></td>
                    <td>&nbsp;<?= $row['l_a_mco'] ?></td>
                    <td>&nbsp;<?= $row['l_a_gross'] ?></td>
                </tr>
            </tbody>
        </table>
        <div class="container">
            <b style="font-size: 22px;     MARGIN-LEFT: -13PX;">Payment Details</b>
        </div>







        <table class="container mb-5" style="width:100%" border="1">
            <thead>
                <tr>
                    <th>&nbsp;Authorization</th>
                    <th>&nbsp;Payment Methods</th>
                    <th>&nbsp;Card Holder Name</th>
                    <th colspan="5">&nbsp;Phone No.</th>
                    <th>&nbsp;Transaction Type</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>&nbsp;<?= $row['l_p_authorization'] ?></td>
                    <td>&nbsp;<?= $row['l_p_payment_method'] ?></td>
                    <td>&nbsp;<?= $row['l_p_card_holder_name'] ?></td>
                    <td colspan="5">&nbsp;<?= $row['l_p_card_holder_phone_no'] ?></td>
                    <td>&nbsp;<?= $row['l_p_transaction_type'] ?></td>
                </tr>
            </tbody>
        </table>
        <table class="container mb-5" style="width:100%" border="1">
            <thead>
                <tr>

                    <th>&nbsp;Card Number</th>
                    <th>&nbsp;Street Address</th>
                    <th>&nbsp;City</th>
                    <th>&nbsp;State</th>
                    <th>&nbsp;Zip Code</th>

                </tr>
            </thead>
            <tbody>

                <td>&nbsp;XXXX-XXXX-XXXX<?= substr($row['l_p_card_no'], -4); ?></td>
                <td>&nbsp;<?= $row['l_p_street_address'] ?></td>
                <td>&nbsp;<?= $row['l_p_city'] ?></td>
                <td>&nbsp;<?= $row['l_p_state'] ?></td>
                <td>&nbsp;<?= $row['l_p_zip_code'] ?></td>
            </tbody>
        </table>


        <div class="container">
            <b style="font-size: 22px;     MARGIN-LEFT: -13PX;">Itinerary</b>
        </div>
        <table class="container mb-5" style="width:100%" border="1">
            <thead>
                <tr>
                    <th>&nbsp;&nbsp;&nbsp;Itinerary</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="6"><?= $row['l_comments'] ?></td>
                </tr>
            </tbody>
        </table>
        <form action="" method="post">
            <div class="container mb-5" style="width:100%" border="1">
                <div class="row">
                    <div class="col-sm-12">
                        &nbsp;&nbsp;Comment <span class="text-danger font-weight-bold">*</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                    <input type="hidden" name="c_id" value="<?= $c_id; ?>">
                        <input type="hidden" name="c_lead_id" value="<?= $row['l_confirmation_no'] ?>">
                        <textarea class="form-control" name="c_text" id="" cols="35" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 mt-3 text-center">
                        <input name="commsubmit" type="submit" value="Submit" class="btn btn-primary ">
                    </div>
                </div>
            </div>
        </form>
        <table class="container" border="2">
            <?php foreach ($this->obj->getComment($row['l_confirmation_no']) as $row1) {     ?>
                    <tr>
                        <td style="width: 160px;">
                            <?= $row1['c_added_on'] ?>
                            <hr>
                        </td>
                        <td style="width: 160px;">
                            <?= $row1['c_username'] ?>
                            <hr>
                        </td>
                        <td>
                            <?= $row1['c_text'] ?>
                            <hr>
                        </td>
                    </tr>

               

            <?php } ?>
        </table>



<?php
    }
}

if (isset($_POST['commsubmit']) && $_POST['commsubmit'] == 'Submit') {
    $c_text = $_POST['c_text'];
    $c_username = $_SESSION['u_username'];
    $c_lead_id = $_POST['c_lead_id'];
    $c_id = $_POST['c_id'];

    $this->obj->saveComment($c_text, $c_username, $c_lead_id,  $c_id);
}

?>






<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>