

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
    <table id="example" class="container" style="width:100%" border="2">
        <thead class="bg-primary">
            <tr>
                <th>Agent Name</th>
                <th>Note</th>
                <th>Date</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($this->obj->showAllNotes() as $row) {?>
                <tr>
                    <td><?= $row['n_username'] ?></td>
                    <td><?= $row['n_note'] ?></td>
                    <td><?= $row['create_on'] ?></td>
                </tr>
            <?php
            } ?>
        </tbody>
    </table>


<script>
    $(document).ready(function() {
        $('#example').DataTable({
            aLengthMenu: [
                [25, 50, 100, 200, -1],
                [25, 50, 100, 200, "All"]
            ]
        });
    });
</script>





