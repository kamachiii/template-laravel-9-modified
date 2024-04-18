
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                    <button type="button" data-toggle="modal" data-target="#productCreate" class="btn btn-primary d-none d-sm-inline-block shadow-sm btn-sm"><i class="fa-solid fa-cart-plus"></i> Add product</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                                <tr>
                                    <td class="text-center align-middle" style="width: 10vh">1</td>
                                    <td class="d-inline-flex text-center align-middle">
                                        <img src="#" alt="#" width="150px">
                                    </td>
                                    <td class="text-center align-middle">Nama</td>
                                    <td class="text-center align-middle">$ 18000</td>
                                    <td class="text-center align-middle">120 pcs</td>
                                    <td class="text-center align-middle" style="width: 25vh">
                                        <button type="button" data-toggle="modal" data-target="#productAdd" class="btn btn-primary btn-circle">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                        <button type="button" data-toggle="modal" data-target="#productEdit" class="btn btn-warning btn-circle">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <a href="#" type="button" data-confirm-delete="true" data-toggle="modal" class="btn btn-danger btn-circle">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
