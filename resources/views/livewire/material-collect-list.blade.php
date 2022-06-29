<div class="tab-pane" id="case-histroy_list" role="tabpanel">
    <!-- form start -->
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <label style="display: inline-flex;align-items: center;"> Show <select name="length"
                    class="form-control form-control-sm form-select form-select-sm">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select> entries
            </label>
        </div>
        <div class="col-sm-12 col-md-6 text-end">
            <label style="display: inline-flex;align-items: center;">Search:
                <input type="search" class="form-control form-control-sm" placeholder="">
            </label>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered w-100">
            <thead>
                <tr class="table-primary">
                    <th>Stock Receive By</th>
                    <th>Receive From</th>
                    <th>Receive Date</th>
                    <th>Total Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Airin Shiddique</td>
                    <td>Office Outlet</td>
                    <td>2021-03-03</td>
                    <td>1</td>
                    <td>
                        <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                            data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-add">
                            <i class=" fas fa-eye"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                            <i class="fas fa-check"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2">
                            <i class="fas fa-check"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2"
                            data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-add">
                            <i class="fas fa-pen"></i></button>
                        <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                            <i class="fas fa-trash-alt"></i></button>
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
    <!-- end col -->
</div>