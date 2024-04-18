
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th style="width: 10vh">Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Action</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th style="width: 10vh">Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Action</th>
                            <th>Subtotal</th>
                        </tr>
                    </tfoot>
                    <tbody id="product-list"></tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row fixed-bottom d-flex justify-content-end align-content-center" style="margin-left: 18%; width: 83%; height: 70px; border-top: 3px solid #EEE4B1; background-color: white;">
        <div class="col text-center" style="margin-right: 50px;">
            <form action="#" method="get">
                <div id="shop"></div>
                <button type="submit" class="btn btn-primary">Next</button>
            </form>
        </div>
    </div>

