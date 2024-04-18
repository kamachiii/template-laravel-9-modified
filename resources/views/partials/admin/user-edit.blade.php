<!-- Create Modal-->
<div class="modal fade" id="userEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="modal-body">
               <div class="row">
                   <div class="form-group col-6">
                       <label for="nameId">Name</label>
                       <input type="text" name="name" class="form-control" id="nameId" value="" required>
                   </div>
                   <div class="form-group col-6">
                       <label for="emailId">Email</label>
                       <input type="email" name="email" class="form-control" id="emailId" value="" required>
                   </div>
               </div>
               <div class="row">
                   <div class="form-group col-6">
                       <label for="roleId">Role</label>
                       <select name="role" class="form-control" id="roleId" required>
                           <option value="admin">Admin</option>
                           <option value="petugas">Petugas</option>
                       </select>
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
