@extends('layouts.master')
@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
@endsection
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row mb-3">
          <div class="col-6">
            <h4 class="card-title">Account Details</h4>
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
             <x-input-text type="search" name="search"/>
            </label>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table w-100 table-bordered">
            <thead>
              <tr class="table-primary">
                <th>Account No</th>
                <th>Account Name</th>
                <th>Initial Balance</th>
                <th>Note</th>
                <th>Log</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="col-1">12345678</td>
                <td class="col-1">test account</td>
                <td class="col-1">0.00</td>
                <td class="col-1">testing purpose</td>
                <td class="col-4">Create: Shamima Shikder @ 2020-12-22 15:03:12
                  Update: Ohidul Hassan @ 2022-05-12 13:11:49</td>
                <td>
                  <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">
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
                  <h5 class="modal-title text-primary"> Accounting Details
                  </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <!-- journal form start -->
                  <!-- journal form start -->
                  {{-- Show Cause Subject --}}
                  <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Account No :</label>
                        <x-input-text name="account_no" placeholder="Account No" type="number"></x-input-text>
                    </div>
                  </div>  
                  <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Account Name :</label>
                        <x-input-text name="account_name" placeholder="Account Name"></x-input-text>
                    </div>
                  </div>  
                  <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Initial Balance :</label>
                        <x-input-text type="number" name="initial_balance" placeholder="Initial Balance"></x-input-text>
                    </div>
                  </div>  
                  {{-- Show Cause Description --}}
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Show Cause Description</label>
                          <div class="col-md-12">
                            <x-input-textarea name="description"></x-input-textarea>
                          </div>
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
 <!-- center modal -->                                          
<div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title text-center">Bank Details</h5>
                 <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
               <!-- START VIEW -->
               <div class="row">
                <label class="control-label text-right col-xs-12 col-md-6 col-md-offset-1 text-center" for="id"> Status : </label>
                 <div class="col-xs-12 col-md-6">
                    <span class="label label-success label-lg">Inactive</span>
                </div>
                </div>
             <div class="row">
                 <label class="control-label text-right col-xs-12 col-md-6 col-md-offset-1 text-center" for="id">Name : </label>
                 <div class="col-xs-12 col-md-6">Governing Office</div>
             </div>
             <div class="row">
                 <label class="control-label text-right col-xs-12 col-md-6 col-md-offset-1 text-center" for="id">Description : </label>
                 <div class="col-xs-12 col-md-6">Governing Office</div>
             </div>
             <div class="row">
                 <label class="control-label text-right col-xs-12 col-md-6 col-md-offset-1 text-center" for="id">Parent : </label>
                 <div class="col-xs-12 col-md-6">0</div>
             </div>
             <div class="row">
                 <label class="control-label text-right col-xs-12 col-md-6 col-md-offset-1 text-center" for="id">Created By : </label>
                 <div class="col-xs-12 col-md-6"> Ohidul Hassan At </div>
               </div>
               <div class="row">
                 <label class="control-label text-right col-xs-12 col-md-6 col-md-offset-1 text-center" for="id">Updated By : </label>
                 <div class="col-xs-12 col-md-6"> No Body Update This Record </div>
               </div>
            <!-- ..END VIEW -->
                    </div>
                  </div>
               </div>
             </div>
         </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection
@section('script')
@endsection