<style>
    th, td {
        white-space: nowrap;
    }
    th, td {
      text-align: center;
      padding: 0px !important;
    }
</style>

<div id="mydiv">
    <table id="example" class="table" border="1" style="overflow-x:auto;">
        <thead >
            <tr>
                <th>Date & Time</th> 
                <!--<th>Itinerary</th>-->
                <th>Ticket ID</th>
                <th>Submitted by</th> 
                <th>Reason</th>
                <th>Booking Status</th>
                <th>Authorization</th>
                <th>Confirmation No</th>
                <th>Contact Name</th>
                <th>Service</th>
                <th>Fare Type</th>
                <th>Airline</th>
                <th>MCO</th>
                <!--<th>Comments</th> -->
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            foreach ($this->obj->showallData() as $row) {
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
                    <td style='white-space: nowrap;'><?= date('d-m-Y h:i:s A', $row['l_add_on']) ?></td>
                    <!--<td><a href="javascript:void(0);" data-href="index.php?controller=admin&function=getContent&id=<?= $row['l_confirmation_no'] ?>" class="openPopup"><i class="fas fa-tag text-danger"></i></a></td>-->
                    <td><?= $row['l_id'] ?></td>
                    <td><?= $row['l_submitted_by'] ?></td>
                    <td><?= $row['l_reason'] ?></td>
                    <td><?= $row['l_booking_status'] ?></td>
                    <td><?= $row['l_p_authorization'] ?></td>
                    <td><?= $row['l_confirmation_no'] ?></td>
                    <td style='white-space: nowrap;'><?= $row['l_contact_name'] ?></td>
                    <td style='white-space: nowrap;'><?= $row['l_service'] ?></td>
                    <td><?= $row['l_fare_type'] ?></td>
                    <td><?= $row['l_airline'] ?></td>
                    <td><?= $row['l_mco'] ?></td>
                    <!--<td style="">-->
                        <?php 
                        
                        /* $data = $this->obj->getCommentLast($row['l_confirmation_no']);
                        echo (substr($data['c_text'], -40).'...'); */?>
                    <!--</td>-->
                    <td class="text-center">
                        <a href="index.php?controller=admin&function=dataView&id=<?= $row['l_confirmation_no'] ?>" target="_blank">
                            <i class="fa fa-eye text-danger" aria-hidden="true"></i>
                        </a> 
                    </td>
                </tr>
            <?php
            } ?>
        </tbody>
         <tfoot>
            <tr>
                <th>Date & Time</th> 
                <th>Itinerary</th>
                <th>Ticket ID</th>
                <th>Submitted by</th> 
                <th>Reason</th>
                <th>Booking Status</th>
                <th>Authorization</th>
                <th>Confirmation No</th>
                <th>Contact Name</th>
                <th>Service</th>
                <th>Fare Type</th>
                <th>Airline</th>
                <th>MCO</th>
                <!--<th>Comments</th> -->
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
<?php// } ?>

</div>
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
    $('.openPopup').on('click', function() {
            var dataURL = $(this).attr('data-href');
            $('.modal-body').load(dataURL, function() {
                $('#myModal').modal({
                    show: true
                }, );
            });
        });
    setInterval(function(){
      $("#mydiv").load(window.location.href + " #mydiv" );
}, 3000);
});


</script>

