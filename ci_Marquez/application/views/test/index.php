<div class="row">
    <div class="col-md-offset-1 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                ITEMS
            </div>
            <div class="panel-body">
                <table class="table">
                    <thead>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>DESCRIPTIONS</th>
                    <th>PRICE</th>
                    <th>ACTION</th>
                    </thead>
                    <tbody>
                        <?php foreach ($items as $item): ?>
                            <tr>
                                <td><?= $item->item_id ?></td>
                                <td><?= $item->item_name ?></td>
                                <td><?= $item->item_description ?></td>
                                <td><?= $item->item_price ?></td>
                                <td>
                                    <a class="btn btn-success" href="<?= base_url() ?>test/view/<?= $item->item_id ?>">VIEW</a>
                                    <a class="btn btn-warning" href="<?= base_url() ?>test/edit/<?= $item->item_id ?>">EDIT</a>
                                    <a class="del btn btn-danger" data-id="<?= $item->item_id ?>">DELETE</a>
                                </td>
                            </tr>    
                        <?php endforeach ?>
                    </tbody>
                </table>
                <a id="deleteall" href="#" class="btn btn-danger pull-right"><span class="glyphicon glyphicon-trash"></span> DELETE ALL</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-Success">
            <div class="panel-heading">
                ADD ITEMS
            </div>
            <div class="panel-body">
                <form action="<?= base_url() ?>Test/insert" method="POST">
                    <div class="form-group">
                        <label>ITEM NAME</label>
                        <input type="text" name="itmname" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>ITEM DESCRIPTION</label>
                        <input type="text" name="itmdesc" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>ITEM PRICE</label>
                        <input type="number" step="any" name="itmprice" class="form-control"/>
                    </div>

                    <input type="reset" class="btn btn-warning"/>
                    <input type="submit" class="btn btn-success pull-right"/>

                </form>
            </div>
        </div>
    </div>
</div>


<script>
    var id;
    $(".del").click(function(){
     id = $(this).data('id');

    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
            .then((willDelete) => {
                if (willDelete) {
                   window.location='<?=base_url()?>/test/delete/'+id
                } else {
                    swal("Your item is safe!");
                }
            });

});
$('#deleteall').click(function(){
swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
            .then((willDelete) => {
                if (willDelete) {
                   window.location='<?= base_url() ?>test/deleteall'
                } else {
                    swal("Your item is safe!");
                }
            });
});




</script>
