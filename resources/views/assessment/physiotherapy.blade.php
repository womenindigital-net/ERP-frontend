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
@slot('title') STUDENT QA @endslot
@endcomponent
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row mb-3">
          <div class="col-6">
            <h4 class="card-title">STUDENT QAS</h4>
          </div>
          <div class="col-6 text-end  mb-3">
            <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal"
              data-bs-target=""><i class="fa fa-user"></i> Profile</button>
            <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal"
              data-bs-target=".bs-example-modal-lg"><i class="fa fa-plus"></i> ADD</button>
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
                  <td>Abdur Rahman Sajid</td>
                  <td>Ohidul Hassan</td>
                  <td><small>Create: Ohidul Hassan @ 2022-05-16 16:38:29</small></td>
                  <td>
                    <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                      data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                      <i class="mdi mdi-eye"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                        class="fas fa-check"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1">
                      <i class="fas fa-check"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                      data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
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
</div>

<!--  Large modal example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel"> Physiotherapy (PA2dOT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="vertical-example" class="vertical-wizard">
          <!-- Seller Details -->
          <h3>Sensory Checklist</h3>
          <section>
            <form>
              <div class="row">
                <div class="col-lg-4">
                  <div class="mb-3">
                    <label for="basicpill-firstname-input">Collection Date:</label>
                    <x-input-text name="name" placeholder=""></x-input-text>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="mb-3">
                    <label for="basicpill-lastname-input">Teacher:</label>
                    <select class="form-control select2 form-select">
                      <option value="0">Select</option>
                      <option value="1">abulhasnat</option>
                      <option value="2">nila01</option>
                      <option value="3">Airins</option>
                      <option value="4">AmalRozareo</option>
                      <option value="5">anasbin</option>
                      <option value="6">arupmandal</option>
                      <option value="7">asadzaman</option>
                      <option value="8">Badshah</option>
                      <option value="9">BijoyRozareo</option>
                      <option value="10">Chandan</option>
                      <option value="11">dolonbishwash</option>
                      <option value="12">golamrabbani</option>
                      <option value="13">jahinur</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="mb-3">
                    <label for="basicpill-phoneno-input">Candidate ID:</label>
                    <select class="form-control select2 form-select">
                      <option value="0">Select</option>
                      <option value="1">Aalliyah Tehzeeb Ahmed</option>
                      <option value="2">abdullah-al-nafi antor</option>
                      <option value="3">Abdullahil Baki</option>
                      <option value="4">Abdur Rahman Sajid</option>
                      <option value="5">Abid Hossain Turjo</option>
                      <option value="6">Abid Kabir Chowdhury</option>
                      <option value="7">Abrar Ahosab Talha</option>
                      <option value="8">Abrar Jawad Siam</option>
                      <option value="9">Abu Sufiyan</option>
                      <option value="10">Adib Akbar</option>
                      <option value="11">Adiba Atiar</option>
                      <option value="12">Adil Anaf</option>
                      <option value="13">Aditya Chakraborty</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="mb-3">
                    <label for="verticalnav-phoneno-input">Description:</label>
                    <p>Physiotherapy assessment form</p>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="mb-3">
                    <label for="verticalnav-email-input">Instruction:</label>
                    <p>Physiotherapy assessment form</p>
                  </div>
                </div>
              </div>
            </form>
          </section>

          <!-- Company Document -->
          <h3>General</h3>
          <section>
            <form>
              <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">Birth history</label>
                <x-input-text name="name" placeholder=""></x-input-text>
              </div>
              <!-- row end -->
              <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">Before birth</label>
                <x-input-text name="name" placeholder=""></x-input-text>
              </div>
              <!-- row end -->
              <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">Pregnancy</label>
                <x-input-text name="name" placeholder=""></x-input-text>
              </div>
              <!-- row end -->
              <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">During Birth</label>
                <x-input-text name="name" placeholder=""></x-input-text>
              </div>
              <!-- row end -->
              <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">Delivery</label>
                <x-input-text name="name" placeholder=""></x-input-text>
              </div>
              <!-- row end -->
              <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">After Birth</label>
                <x-input-text name="name" placeholder=""></x-input-text>
              </div>
              <!-- row end -->
              <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">History</label>
                <x-input-text name="name" placeholder=""></x-input-text>
              </div>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Medication Treatment" :records="$constants::$yesNoEn">
              </x-input-radio-or-check>
              <!-- row end -->
              <x-input-radio-or-check name="name" label="Any present medicines" :records="$constants::$yesNoEn">
              </x-input-radio-or-check>
              <!-- row end -->
              <div class="mb-3">
                <label class="form-label">Home equipment</label>
                <x-input-text name="name" placeholder=""></x-input-text>
              </div>
              <!-- end row -->
            </form>
          </section>

          <!-- Bank Details -->
          <h3>Visual Perception</h3>
          <section>
            <div>
              <form>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Visual Discrimination" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Visual Memory" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Visual Figure ground" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Visual Spatial" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Oral Motor" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Sucking" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Drooling" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Swollen" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Chewing" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Choking" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Drinking" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
              </form>
            </div>
          </section>

          <!-- Bank Details -->
          <h3>Activities of Daily living</h3>
          <section>
            <div>
              <form>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Eating" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Brushing teeth" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Dressing" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Toilet" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Bathing" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Does The Child attend school?"
                  :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <div class="mb-3">
                  <label for="formrow-firstname-input" class="form-label">If Yes, Enter school name</label>
                  <x-input-text name="name" placeholder=""></x-input-text>
                </div>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Leisure/ Play: activities of interest."
                  :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
              </form>
            </div>
          </section>


          <!-- Bank Details -->
          <h3>Strength</h3>
          <section>
            <div>
              <form>
                <!-- end row -->
                <div class="mb-3">
                  <label for="formrow-firstname-input" class="form-label">Please explain strength area</label>
                  <x-input-text name="name" placeholder=""></x-input-text>
                </div>
                <!-- end row -->
              </form>
            </div>
          </section>
          <!-- Bank Details -->
          <h3> Functional Gross Motor</h3>
          <section>
            <div>
              <form>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Sitting" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Crawling" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Standing" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Walking" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Jumping" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Running" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Ball skill" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
              </form>
            </div>
          </section>
          <!-- Bank Details -->
          <h3>Transitional Movements</h3>
          <section>
            <div>
              <form>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Prone to Supine" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Continuous Rolling" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Lying to Sit" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Box sit to stand" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Jumping" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Cross sit to stand" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Kneeling to stand:" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
              </form>
            </div>
          </section>
          <!-- Bank Details -->
          <h3>Fine motor Skill</h3>
          <section>
            <div>
              <form>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Dominance" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <div class="mb-3">
                  <label for="formrow-firstname-input" class="form-label">Left</label>
                  <x-input-text name="name" placeholder=""></x-input-text>
                </div>
                <div class="mb-3">
                  <label for="formrow-firstname-input" class="form-label">Right</label>
                  <x-input-text name="name" placeholder=""></x-input-text>
                </div>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Reach" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Release" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Symmetrical use" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Bilateral use" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="In-hand manipulation" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Eye hand co-ordination" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Transfer" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Writing skill" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
              </form>
            </div>
          </section>
          <!-- Bank Details -->
          <h3>Automatic Reaction</h3>
          <section>
            <div>
              <form>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Protective reactions" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Equilibrium reaction" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
              </form>
            </div>
          </section>
          <!-- Bank Details -->
          <h3>Sensory Skill (Normal /Hypo response)</h3>
          <section>
            <div>
              <form>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Tactile" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Auditory" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Vestibular" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Proprioceptive" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->

                <!-- end row -->
              </form>
            </div>
          </section>
          <!-- Bank Details -->
          <h3>Cognitive Skills</h3>
          <section>
            <div>
              <form>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Attention" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Problem Solving" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Able to Follow instruction" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Memory" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Perceptual Motor" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Body Awareness" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Body Co-ordination" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Bilateral integration" :records="$constants::$yesNoEn">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
              </form>
            </div>
          </section>

          <h3> Treatment</h3>
          <section>
            <form>
              <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">Problem List</label>
                <x-input-text name="name" placeholder=""></x-input-text>
              </div>
              <!-- row end -->
              <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">Treatment plan</label>
                <x-input-text name="name" placeholder=""></x-input-text>
              </div>
              <!-- row end -->
              <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">Treatment plan implementation details</label>
                <x-input-text name="name" placeholder=""></x-input-text>
              </div>
              <!-- row end -->
              <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">Progress</label>
                <x-input-text name="name" placeholder=""></x-input-text>
              </div>
              <!-- row end -->
              <!-- end row -->
            </form>
          </section>

          <h3>Signature</h3>
          <section>
            <form>
              <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">Therapist Signature</label>
                <x-input-text name="name" type="file" placeholder=""></x-input-text>
              </div>
              <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">Designation and organizations name</label>
                <x-input-text name="name" placeholder=""></x-input-text>
              </div>
              <!-- row end -->
              <!-- end row -->
            </form>
          </section>

          <!-- Bank Details -->
          <h3>Muscle Power</h3>
          <section>
            <div>
              <form>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Upper limbs" :records="$physiotherapyConstants::$limbs">
                </x-input-radio-or-check>
                <div class="mb-3">
                  <label for="formrow-firstname-input" class="form-label">Left</label>
                  <x-input-text name="name" placeholder=""></x-input-text>
                </div>
                <div class="mb-3">
                  <label for="formrow-firstname-input" class="form-label">Right</label>
                  <x-input-text name="name" placeholder=""></x-input-text>
                </div>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Lower Limbs" :records="$physiotherapyConstants::$limbs">
                </x-input-radio-or-check>
                <div class="mb-3">
                  <label for="formrow-firstname-input" class="form-label">Left</label>
                  <x-input-text name="name" placeholder=""></x-input-text>
                </div>
                <div class="mb-3">
                  <label for="formrow-firstname-input" class="form-label">Right</label>
                  <x-input-text name="name" placeholder=""></x-input-text>
                </div>
                <div class="mb-3">
                  <label for="formrow-firstname-input" class="form-label">Trunk/neck</label>
                  <x-input-text name="name" placeholder=""></x-input-text>
                </div>

                <!-- end row -->
              </form>
            </div>
          </section>
          <!-- Bank Details -->
          <h3>Muscle Tone</h3>
          <section>
            <div>
              <form>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Upper limbs" :records="$physiotherapyConstants::$limbsTone">
                </x-input-radio-or-check>
                <div class="mb-3">
                  <label for="formrow-firstname-input" class="form-label">Left</label>
                  <x-input-text name="name" placeholder=""></x-input-text>
                </div>
                <div class="mb-3">
                  <label for="formrow-firstname-input" class="form-label">Right</label>
                  <x-input-text name="name" placeholder=""></x-input-text>
                </div>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Lower Limbs" :records="$physiotherapyConstants::$limbsTone">
                </x-input-radio-or-check>
                <div class="mb-3">
                  <label for="formrow-firstname-input" class="form-label">Left</label>
                  <x-input-text name="name" placeholder=""></x-input-text>
                </div>
                <div class="mb-3">
                  <label for="formrow-firstname-input" class="form-label">Right</label>
                  <x-input-text name="name" placeholder=""></x-input-text>
                </div>


                <!-- end row -->
              </form>
            </div>
          </section>



          <h3>Behavior</h3>
          <section>
            <form>
              <!-- end row -->
              <x-input-radio-or-check name="name" label="Independence" :records="$constants::$yesNoEn">
              </x-input-radio-or-check>
              <!-- end row -->
              <!-- end row -->
              <x-input-radio-or-check name="name" label="Social interaction" :records="$constants::$yesNoEn">
              </x-input-radio-or-check>
              <!-- end row -->
              <!-- end row -->
              <x-input-radio-or-check name="name" label="Social Communication" :records="$constants::$yesNoEn">
              </x-input-radio-or-check>
              <!-- end row -->
              <!-- end row -->
              <x-input-radio-or-check name="name" label="Interpersonal" :records="$constants::$yesNoEn">
              </x-input-radio-or-check>
              <!-- end row -->
            </form>
          </section>



          <h3>Domain Area</h3>
          <section>
            <form>
              <!-- end row -->
              <x-input-radio-or-check name="name" label="Physical (Gross motor/ Fine motor)"
                :records="$constants::$yesNoEn">
              </x-input-radio-or-check>
              <!-- end row -->
              <!-- end row -->
              <x-input-radio-or-check name="name" label="Cognitive" :records="$constants::$yesNoEn">
              </x-input-radio-or-check>
              <!-- end row -->
              <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">If yes write below</label>
                <x-input-text name="name" placeholder=""></x-input-text>
              </div>
              <!-- row end -->
              <div class="mb-3">
                <label for="formrow-firstname-input" class="form-label">Behavioral</label>
                <x-input-text name="name" placeholder=""></x-input-text>
              </div>
              <!-- row end -->
              <!-- end row -->
              <x-input-radio-or-check name="name" label="Communication" :records="$constants::$yesNoEn">
              </x-input-radio-or-check>
              <!-- end row -->
              <x-input-radio-or-check name="name" label="Social" :records="$constants::$yesNoEn">
              </x-input-radio-or-check>
              <!-- end row -->
              <x-input-radio-or-check name="name" label="Emotional" :records="$constants::$yesNoEn">
              </x-input-radio-or-check>
              <!-- end row -->
            </form>
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