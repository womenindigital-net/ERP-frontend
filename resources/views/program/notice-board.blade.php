@extends('layouts.master')

@section('title') @lang('translation.Data_Tables') @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Dashbord @endslot
        @slot('title')  Notices @endslot
    @endcomponent

    <div class="col-xl-12 col-lg-12 col-sm-6 d-flex justify-content-end mb-3">
        <!-- Extra Large modal button -->
        <div class="pb-3 card-body text-end">
            <button type="button" class="btn btn-outline-info waves-effect waves-light "
            data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"> <i
                class="fas fa-plus-circle"></i> Add</button>
        </div>
{{-- Add Content Modul --}}
<div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              {{--  --}}
  
            <div class="mb-3 row">
                <label for="example-email-input" class="col-md-4 col-form-label text-center">Send To:</label>
                <div class="col-md-8 pe-5">
                    <select class="form-control select2-templating">
                        
                        <optgroup label="Select">
                            <option value="1">Accouting</option>
                            <option value="2">Accouting Full</option>
                            <option value="3">Admin</option>
                            <option value="4">Angle Chet</option>
                            <option value="5">Bakery</option>
                            <option value="6">Doctor</option>
                            <option value="7">Full Admin</option>
                            <option value="8">HR And Adimin</option>
                            <option value="9">Parent</option>
                            <option value="10">Principal</option>
                            <option value="11">Program Menager</option>
                            <option value="12">Read Only User</option>
                            <option value="13">Role For IT</option>
                            <option value="14">Settings</option>
                            <option value="15">Sarah</option>
                            <option value="16">Senior Teacher</option>
                            <option value="17">Support Staff</option>
                            <option value="18">Teacher</option>
                            <option value="19">Teacher With DataEntry</option>
                            <option value="20">Therapy</option>
                            <option value="21">Specific User</option>
                          
                            
                        </optgroup>
                    </select>
                </div>
            </div>

            {{--  --}}
            <div class="mb-3 row">
                <label for="example-search-input" class="col-md-4 col-form-label text-center">Subject:</label>
                <div class="col-md-8 pe-5">
                    <input class="form-control" type="search" placeholder="Notice Subject Here"
                        id="example-search-input">
                </div>
            </div>
            {{--  --}}

            <div class="mb-3 row">
                <label for="example-search-input" class="col-md-4 col-form-label text-center">Message:</label>
                <div class="col-md-8 pe-5">
                    <form method="post">
                        <textarea id="elm1" name="area"></textarea>
                    </form>
                </div>
            </div>


{{--  --}}

<div class="container">
    <div class="row">
        <div class="row modal-footer">
  
            <div class="col-md-1">
                <button class="btn btn-danger w-100" data-bs-dismiss="modal">Close</button>
            </div>
            <div class="col-md-1">
                <button class="btn btn-success w-100">Save</button>
            </div>
        </div>
    </div>
</div>
       
                
            </div>
        </div>
    </div>
</div>

 

{{-- Add Content Modul Closd --}}
    </div>
{{-- Data Table Start --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title"></h4>
                  

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th>Send to Type</th>
                                <th>send By</th>
                                <th>Subject</th>
                                <th>Log</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>


                        <tbody>
                            <tr>
                                <td>HR</td>
                                <td>A.K.M Shahidullah</td>
                                <td>Holiday Notice</td>
                                <td>Create: A.K.M Shahidullah @ <br>2021-08-29 12:29:20
                                    There is no update record.</td>
                                   
                                    <td class="text-center">
                                        
                                        <button type="button"
                                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light"
                                            data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
                                            <i class=" fas fa-eye"></i>
                                        </button>
                                        
                                       
                                    </td>
                               
                            </tr>
                           
 
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
{{-- Data Table Closed --}}

<!--  Extra Large modal example -->
<div class="modal fade material-callects-modal-xl-view" id="" tabindex="-2" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary"> Notice View Details </i>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3 row">
                    <label for="example-search-input" class="col-md-4 col-form-label text-center">Send To</label>
                    <div class="col-md-8 pe-5 ">
                      <div class="border p-2"> 
                        <span class="border m-2">Digital</span>
                        <span class="border m-2">Dev</span>
                        <span class="border m-2">COMMON</span>
                        <span class="border m-2">Rahman</span>
                        <span class="border m-2">Dipa</span>
                        <span class="border m-2">Parvez</span>
                        <span class="border m-2">Hossain</span>
                        <span class="border m-2">Jahan</span>
                        <span class="border m-2">Amin</span>
                        <span class="border m-2">Rahman</span>
                        <span class="border m-2">Azim</span>
                        <span class="border m-2">Shiddique</span>            
                        <span class="border m-2">Digital</span>
                        <span class="border m-2">Dev</span>
                        <span class="border m-2">COMMON</span>
                        <span class="border m-2">Rahman</span>
                        <span class="border m-2">Dipa</span>
                        <span class="border m-2">Parvez</span>
                        <span class="border m-2">Hossain</span>
                        <span class="border m-2">Jahan</span>
                        <span class="border m-2">Amin</span>
                        <span class="border m-2">Rahman</span>
                        <span class="border m-2">Azim</span>
                        <span class="border m-2">Shiddique</span>            
                        <span class="border m-2">Digital</span>
                        <span class="border m-2">Dev</span>
                        <span class="border m-2">COMMON</span>
                        <span class="border m-2">Rahman</span>
                        <span class="border m-2">Dipa</span>
                        <span class="border m-2">Parvez</span>
                        <span class="border m-2">Hossain</span>
                        <span class="border m-2">Jahan</span>
                        <span class="border m-2">Amin</span>
                        <span class="border m-2">Rahman</span>
                        <span class="border m-2">Azim</span>
                        <span class="border m-2">Shiddique</span>            
                        <span class="border m-2">Digital</span>
                        <span class="border m-2">Dev</span>
                        <span class="border m-2">COMMON</span>
                        <span class="border m-2">Rahman</span>
                        <span class="border m-2">Dipa</span>
                        <span class="border m-2">Parvez</span>
                        <span class="border m-2">Hossain</span>
                        <span class="border m-2">Jahan</span>
                        <span class="border m-2">Amin</span>
                        <span class="border m-2">Rahman</span>
                        <span class="border m-2">Azim</span>
                        <span class="border m-2">Shiddique</span>            
                      </div>
                    </div>
                </div>
                {{-- subject  --}}
                <div class="mb-3 row">
                    <label for="example-search-input" class="col-md-4 col-form-label text-center">Subject</label>
                    <div class="col-md-8 pe-5">
                        <input class="form-control" type="search" placeholder="Holiday Notice"
                            id="example-search-input">
                    </div>
                </div>
                {{-- massege --}}
                <div class="mb-3 row">
                    <label for="example-search-input" class="col-md-4 col-form-label text-center">Send To</label>
                    <div class="col-md-8 pe-5 ">
                      <div class="border p-2"> 
                       <p>সুত্রঃ পিএফডিএ-ভিটিসি/প্রশাসন-০১/খন্ড-৫/সং-০১/২০২১ ইং তারিখঃ ২৯/০৮/২০২১ ইং</p>
                       <h2 class="text-center text-primary">ছুটির নোটিশ</h2>
                       <p>এতদ্বারা সেন্টারের সকল কর্মকর্তা, কর্মচারী ও প্রশিক্ষণার্থীদের সদয় অবগতির জন্য জানানো যাচ্ছে যে, আগামী ৩০শে আগষ্ট-২০২১  ইং রোজ সোমবার, জন্মাষ্টমী উপলক্ষে পিএফডিএ-ভোকেশনাল ট্রেনিং সেন্টার ট্রাষ্ট এর সকল কার্যক্রম বন্ধ থাকবে। <br><br>

                        ইহা ছাড়াও উপরোক্ত ছুটিকালীন সময়ে প্রোডাকশন বিভাগ, নিরাপত্তা বিভাগ এবং সেকশন হতে দায়িত্ব প্রাপ্ত ব্যাক্তি উপরোক্ত ছুটি কালীন সময়ে অফিসের প্রয়োজনে কর্তব্য পালন করবে।<br><br> <br>
                        
                        আগামী ৩১শে আগষ্ট-২০২১ ইং রোজ মঙ্গলবার নির্ধারিত সময় অনুযায়ী পিএফডিএ-ভোকেশনাল ট্রেনিং সেন্টার ট্রাষ্ট এর সকল সেকশন/বিভাগ খোলা থাকবে। অতএব সকলকে নির্ধারিত সময়ে উপস্থিত থাকার জন্য নির্দেশ প্রদান করা হলো।<br> <br>
                        ----------------------- <br>
                        সাজিদা রহমান ড্যানি <br>
                        পিএফডিএ-ভোকেশনাল ট্রেনিং সেন্টার ট্রাষ্ট <br>
                        নিউ ডিওএইচএস, মহাখালী, ঢাকা-১২০৬</p>
                      </div>
                    </div>
                </div>

            </div>
            <div class="row modal-footer">
  
                <div class="col-md-1">
                    <button class="btn btn-danger w-100" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection
@section('script')
    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
       <!--tinymce js-->
       <script src="assets/libs/tinymce/tinymce.min.js"></script>

       <!-- init js -->
       <script src="assets/js/pages/form-editor.init.js"></script>
  
   @endsection

