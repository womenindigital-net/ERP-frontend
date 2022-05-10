@extends('layouts.master')

@section('title') @lang('translation.Tabs_&_Accordions') @endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') UI Elements @endslot
@slot('title')SUPPLIER @endslot
@endcomponent

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">

                

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Supplier Type Setup</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Supplier Type List</span>
                        </a>
                    </li>
                  
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <section>
                            <form>
                                <div class="row">
                                    <div class="col">
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="card-body">
                        
                                                        <div class="mb-2 row">
                                                            <label for="example-text-input" class="col-md-4 col-form-label text-end">Name</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" placeholder="Enter your supplier name"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-5 row">
                                                            <label for="example-search-input" class="col-md-4 col-form-label text-end">Contact Person</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="search"  placeholder="Contact person name Here"
                                                                    id="example-search-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-2 row">
                                                            <label for="example-email-input" class="col-md-4 col-form-label text-end">Address 1</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="email" placeholder="Enter Address Here">
                                                            </div>
                                                        </div>
                                                        <div class="mb-2 row">
                                                            <label for="example-email-input" class="col-md-4 col-form-label text-end">City</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="email" placeholder="City Name Here">
                                                            </div>
                                                        </div>
                                                        <div class="mb-5 row">
                                                            <label for="example-url-input" class="col-md-4 col-form-label text-end">State</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="url"placeholder="State Name Here">
                                                            </div>
                                                        </div>
                                                        <div class="mb-2 row">
                                                            <label for="example-text-input" class="col-md-4 col-form-label text-end">Phone 1</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="number" placeholder="Phone One Here"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-2 row">
                                                            <label for="example-search-input" class="col-md-4 col-form-label text-end">Fax

                                                            </label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" placeholder="Enter  Fax Here"
                                                                    id="example-search-input">
                                                            </div>
                                                        </div>
                                
                                                    </div>
                                                </div>
                                             
                                                <div class="col-6">
                                                    <div class="card-body">
                                                        <div class="mb-2  row">
                                                        
                                                            <label class="col-md-4 col-form-label text-end">Type</label>
                                                            <div class="col-md-8">
                                                                <select class="form-select">
                                                                    <option value="1">Whole Sell</option>
                                                                    <option value="2">supplier type 1</option>
                                                                    <option value="3">Row material Supplier</option>
                                                                    <option value="4">In House Supplier</option>
                                                                    <option value="5">Vegetable Supplier</option>
                                                                    <option value="6">Fruits Supplier</option>
                                                                    <option value="7">Meet Supplier</option>
                                                                    <option value="8">Chicken Supplier</option>
                                                                    <option value="9">Direct  Cash</option>
                                                                    <option value="10">Boost-up Vendor</option>
                                                                    <option value="11">Musical Instruments Suppliers</option>
                                                                    <option value="12">Nabil Printeres</option>
                                                                    <option value="13">Chandan Kumar Karmarker</option>
                                                                    <option value="14">Chandan Kumar Karmarker</option>
                                                                    <option value="15">Chandan Kumar Karmarker</option>
                                                                    <option value="16">ASAP Heathy FOOd Ltd.</option>
                                                                    <option value="17">M/S.R.N Enterprise</option>
                                                                    <option value="18">North End (pvt) Ltd.</option>
                                                                    <option value="19">Misanur Rahman (M/s. Sami Varietiese Stor)</option>
                                                                    <option value="20">Mozir & Company</option>
                                                                    <option value="21">Md. Harun Mia (Abdullah Trander)</option>
                                                                    <option value="22">PRAYAS  International Ltd.</option>
                                                                    <option value="23">Md. Shakil Hossain</option>
                                                                    <option value="24">Md. Shakil Hossain(Saba Electronic)</option>
                                                                    <option value="25">Nabil Printers</option>
                                                                    <option value="26">M/s. Taher Enterprise</option>
                                                                    <option value="27">FM Plastic Industries Ltd.</option>
                                                                    <option value="28">Rijaul islam (Mini sauce pran)</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row">
                                                            <label for="example-text-input" class="col-md-4 col-form-label text-end">Designation</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" placeholder="Enter designation here"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>
                                                     <br>
                                                     <br>
                                                   
                                                   
                                                        {{-- Address --}}
                                                        <div class="mb-2 row">
                                                            <label for="example-search-input" class="col-md-4 col-form-label text-end">Address</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" placeholder="Enter  Address two Here"
                                                                    id="example-search-input">
                                                            </div>
                                                        </div> 
                                                        
                                                        {{-- Zip Code --}}
                                                        <div class="mb-2 row">
                                                            <label for="example-search-input" class="col-md-4 col-form-label text-end ">Zip Code</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="number" placeholder="Enter Zip code here"
                                                                    id="example-search-input">
                                                            </div>
                                                        </div>
        
                                                        {{-- Country --}}
                                                        <div class="mb-5 row">
                                                            <label for="example-search-input text-end" class="col-md-4 col-form-label text-end">Country</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control " type="text" placeholder=" Country Name Here"
                                                                    id="example-search-input">
                                                            </div>
                                                        </div>
                                                        {{-- Phone2 --}}
                                                        <div class="mb-2 row">
                                                            <label for="example-search-input" class="col-md-4 col-form-label text-end">Phone2 </label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="number" placeholder="Phone Two Here"
                                                                    id="example-search-input">
                                                            </div>
                                                        </div>

                                                        <div class="mb-2 row">
                                                            <label for="example-search-input" class="col-md-4 col-form-label text-end">Email</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" placeholder="Email Address Here"
                                                                    id="example-search-input">
                                                            </div>
                                                        </div>

                                
                        
                                                    </div>
                                              </div>
                                                       {{-- note --}}
                                                       <div class="row">
                                                        <div class="col-12">
                                                            <div class="mb-2 row">
                                                                <label for="example-search-input" class="col-md-2 col-form-label text-end ps-5">Note
                    
                                                                </label>
                                                                <div class="col-md-6">
                                                                    <input class="form-control ms-2" type="text" placeholder="Note is any"
                                                                        id="example-search-input">
                                                                </div>
                                                                <div class="form-check col-md-3 ms-5">
                                                                    <label class="form-check-label ms-3" for="formCheck2">
                                                                        Is Active
                                                                    </label>
                                                                    <input class="form-check-input" type="checkbox" id="formCheck2" checked>
                                                                </div>
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                     {{-- note end  --}}
                                                     <div class="d-flex justify-content-end ">
                                                        <div class="me-2"> 
                                                            <button class="btn btn-danger waves-effect waves-light" type="submit">RESET</button>
                                                        </div>
                                                        <div class="ms-2">
                                                            <button class="btn btn-success waves-effect waves-light" type="submit">SAVE</button>
                                                        </div>
                                                      </div>
                            
                            </form>
                            
                        </section>
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                
                                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th class=""> Name</th>
                                                <th class=""> Description</th>
                                                <th class=""> Log</th>
                                                <th class=""> Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Whole Sell</td>
                                                <td></td>
                                                
                                                <td>Create: Shonod Digital @ 2018-12-01 17:51:02
                                                    There is no update record</td>
                                                <td> <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                                    <i class="mdi mdi-pencil"></i>
                                                   </button>
                                                   <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                                                   <i class="fas fa-trash-alt"></i>
                                                   </button> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>supplier type 1</td>
                                                <td></td>
                                                
                                                <td>Create: Shonod Digital @ 2019-03-19 10:46:27
                                                    There is no update record.</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                                    <i class="mdi mdi-pencil"></i>
                                                   </button>
                                                   <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                                                   <i class="fas fa-trash-alt"></i>
                                                   </button> 
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                
                
                        
                    </div>
                
                </div>

            </div>
        </div>
    </div>

    
</div>
@endsection


@section('script')
    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
@endsection