<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h3 class="float-right">Notes</h3>
        </div>
    </div>
    <textarea class="form-control" id="notes" rows="20" name="u_note" onchange="myf()"></textarea>
    <div class="row text-center mt-3">
        <div class="col-sm-12">
        <button class="btn btn-success mb-1 d-inline" onclick="funNote()">Save</button>
        </div>
    </div>
</div>

<style>
    .container {
        width: 100%;
        border: 1px solid #333;
        box-shadow: 8px 8px 5px #444;
        padding: 8px 12px;
        background-image: linear-gradient(180deg, #fff, #ddd 40%, #ccc);
    }
</style>


<script>
    
    function funNote() {
        var a = $('#notes').val();

        $.post("index.php?controller=user&function=notes", {
                notedata: a
            })
            .done(function(data) {

                alert(data);
            });
    }
</script>