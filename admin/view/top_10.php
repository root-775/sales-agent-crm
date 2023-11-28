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
<table id="example" class="container mb-5" style="width:100%" border="2">
    <thead>
        <tr>
            <th>Date & Time</th> <!-- 4 -->
            <th>Ticket ID</th>
            <th>Submitted by</th> <!-- 5 -->
            <th>Booking Status</th>
            <th>Reason</th>
            <th>Confirmation No</th>
            <th>Service</th>
            <th>Booking Type</th>
            <th>Fare Type</th>
            <th>Class</th>
            <th>Airline</th>
            <th>Passenger Type</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Date Of Birth</th>
            <th>Contact Name</th>
            <th>Phone Type</th>
            <th>Phone No.</th>
            <th>Alt Phone No.</th>
            <th>Email-ID</th>
            <th>Alt Email-ID</th>
            <th>Address</th>
            <th>Passenger</th>
            <th>No Of Passenger</th>
            <th>Net Amt</th>
            <th>MCO</th>
            <th>Gross</th>
            <th>Miscellaneous</th>
            <th>Net. Amount</th>
            <th>MCO</th>
            <th>Gross</th>
            <th>Authorization</th>
            <th>Transaction Type</th> <!-- 1 -->
            <th>Payment Methods</th>
            <th>Card Holder Name</th>
            <th>Phone No.</th>
            <th>Card Number</th>
            <th>Month</th>
            <th>Year</th>
            <th>CVV</th>
            <th>Street Address</th>
            <th>City</th>
            <th>State</th>
            <th>Zip Code</th>
            <th>Comments</th> <!-- 3 -->
            <th>Itinerary</th><!-- 2 -->
        </tr>
    </thead>
    <tbody>
        <?php

        $i = 0;
        foreach ($this->obj->showallDataTop100() as $row) {
            $i++;
            $color = 'white';
                switch($row['l_booking_status']){
                    case 'Confirmed':
                        $color = '#008000';
                        break;
                    case 'Pending':
                        $color = '#ffffff';
                        break;
                    case 'Hold':
                        $color = '#ffffff';
                        break;
                    case 'Declined':
                        $color = '#a64dff';
                        break;
                    case 'Refund':
                        $color = '#e60000';
                        break;
                    default:
                        $color = 'white';
                        break;
                }
        ?>
            <tr style="background-color: <?=$color ?>;">
                
                <td><?= date('d-m-Y h:i:s A', $row['l_add_on']) ?></td>
                <td><?= $row['l_id'] ?></td>
                <td><?= $row['l_submitted_by'] ?></td>
                <td><?= $row['l_booking_status'] ?></td>
                <td>&nbsp;<?= $row['l_reason'] ?></td>
                <td><?= $row['l_confirmation_no'] ?></td>
                
                <td><?= $row['l_service'] ?></td>
                <td><?= $row['l_booking_type'] ?></td>
                
                <td><?= $row['l_fare_type'] ?></td>
                <td><?= $row['l_class'] ?></td>
                <td><?= $row['l_airline'] ?></td>
                <td><?= $row['l_p_type'] ?></td>
                <td><?= $row['l_p_first_name'] ?></td>
                <td><?= $row['l_p_middle_name'] ?></td>
                <td><?= $row['l_p_last_name'] ?></td>
                <td><?= $row['l_p_dob'] ?></td>
                <td><?= $row['l_contact_name'] ?></td>
                <td><?= $row['l_phone_type'] ?></td>
                <td><?= $row['l_phone_no'] ?></td>
                <td><?= $row['l_alt_phone_no'] ?></td>
                <td><?= $row['l_email'] ?></td>
                <td><?= $row['l_alt_email'] ?></td>
                <td><?= $row['l_address'] ?></td>
                <td><?= $row['l_passenger_type'] ?></td>
                <td><?= $row['l_passenger_no_of'] ?></td>
                <td><?= $row['l_passenger_net_amount'] ?></td>
                <td><?= $row['l_mco'] ?></td>
                <td><?= $row['l_gross'] ?></td>
                <td><?= $row['l_a_micellaneous'] ?></td>
                <td><?= $row['l_a_net_amount'] ?></td>
                <td><?= $row['l_a_mco'] ?></td>
                <td><?= $row['l_a_gross'] ?></td>
                <td><?= $row['l_p_authorization'] ?></td>
                <td><?= $row['l_p_transaction_type'] ?></td>
                <td><?= $row['l_p_payment_method'] ?></td>
                <td><?= $row['l_p_card_holder_name'] ?></td>
                <td><?= $row['l_p_card_holder_phone_no'] ?></td>
                <td style=" white-space: nowrap;">XXXX-XXXX-XXXX-<?= substr($row['l_p_card_no'], -4); ?></td>
                <td><?= $row['l_p_card_mm'] ?></td>
                <td><?= $row['l_p_card_yy'] ?></td>
                <td><?= $row['l_p_card_cvv'] ?></td>
                <td><?= $row['l_p_street_address'] ?></td>
                <td><?= $row['l_p_city'] ?></td>
                <td><?= $row['l_p_state'] ?></td>
                <td><?= $row['l_p_zip_code'] ?></td>
                <th>
                    <?php $data = $this->obj->getCommentLast($row['l_confirmation_no']);
                    echo ($data['c_text']);
                    ?>
                </th>
                <td><a href="javascript:void(0);" data-href="index.php?controller=admin&function=getContent&id=<?= $row['l_confirmation_no'] ?>" class="openPopup btn btn-primary">View Itinerary</a></td>
            </tr>











        <?php
        } ?>


    </tbody>
</table>



<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Itinerary</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<script>
    $(document).ready(function() {
        $('#example').DataTable({
            aLengthMenu: [
                [25, 50, 100, 200, -1],
                [25, 50, 100, 200, "All"]
            ]
        });


        $('.openPopup').on('click', function() {
            var dataURL = $(this).attr('data-href');
            $('.modal-body').load(dataURL, function() {
                $('#myModal').modal({
                    show: true
                }, );
            });
        });


    });
</script>