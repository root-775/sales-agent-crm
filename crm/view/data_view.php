<?php
if(isset($_GET['id'])){
   $id = $_GET['id'];

    foreach($this->obj->dataView($id) as $row){
        ?>
        <div class="container text-center">
            <h5><span class="text-primary">Submitted By</span> <?= $row['l_submitted_by']?> // <span class="text-primary">Submit Date</span> <?= date('d-m-Y h:i:s A', $row['l_add_on'])?></h5>
        </div>
        <table class="container mb-5" style="width:100%">
            <thead>
                <tr>
                    <th style="font-size: 20px;">Booking Details</th>
                    <th>Confirmation</th>
                    <th>Service</th>
                    <th>Booking Type</th>
                    <th>Booking Status</th>
                    <th>Reason</th>
                    <th>Fare Type</th>
                    <th>Class</th>
                    <th>Airline</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td><?= $row['l_confirmation_no']?></td>
                    <td><?= $row['l_service']?></td>
                    <td><?= $row['l_booking_type']?></td>
                    <td><?= $row['l_booking_status']?></td>
                    <td><?= $row['l_reason'] ?></td>
                    <td><?= $row['l_fare_type']?></td>
                    <td><?= $row['l_class']?></td>
                    <td><?= $row['l_airline']?></td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><br><br></td>
                </tr>
            </tbody>
            
            <thead>
                <tr>
                    <th style="font-size: 20px;">Passenger</th>
                    <th>Passenger Type</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Date Of Birth</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td><?= $row['l_p_type']?></td>
                    <td><?= $row['l_p_first_name']?></td>
                    <td><?= $row['l_p_middle_name']?></td>
                    <td><?= $row['l_p_last_name']?></td>
                    <td><?= $row['l_p_dob']?></td>
                </tr>
            </tbody>

            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><br><br></td>
                </tr>
            </tbody>

            <thead>
                <tr>
                    <th style="font-size: 20px;">Contact Details</th>
                    <th>Contact Name</th>
                    <th>Phone Type</th>
                    <th>Phone No.</th>
                    <th>Alt Phone No.</th>
                    <th>Email-ID</th>
                    <th>Alt Email-ID</th>
                    <th>Address</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td><?= $row['l_contact_name']?></td>
                    <td><?= $row['l_phone_type']?></td>
                    <td><?= $row['l_phone_no']?></td>
                    <td><?= $row['l_alt_phone_no']?></td>
                    <td><?= $row['l_email']?></td>
                    <td><?= $row['l_alt_email']?></td>
                    <td><?= $row['l_address']?></td>
                </tr>
            </tbody>



            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><br><br></td>
                </tr>
            </tbody>

            <thead>
                <tr>
                    <th style="font-size: 20px;">Price Details</th>
                    <th>Passenger</th>
                    <th>No Of Passenger</th>
                    <th>Net Amt</th>
                    <th>MCO</th>
                    <th>Gross</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td><?= $row['l_passenger_type']?></td>
                    <td><?= $row['l_passenger_no_of']?></td>
                    <td><?= $row['l_passenger_net_amount']?></td>
                    <td><?= $row['l_mco']?></td>
                    <td><?= $row['l_gross']?></td>
                </tr>
            </tbody>





            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><br><br></td>
                </tr>
            </tbody>

            <thead>
                <tr>
                    <th style="font-size: 20px;">Ancillaries Details</th>
                    <th>Miscellaneous</th>
                    <th>Net. Amount</th>
                    <th>MCO</th>
                    <th>Gross</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td><?= $row['l_a_micellaneous']?></td>
                    <td><?= $row['l_a_net_amount']?></td>
                    <td><?= $row['l_a_mco']?></td>
                    <td><?= $row['l_a_gross']?></td>
                </tr>
            </tbody>




            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><br><br></td>
                </tr>
            </tbody>

            <thead>
                <tr>
                    <th style="font-size: 20px;">Payment Details</th>
                    <th>Authorization</th>
                    <th>Payment Methods</th>
                    <th>Card Holder Name</th>
                    <th>Phone No.</th>
                    <th>Transaction Type</th>
                    <th>Card Number</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td><?= $row['l_p_authorization']?></td>
                    <td><?= $row['l_p_payment_method']?></td>
                    <td><?= $row['l_p_card_holder_name']?></td>
                    <td><?= $row['l_p_card_holder_phone_no']?></td>
                    <td><?= $row['l_p_transaction_type']?></td>
                    <td>XXXX-XXXX-XXXX<?= substr($row['l_p_card_no'], -4);?></td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th></th>
                    <th>Month</th>
                    <th>Year</th>
                    <th>CVV</th>
                    <th>Street Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Zip Code</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td><?= $row['l_p_card_mm']?></td>
                    <td><?= $row['l_p_card_yy']?></td>
                    <td><?= $row['l_p_card_cvv']?></td>
                    <td><?= $row['l_p_street_address']?></td>
                    <td><?= $row['l_p_city']?></td>
                    <td><?= $row['l_p_state']?></td>
                    <td><?= $row['l_p_zip_code']?></td>
                </tr>
            </tbody>

            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><br><br></td>
                </tr>
            </tbody>

            <thead>
                <tr>
                    <th style="font-size: 20px;">Comment</th>
                    <th>&nbsp;&nbsp;Comments</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td colspan="6"><?= $row['l_comments']?></td>
                </tr>
            </tbody>
            








        </table>

        <?php
    }
}

?>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

