@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Dashboard  @endslot
        @slot('title')ADVICE LETTERS @endslot
    @endcomponent
    {{-- code  --}}

 
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-end ">
                        <div class=" card-body text-end p-1">
                            <button type="button" class="btn btn-outline-info waves-effect waves-light "
                            data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"> <i
                                class="fas fa-plus-circle"></i> Add</button>
                        </div>
                        <!-- sample modal content -->
                        <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4>Add Advice Letter</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-0">
                                        <div class="card p-0 m-0">
                                            <div class="card-body">   
                                                <div class="row">
                                                    {{-- Select Name --}}
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                            <label class="form-label">Select Name</label>
                                                        <select class="form-control form-select">
                                                            <option value="">Select Name</option>
                                                            <option value="1">Farhana</option>
                                                            <option value="2">A.K.M  Shahidullah</option>
                                                            <option value="3">Abdullah Al Asif</option>
                                                            <option value="4">Airin  Shiddique</option>
                                                            <option value="5">Anas Bin Iqbal</option>
                                                            <option value="6">Angon  Rahman</option>
                                                            <option value="7">Arup  Mandal</option>
                                                            <option value="8">Ashiqur Rahman Majumder</option>
                                                            <option value="9">Begum Nurjahan Dipa</option>
                                                            <option value="10">Bijoy Gharami .</option>
                                                            <option value="11">Bijoy Urban Rosario</option>
                                                            <option value="12">BISTY  AKTER</option>
                                                            <option value="13">Chandan D Costa</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                    {{-- Show Cause Subject --}}
                                                    <div class="col-md-6">
                                                      <div class="mb-3">
                                                         <label class="form-label">Advice Letter Subject</label>
                                                          <input class="form-control" type="text" placeholder="Subject"       id="example-text-input"> 
                                                     </div>
                                                   </div>  
                                                      {{-- Show Cause Description --}}
                                                <div class="col-md-12">
                                                  <div class="mb-3">
                                                    <label class="form-label">Show Cause Description</label>
                                                      <div class="col-md-12">
                                                        <textarea class="form-control strip-tags resetElement" rows="4" cols="5" id="TaskInstruction" placeholder="Description" minlength="1" name="TaskInstruction"></textarea>
                                                     </div>
                                                   </div>
                                                 </div> 
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                                    <div class="row modal-footer">
  
                                        <div class="col-md-1">
                                            <button class="btn btn-danger w-100" data-bs-dismiss="modal">Close</button>
                                        </div>
                                        <div class="col-md-1">
                                            <button class="btn btn-success w-100">Save</button>
                                        </div>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </div>

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th class="">Employee Name</th>
                                <th class="">	Advice Letter Subject</th>
                                <th class="">Advice Letter Description</th>
                                <th class="">Log</th>
                                <th class="">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Puja</td>
                                <td>puja</td>
                                <td>puja</td>
                                <td>puja</td>
                                <td class="text-center">
                                    <button type="button"
                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light"
                                    data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
                                    <i class=" fas fa-eye"></i>
                                </button>
                             
                                    <button type="button"
                                        class="btn btn-sm btn-success btn-rounded waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-add">
                                        <i class="fas fa-pen"></i></button>
                                    <button type="button"
                                        class="btn btn-sm btn-danger btn-rounded waves-effect waves-light"> <i
                                            class="fas fa-trash-alt" id="sa-warning"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Puja</td>
                                <td>puja</td>
                                <td>puja</td>
                                <td>puja</td>
                                <    <td class="text-center">
                                    <button type="button"
                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light"
                                    data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
                                    <i class=" fas fa-eye"></i>
                                </button>
                                
                                    <button type="button"
                                        class="btn btn-sm btn-success btn-rounded waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-add">
                                        <i class="fas fa-pen"></i></button>
                                    <button type="button"
                                        class="btn btn-sm btn-danger btn-rounded waves-effect waves-light"> <i
                                            class="fas fa-trash-alt" id="sa-warning"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->



    <!--  Extra Large modal example -->
    <div class="modal fade material-callects-modal-xl-view" id="" tabindex="-2" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl">
           <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary">  Advice Letter Details
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class=" col-xs-12 col-lg-12 col-md-12">
                        <div id="myElementId">
                            <h5 class="text-center"><b>LETTER OF ADVICE</b></h5>
                            <div class="title-header">
                            <p>Name :Mst Tahmina Begum</p>
                            <p>Employee ID :ID-0149</p>
                            <p>Department/Location :Admin</p>
                            <br>
                            <p><b>Subject: Letter to advice on the issue of test1.</b></p>
                            <br>
                            
                            <p>test1</p>
                            <br> 
                            <p>Yours faithfully,</p>
                            <br>
                            -------------------
                            <p>HR/Authorized Person</p>   
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer ">
                    <button type="button" class="btn font-size-14 btn-danger"  id="sa-position"> Print</button>
                    <button type="button" class="btn font-size-14 btn-success" data-bs-dismiss="modal" > Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

 


@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<!-- Datatable init js -->
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>



@endsection




