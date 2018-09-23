<div class="row">
    <div class="col-md-offset-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Update Record
            </div>
            <div class="panel-body">
                <form action="<?= base_url() ?>Test/update" method="POST">
                    <div class="form-group">
                        <label>ITEM ID</label>
                        <input type="text" name="id" class="form-control" value="<?=$id?>" readonly=""/>
                    </div>
                    <div class="form-group">
                        <label>ITEM NAME</label>
                        <input type="text" name="itmname" class="form-control" required=""/>
                    </div>
                    <div class="form-group">
                        <label>ITEM DESCRIPTION</label>
                        <input type="text" name="itmdesc" class="form-control" required=""/>
                    </div>
                    <div class="form-group">
                        <label>ITEM PRICE</label>
                        <input type="number" step="any" name="itmprice" class="form-control" required=""/>
                    </div>

                    <input type="reset" class="btn btn-default"/>
                    <input type="submit" class="btn btn-success pull-right"/>

                </form>
            </div>
        </div>
    </div>
</div>