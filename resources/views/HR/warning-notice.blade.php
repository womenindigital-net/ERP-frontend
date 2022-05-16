@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')

<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />


    
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') HRMS @endslot
        @slot('title') WARNING NOTICE @endslot
    @endcomponent
    {{-- code  --}}

 

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    </p>
                    <div class="d-flex justify-content-end ">
                        <button type="button" class="btn btn-outline-info waves-effect waves-light mb-5" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"> <i
                            class="fas fa-plus-circle"></i> Add</button>   
                         <!-- sample modal content -->
                        <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myExtraLargeModalLabel">Add Warning Notice</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-0">
                                        <div class="container">
                                            <div class="row row-cols-2">
                                              <div class="col">
                                                <h6>Select Name</h6>
                                                <select class="form-control  form-select strip-tags"  required="">
                                                    <option value="">--Select Name--</option>
                                                    <option value="1">  Farhana</option>
                                                    <option value="2">A.K.M  Shahidullah</option>
                                                    <option value="3">Abdullah Al Asif</option>
                                                    <option value="4">Airin  Shiddique</option>
                                                    <option value="5">Anas Bin Iqbal</option>
                                                    <option value="6">Angon  Rahman</option>
                                                    <option value="7">Arup  Mandal</option>
                                                    <option value="8">Ashiqur Rahman Majumder</option>
                                                    <option value="9">Bijoy Gharami .</option>
                                                    <option value="10">Bijoy Urban Rosario</option>
                                                </select>
                                              </div>
                                              <div class="col">
                                                  <h6>Warning Subject</h6>
                                                  <input class="form-control strip-tags" id="Subject" placeholder="Subject" required="" name="Subject" type="text">
                                              </div> 
                                            </div>
                                            <div class="col-xs-12 col-lg-12 col-md-12">
                                                <label class="control-label col-xs-12 col-md-12 text-left p-left-0   pt-3" for="" title="Student">Warning Description 
                                                </label>
                                                <div class="col-xs-12 col-md-12 input-group">
                                                    <textarea class="form-control strip-tags" placeholder="Description" required="" name="Description" cols="50" rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn font-size-16 btn-danger" data-bs-dismiss="modal"> Close</button>
                                        <button type="button" class="btn font-size-16 btn-success" id="sa-position"> Save</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal --> 
                    </div>

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th>Employee Name</th>
                                <th>Warning Subject</th>
                                <th>Warning Description</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mst Tahmina Begum </td>
                                <td>test sub</td>
                                <td>test desc</td>
                                <td class="text-center">
                                    <button type="button"
                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light"
                                    data-bs-toggle="modal" data-bs-target="#material-callects-modal-xl-view">
                                    <i class=" fas fa-eye"></i>
                                </button>
                                    <button type="button"
                                        class="btn btn-sm btn-success btn-rounded waves-effect waves-light "
                                        data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-add">
                                        <i class="fas fa-pen"></i></button>
                                    <button type="button"
                                        class="btn btn-sm btn-danger btn-rounded waves-effect waves-light "> <i
                                        class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <div class="modal fade material-callects-modal-xl-view" id="material-callects-modal-xl-view" tabindex="-2" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary"> Warning Notice Details
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class=" col-xs-12 col-lg-12 col-md-12">
                        <div id="myElementId">
                            <h5 class="text-center"><b>WARNING NOTICE</b></h5>
                            <div class="title-header">
                            <p>Name :Mst Tahmina Begum</p>
                            <p>Employee ID :ID-0149</p>
                            <p>Department/Location :Admin</p>
                            <br>
                            <p><b>Subject: Warning Notice on the issue test sub.</b></p>
                            <br>
                            <p>test desc</p>
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
                    <button type="button" class="btn font-size-14 btn-danger" data-bs-dismiss="modal"> Print</button>
                    <button type="button" class="btn font-size-14 btn-success" id="sa-position" data-bs-dismiss="modal"> Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div>







@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<!-- Datatable init js -->
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
<script>
    $(document).ready(function(){
        $(".hide").hide();
      $("#container").click(function(){
        $(".hide").toggle();
      });
    });
    </script>
<script src="{{ URL::asset('/assets/js/pages/fontawesome.init.js') }}"></script>
@endsection




