<!-- Edit Modal-->
<div class="modal fade" id="productEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="modal-body">
               <div class="row">
                   <div class="form-group col-6">
                       <label for="nameId">Name</label>
                       <input type="text" name="name" class="form-control" id="nameId" value="..." required>
                   </div>
                   <div class="form-group col-6">
                       <label for="priceId">Price</label>
                       <input type="number" name="price" class="form-control" id="priceId" value="..." required>
                   </div>
               </div>
               <div class="row">
                   <div class="form-group col-6">
                       <label for="stockId">Stock</label>
                       <input type="number" name="stock" class="form-control" id="stockId" value="" required>
                   </div>
                   <div class="form-group col-6">
                       <label for="imageId">Image Product</label>
                       <input type="file" accept="image/*" name="image" class="form-control-file id="imageId">
                   </div>
               </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </form>
    </div>
</div>
</div>
