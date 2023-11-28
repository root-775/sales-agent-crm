

<?php
if(isset($_GET['id'])){
   $id = $_GET['id'];

    foreach($this->obj->dataView($id) as $row){
        ?>
        <?php $l_p_type = explode(', ',$row['l_p_type']); ?>
        <?php $l_p_first_name = explode(', ',$row['l_p_first_name']); ?>
        <?php $l_p_middle_name = explode(', ',$row['l_p_middle_name']); ?>
        <?php $l_p_last_name = explode(', ',$row['l_p_last_name']); ?>
        <?php $l_p_dob = explode(', ',$row['l_p_dob']); ?>

        <div class="container text-center">
            <h5><span class="text-primary">Submitted By</span> <?= $row['l_submitted_by'] ?> // <span class="text-primary">Submit Date</span> <?= date('d-m-Y h:i:s A', $row['l_add_on']) ?></h5>
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
                    <td>&nbsp;Reason</td>
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
                    <th>&nbsp;Date Of Birth</th>

                </tr>
            </thead>
            <tbody>
                <?php 
                
                $i = 0;
                while($i<count($l_p_type)){
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
                
                <td>&nbsp;<?= $row['l_p_card_no'] ?></td>
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

        <?php
    }
    
    ?>
    
    <table class="container" border="2">
                <?php foreach ($this->obj->getComment($row['l_confirmation_no']) as $row1) { ?>
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

?>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
