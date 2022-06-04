@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')
<style>
  .wizard .steps>ul>li a {
    padding-right: 0 !important;
  }

  .wizard .steps>ul>li a {
    padding-left: 5px !important;
  }
</style>
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') DashBoard @endslot
@slot('title') STUDENT QAS @endslot
@endcomponent

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row mb-3">
          <div class="col-6">
          </div>
          <div class="col-6 text-end">
            <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal"><i
                class="fa fa-user"></i>PROFILE</button>
            <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal"
              data-bs-target=".occupational-therapy-view"><i class="fa fa-plus"></i>ADD</button>
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
          <table class="table table-bordered w-100">
            <thead>
              <tr class="table-primary ">
                <th>Collection Date</th>
                <th>Student Name</th>
                <th>Collected By</th>
                <th>Log</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>2022-05-16</td>
                <td>Abid Hossain Turjo</td>
                <td>Ohidul Hassan</td>
                <td><small>Create: Ohidul Hassan @ 2022-05-16 15:13:44</small></td>
                <td>
                  <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                    data-bs-toggle="modal" data-bs-target=".occupational-therapy-view">
                    <i class="mdi mdi-eye"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                      class="fas fa-check"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"> <i
                      class="fas fa-check"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                    data-bs-toggle="modal" data-bs-target=".occupational-therapy-view">
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



{{-- ===================== --}}
<!--  Large modal example -->
<div class="modal fade occupational-therapy-view" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel"> Occupational Therapy (PA2cOT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="vertical-example" class="vertical-wizard">
          <!-- Seller Details -->
          <h3> Occupational Therapy</h3>
          <section>
            <form>
              <div class="row">
                <div class="col-lg-4 pull-left pb-2">
                  <label class="p-2">Collection Date:</label>
                  <x-input-text name="collection_date" type="date" placeholder="mm/dd/yyyy"></x-input-text>
                </div>

                <div class="col-lg-4 pull-left pb-2">
                  <label class="p-2">Teacher: <span class="text-danger text-bold">*</span></label>
                  <select class="form-control strip-tags select2" id="Teacher" required="" name="TeacherID">
                    <option value="">-- Select --</option>
                    <option value="169">abulhasnat</option>
                    <option value="173">nila01</option>
                    <option value="18">Airins</option>
                    <option value="97">AmalRozareo</option>
                    <option value="124">anasbin</option>
                    <option value="24">arupmandal</option>
                    <option value="145">asadzaman</option>
                  </select>
                  <span class="help-block text-bold"></span>
                </div>

                <div class="col-lg-4 pull-left pb-2">
                  <label class="p-2">Candidate ID: <span class="text-danger text-bold">*</span></label>
                  <select class="form-control strip-tags select2" id="StudentID" required="" name="StudentID">
                    <option selected="selected" value="">-- Select --</option>
                    <option value="245">Aalliyah Tehzeeb Ahmed</option>
                    <option value="4">abdullah-al-nafi antor</option>
                    <option value="91">Abdullahil Baki</option>
                    <option value="171">Abdur Rahman Sajid</option>
                    <option value="281">Abid Hossain Turjo</option>
                    <option value="272">Abid Kabir Chowdhury</option>
                    <option value="98">Abrar Ahosab Talha</option>
                    <option value="282">Abrar Jawad Siam</option>
                    <option value="148">Abu Sufiyan</option>
                    <option value="116">Adib Akbar</option>
                  </select>
                </div>

                <div class="col-lg-12 p-0 pb-2">
                  <label class="col-md-12 px-1">Description:</label>
                  <p>Occupational Therapy assessment form</p>
                </div>

                <div class="col-lg-12 p-0 pb-2">
                  <label class="col-md-12 px-1">Instruction:</label>
                  <p>Occupational Therapy assessment form</p>
                </div>
              </div>
            </form>
          </section>

          <!-- Company Document -->
          <h3> General</h3>
          <section>
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>General</h5>
                  <div class="row">
                    <div class="form-check">
                      <div class="me-5 ">
                        <label class="form-check-label pb-2">Medication Treatment </label>
                        <x-input-text name="collection_date" placeholder="Medication Treatment"></x-input-text>
                      </div>
                      <div class="me-5 ">
                        <label class="form-check-label pb-2">Any present medicines</label>
                        <x-input-text name="collection_date" placeholder="Any present medicines"></x-input-text>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- row end -->
            <x-input-radio-or-check name="name" label="Separate Home equipment" :records="$constants::$yesNoEn">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="name" label="Communication" :records="$therapyConstants::$communication">
            </x-input-radio-or-check>
            <!-- row end -->
          </section>

          <h3>Muscle Tone</h3>
          <section>
            <x-input-radio-or-check name="name" label="Separate Home equipment"
              :records="$therapyConstants::$separateHomeEquipment">
            </x-input-radio-or-check>
            <!-- row end -->
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5></h5>
                  <div class="row">
                    <div class="form-check">
                      <div class="me-5 ">
                        <label class="form-check-label pb-2">Left</label>
                        <x-input-text name="name" placeholder="Left"></x-input-text>
                      </div>
                      <div class="me-5 ">
                        <label class="form-check-label pb-2">Right</label>
                        <x-input-text name="name" placeholder="Right"></x-input-text>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- row end -->
            <x-input-radio-or-check name="name" label="Lower Limbs" :records="$therapyConstants::$lowerLimbs">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="name" label="Trunk/neck" :records="$therapyConstants::$trunkNeck">
            </x-input-radio-or-check>
            <!-- row end -->
            <x-input-radio-or-check name="name" label="Lower Limbs" :records="$therapyConstants::$lowerLimbsTone">
            </x-input-radio-or-check>
            <!-- row end -->
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5>Trunk/neck</h5>
                  <div class="row">
                    <div class="form-check">
                      <div class="me-5 ">
                        <label class="form-check-label pb-2">Left</label>
                        <x-input-text name="name" placeholder="Left"></x-input-text>
                      </div>
                      <div class="me-5 ">
                        <label class="form-check-label pb-2">Right</label>
                        <x-input-text name="name" placeholder="Right"></x-input-text>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <h3>Range of movement</h3>
          <section>
            <x-input-radio-or-check name="name" label="Upper limbs" :records="$therapyConstants::$upperLimbs">
            </x-input-radio-or-check>
            <!-- row end -->
            <div class="row border-top py-2">
              <div class="col-xl-12 col-sm-12">
                <div class="m-0">
                  <h5></h5>
                  <div class="row">
                    <div class="form-check">
                      <div class="me-5 ">
                        <label class="form-check-label pb-2">Left</label>
                        <x-input-text name="name" placeholder="Left"></x-input-text>
                      </div>
                      <div class="me-5 ">
                        <label class="form-check-label pb-2">Right</label>
                        <x-input-text name="name" placeholder="Right"></x-input-text>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- row end -->
            <x-input-radio-or-check name="name" label="Trunk/neck" :records="$therapyConstants::$trunkNeckRange">
            </x-input-radio-or-check>
            <!-- row end -->
          </section>
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@endsection

@section('script')

<!-- jquery step -->
<script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>

<!-- form wizard init -->
<script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>

@endsection