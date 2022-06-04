@extends('layouts.master')
@section('title') @lang('translation.Starter_Page') @endsection

@section('content')
@component('components.breadcrumb')
@slot('li_1') DashBoard @endslot
@slot('title')VOCATIONAL MARKING SUB CATEGORIES @endslot
@endcomponent
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row mb-3">
          <div class="col-6">
            <h4 class="card-title">VOCATIONAL MARKING SUB CATEGORIES</h4>
          </div>
          <div class="col-6 text-end">
            <button type="button" class="btn btn-outline-info waves-effect waves-light "
            data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view"> <i
                class="fas fa-plus-circle"></i> Add</button>
          </div>
        </div>
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
          <table class="table w-100 table-bordered">
            <thead>
              <tr class="table-primary">
                <th>Sub Category Name</th>
                <th>Category Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">Paper Bag making</td>
                <td class="text-center">Paper work</td>
                <td>
                  <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
                    <i class="mdi mdi-eye"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                      class="fas fa-check"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"><i
                      class="fas fa-check"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
                    <i class="mdi mdi-pencil"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                    <i class="bx bx-dollar"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                    <i class="fas fa-arrow-circle-right"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
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
    </div>
  </div> <!-- end col -->
</div> <!-- end row -->
<!--  Extra Large modal example -->
    <div class="modal fade material-callects-modal-xl-view" id="" tabindex="-2" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-xl">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title text-primary">Vocational Marking Sub Category Create</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <!-- journal form start -->  
                  <div class="col-md-12 d-flex">
                    <div class="col-md-6 mb-3 text-center">
                        <label class="form-label">Sub Category Name</label>
                        <input class="form-control" type="text" placeholder="Sub Category Name" id="example-text-input"> 
                    </div>
                    <div class="col-md-6 ms-2  mb-3 text-center">
                        <label class="form-label">Category Name</label>
                        <select id="formrow-inputState" class="form-select">
                            <option value="0">Select</option>
                            <option value="1">Computer training</option>
                            <option value="2">Painting</option>
                            <option value="3">Paper work</option>
                            <option value="4">Carpet Slipper</option>
                            <option value="5">Photography</option>
                        </select>
                    </div>
                  </div>  
                  <!-- journal form end -->
                 </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-success  waves-light" data-bs-toggle="modal" data-bs-target=".social-communication-view"> Save</button>
                <button type="button" class="btn btn-outline-danger waves-effect waves-light" data-bs-dismiss="modal"> Close</button> 
            </div>
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
@endsection
@section('script')

@endsection