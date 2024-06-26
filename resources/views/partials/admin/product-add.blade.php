<!-- Add Modal-->
<div class="modal fade" id="productAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                   <div class="row">
                       <div class="form-group col-12">
                           <label for="stockId">Stock</label>
                           <input type="number" name="stock" class="form-control" id="stockId" value="..." required>
                       </div>
                   </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit">Set stock</button>
                </div>
            </form>
        </div>
    </div>
    </div>
