<div class="tab-pane" id="purchase_order_list" role="tabpanel">
    <!-- end row -->
    <div class="row">
        <div class="col-sm-12 col-md-4">
            <label style="display: inline-flex;align-items: center;"> Show <select name="length"
                                                                                   class="form-control form-control-sm form-select form-select-sm">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select> entries
            </label>
        </div>
        <div class="col-sm-12 col-md-4 text-center">
            <div class="mb-3 text-center">
                <label class="form-label">requisition-list List</label>
                <select class=" form-select">
                    <option>--Select--</option>
                    <option value="1">Approved requisition-list</option>
                    <option value="2" selected>All requisition-list</option>
                </select>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 text-end">
            <label style="display: inline-flex;align-items: center;">Search:
                <input type="search" class="form-control form-control-sm" placeholder="">
            </label>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered w-100">
            <thead>
            <tr class="table-primary">
                <th>SL</th>
                <th>Job No</th>
                <th>Project</th>
                <th>Supplier</th>
                <th>Date</th>
                <th>Items</th>
                <th>Cost</th>
                <th>VAT</th>
                <th>Discount</th>
                <th>Send for approve</th>
                <th>Is Approved</th>
                <th>Paid Amount</th>
                <th>Is Paid</th>
                <th>Log</th>
                <th class="nowrap">action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Puja</td>
                <td>puja</td>
                <td>reading</td>
                <td>first to last</td>
                <td>Puja</td>
                <td>puja</td>
                <td>reading</td>
                <td>first to last</td>
                <td>Puja</td>
                <td>puja</td>
                <td>yousuf</td>
                <td>reading</td>
                <td>first to last</td>
                <td>first to last</td>
                <td>
                    <button type="button"
                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                            data-bs-toggle="modal" data-bs-target=".journal-modal-xl-add">
                        <i class="mdi mdi-eye"></i>
                    </button>
                    <button type="button"
                            class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1">
                        <i class="fas fa-check"></i>
                    </button>
                    <button type="button"
                            class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1">
                        <i class="fas fa-check"></i>
                    </button>
                    <button type="button"
                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                            data-bs-toggle="modal" data-bs-target=".journal-modal-xl-add">
                        <i class="mdi mdi-pencil"></i>
                    </button>
                    <button type="button"
                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                        <i class="fas fa-arrow-circle-right"></i>
                    </button>
                    <button type="button"
                            class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-6">
            Showing 1 to 2 of 2 entries
        </div>
        <div class="col-sm-12 col-md-6 text-end">
            <nav>
                <ul class="pagination" style="justify-content: end;">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
