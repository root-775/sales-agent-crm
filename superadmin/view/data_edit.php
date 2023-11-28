<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    foreach ($this->obj->dataViewEdit($id) as $row) {
?>
        <div class="container text-center">
            <h5><span class="text-primary">Submitted By</span> <?= $row['l_submitted_by'] ?> // <span class="text-primary">Submit Date</span> <?= date('d-m-Y h:i:s A', $row['l_add_on']) ?></h5>
        </div>
        <form action="" method="post" class="p-5">
            <input type="hidden" name="l_id" value="<?= $row['l_id'] ?>">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <b class="h4">Booking Details</b>
                    </div>
                </div>
                <div class="row h6">
                    <div class="col-sm-3">
                        Confirmation
                    </div>
                    <div class="col-sm-2">
                        Service <span class="text-danger font-weight-bold">*</span>
                    </div>
                    <div class="col-sm-2">
                        Booking Type
                    </div>
                    <div class="col-sm-2">
                        Class
                    </div>
                    <div class="col-sm-2">
                        Fare Type
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="l_confirmation_no" value="<?= $row['l_confirmation_no'] ?>">
                    </div>
                    <div class="col-sm-2">
                        <select name="l_service" id="" class="form-control" required>
                            <option value="<?= $row['l_service'] ?>"><?= $row['l_service'] ?></option>
                            <optgroup label="Change Status">
                            <option value="">None</option>
                            <option>New Booking</option>
                            <option>Changes</option>
                            <option>Cancellation with Credit</option>
                            <option>Cancellation with Refund</option>
                            <option>Miscellaneous</option>
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="l_booking_type" value="<?= $row['l_booking_type'] ?>">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="l_class" value="<?= $row['l_class'] ?>">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="l_fare_type" value="<?= $row['l_fare_type'] ?>">
                    </div>
                </div>
                <div class="row h6">
                    <div class="col-sm-2">
                        Airline
                    </div>
                    <div class="col-sm-2">
                        Booking Status <span class="text-danger font-weight-bold">*</span>
                    </div>
                    <div class="col-sm-2">
                        Reason <span class="text-danger font-weight-bold">*</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="l_airline" value="<?= $row['l_airline'] ?>">
                    </div>
                    <div class="col-sm-2">
                    <!-- <input type="text" class="form-control" name="l_booking_status" value="<?= $row['l_booking_status'] ?>"> -->
                        <select name="l_booking_status" id="" class="form-control" required>
                            <option value="<?= $row['l_booking_status'] ?>"><?= $row['l_booking_status'] ?></option>
                            <optgroup label="Change Status">
                                <option>Confirmed</option>
                                <option>Pending</option>
                                <option>Hold</option>
                                <option>Declined</option>
                                <option>Refund</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="l_reason" value="<?= $row['l_reason'] ?>">
                    </div>
                </div>
            </div>
            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <b class="h4">Passenger</b>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        Passenger Type
                    </div>
                    <div class="col-sm-2">
                        First Name
                    </div>
                    <div class="col-sm-2">
                        Middle Name
                    </div>
                    <div class="col-sm-2">
                        Last Name
                    </div>
                    <div class="col-sm-2">
                        Date Of Birth
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="l_p_type" value="<?= $row['l_p_type'] ?>">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="l_p_first_name" value="<?= $row['l_p_first_name'] ?>">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="l_p_middle_name" value="<?= $row['l_p_middle_name'] ?>">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="l_p_last_name" value="<?= $row['l_p_last_name'] ?>">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="l_p_dob" value="<?= $row['l_p_dob'] ?>">
                    </div>
                </div>
            </div>
            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <b class="h4">Contact Details</b>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        Contact Name
                    </div>
                    <div class="col-sm-2">
                        Phone Type
                    </div>
                    <div class="col-sm-3">
                        Phone No.
                    </div>
                    <div class="col-sm-3">
                        Alt Phone No.
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="l_contact_name" value="<?= $row['l_contact_name'] ?>">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="l_phone_type" value="<?= $row['l_phone_type'] ?>">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="l_phone_no" value="<?= $row['l_phone_no'] ?>">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="l_alt_phone_no" value="<?= $row['l_alt_phone_no'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        Email-ID
                    </div>
                    <div class="col-sm-3">
                        Alt Email-ID
                    </div>
                    <div class="col-sm-5">
                        Address
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="l_email" value="<?= $row['l_email'] ?>">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="l_alt_email" value="<?= $row['l_alt_email'] ?>">
                    </div>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="l_address" value="<?= $row['l_address'] ?>">
                    </div>
                </div>
            </div>
            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <b class="h4">Price Details</b>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        Passenger
                    </div>
                    <div class="col-sm-2">
                        No Of Passenger
                    </div>
                    <div class="col-sm-2">
                        Net Amt
                    </div>
                    <div class="col-sm-2">
                        MCO
                    </div>
                    <div class="col-sm-2">
                        Gross
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="l_passenger_type" value="<?= $row['l_passenger_type'] ?>">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="l_passenger_no_of" value="<?= $row['l_passenger_no_of'] ?>">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="l_passenger_net_amount" value="<?= $row['l_passenger_net_amount'] ?>">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="l_mco" value="<?= $row['l_mco'] ?>">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="l_gross" value="<?= $row['l_gross'] ?>">
                    </div>
                </div>
            </div>
            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <b class="h4">Ancillaries Details</b>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        Miscellaneous
                    </div>
                    <div class="col-sm-2">
                        Net. Amount
                    </div>
                    <div class="col-sm-2">
                        MCO
                    </div>
                    <div class="col-sm-2">
                        Gross
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="l_a_micellaneous" value="<?= $row['l_a_micellaneous'] ?>">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="l_a_net_amount" value="<?= $row['l_a_net_amount'] ?>">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="l_a_mco" value="<?= $row['l_a_mco'] ?>">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="l_a_gross" value="<?= $row['l_a_gross'] ?>">
                    </div>
                </div>
            </div>
            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <b class="h4">Payment Details</b>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        Authorization
                    </div>
                    <div class="col-sm-2">
                        Payment Methods
                    </div>
                    <div class="col-sm-2">
                        Card Holder Name
                    </div>
                    <div class="col-sm-2">
                        Phone No.
                    </div>
                    <div class="col-sm-2">
                        Transaction Type
                    </div>
                    <div class="col-sm-2">
                        Card Number
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="l_p_authorization" value="<?= $row['l_p_authorization'] ?>">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="l_p_payment_method" value="<?= $row['l_p_payment_method'] ?>">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="l_p_card_holder_name" value="<?= $row['l_p_card_holder_name'] ?>">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="l_p_card_holder_phone_no" value="<?= $row['l_p_card_holder_phone_no'] ?>">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="l_p_transaction_type" value="<?= $row['l_p_transaction_type'] ?>">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="l_p_card_no" value="<?= $row['l_p_card_no'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-1">
                        Month
                    </div>
                    <div class="col-sm-1">
                        Year
                    </div>
                    <div class="col-sm-2">
                        CVV
                    </div>
                    <div class="col-sm-2">
                        Street Address
                    </div>
                    <div class="col-sm-2">
                        City
                    </div>
                    <div class="col-sm-2">
                        State
                    </div>
                    <div class="col-sm-2">
                        Zip Code
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-1">
                        <input type="text" class="form-control" name="l_p_card_mm" value="<?= $row['l_p_card_mm'] ?>">
                    </div>
                    <div class="col-sm-1">
                        <input type="text" class="form-control" name="l_p_card_yy" value="<?= $row['l_p_card_yy'] ?>">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="l_p_card_cvv" value="<?= $row['l_p_card_cvv'] ?>">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="l_p_street_address" value="<?= $row['l_p_street_address'] ?>">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="l_p_city" value="<?= $row['l_p_city'] ?>">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="l_p_state" value="<?= $row['l_p_state'] ?>">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="l_p_zip_code" value="<?= $row['l_p_zip_code'] ?>">
                    </div>
                </div>
            </div>
            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <b class="h4">Itinerary</b>
                    </div>
                </div>
                <div class="col-sm-12 p-0">
                    <textarea type="text" name="l_comments" class="form-control" rows="10"> <?= $row['l_comments'] ?> </textarea>
                </div>
            </div>
            <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12"> <br>
                     <input type="submit" value="Update Data" name="updatedata" class="btn btn-success text-center">
                </div>
            </div>
            </div>
        </form>

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
if (isset($_POST['updatedata'])) {

    


    $allData = [
        'l_confirmation_no' => $_POST['l_confirmation_no'],
        'l_service' => $_POST['l_service'],
        'l_booking_type' => $_POST['l_booking_type'],
        'l_booking_status' => $_POST['l_booking_status'],
        'l_reason' => $_POST['l_reason'],
        'l_fare_type' => $_POST['l_fare_type'],
        'l_class' => $_POST['l_class'],
        'l_airline' => $_POST['l_airline'],
        'l_p_type' => $_POST["l_p_type"],
        'l_p_first_name' => $_POST["l_p_first_name"],
        'l_p_middle_name' => $_POST["l_p_middle_name"],
        'l_p_last_name' => $_POST["l_p_last_name"],
        'l_p_dob' => $_POST["l_p_dob"],
        'l_contact_name' => $_POST['l_contact_name'],
        'l_phone_type' => $_POST['l_phone_type'],
        'l_phone_no' => $_POST['l_phone_no'],
        'l_alt_phone_no' => $_POST['l_alt_phone_no'],
        'l_email' => $_POST['l_email'],
        'l_alt_email' => $_POST['l_alt_email'],
        'l_address' => $_POST['l_address'],
        'l_passenger_type' => $_POST['l_passenger_type'],
        'l_passenger_no_of' => $_POST['l_passenger_no_of'],
        'l_passenger_net_amount' => $_POST['l_passenger_net_amount'],
        'l_mco' => $_POST['l_mco'],
        'l_gross' => $_POST['l_gross'],
        'l_a_micellaneous' => $_POST['l_a_micellaneous'],
        'l_a_net_amount' => $_POST['l_a_net_amount'],
        'l_a_mco' => $_POST['l_a_mco'],
        'l_a_gross' => $_POST['l_a_gross'],
        'l_p_authorization' => $_POST['l_p_authorization'],
        'l_p_payment_method' => $_POST['l_p_payment_method'],
        'l_p_card_holder_name' => $_POST['l_p_card_holder_name'],
        'l_p_card_holder_phone_no' => $_POST['l_p_card_holder_phone_no'],
        'l_p_transaction_type' => $_POST['l_p_transaction_type'],
        'l_p_card_no' => $_POST['l_p_card_no'],
        'l_p_card_mm' => $_POST['l_p_card_mm'],
        'l_p_card_yy' => $_POST['l_p_card_yy'],
        'l_p_card_cvv' => $_POST['l_p_card_cvv'],
        'l_p_street_address' => $_POST['l_p_street_address'],
        'l_p_city' => $_POST['l_p_city'],
        'l_p_state' => $_POST['l_p_state'],
        'l_p_zip_code' => $_POST['l_p_zip_code'],
        'l_comments' => $_POST['l_comments'],
        'l_id' => $_POST['l_id'],
    ];
    
    if ($this->obj->updateData($allData)) {
        echo '<script>alert("Data has been update succeessfully");</script>';
    }
}
?>



<script type="text/javascript">
    bkLib.onDomLoaded(function() {
        nicEditors.allTextAreas()
    });
</script>
<style>
    .nicEdit-panel {
        display: none;
    }
</style>




<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>


