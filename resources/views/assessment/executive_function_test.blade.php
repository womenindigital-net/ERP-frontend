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
@slot('title') Student Qa @endslot
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
                <tr class="table-primary">
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
                  <td>
                    <small>Create: Ohidul Hassan @ 2022-05-16 16:38:29</small>
                  </td>
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
        <h5 class="modal-title" id="myLargeModalLabel">Executive Function Test</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="vertical-example" class="vertical-wizard">
          <!-- Seller Details -->
          <h3> Executive Function Test</h3>
          <section>
            <form>
              <div class="row">
                <div class="col-lg-4">
                  <div class="mb-3">
                    <label for="basicpill-firstname-input">Collection Date:</label>
                    <x-input-text name="name" type="date" placeholder=""></x-input-text>
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
              </div>
            </form>
          </section>
          <!-- Bank Details -->
          <h3>Self-Test</h3>
          <section>
            <div>
              <form>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Have trouble getting started or initiating tasks."
                  :records="$executiveConstants::$oftenOrNot">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Start tasks with enthusiasm but lose interest quickly."
                  :records="$executiveConstants::$oftenOrNot">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="name"
                  label="Find it hard to do things that aren't necessary or highly stimulating."
                  :records="$executiveConstants::$oftenOrNot">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Become absorbed in things or tasks that interest me—sometimes to the point of
                forgetting about people around me or other obligations." :records="$executiveConstants::$oftenOrNot">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Have trouble following conversations because I am distracted or because I am trying
                to remember what I wanted to say." :records="$executiveConstants::$oftenOrNot">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Forget things, even when they are important to me."
                  :records="$executiveConstants::$oftenOrNot">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
                <x-input-radio-or-check name="name" label="At least once a day, lose or misplace items—for example, keys, wallet, purse, or cell
                phone." :records="$executiveConstants::$agreeOrNot">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
                <x-input-radio-or-check name="name"
                  label="Consistently forget appointments and, when I do remember, I often am late."
                  :records="$executiveConstants::$agreeOrNot">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Can't seem to get a handle on clutter, my personal space is messy and has piles of
                papers and miscellaneous items." :records="$executiveConstants::$agreeOrNot">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Have difficulty figuring out what is most important or what I should start with given
                a list of things to do." :records="$executiveConstants::$agreeOrNot">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Waste time trying to decide what to do first."
                  :records="$executiveConstants::$oftenOrNot">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
                <x-input-radio-or-check name="name" label="Become frustrated when things don’t go as planned and can quickly become angry. I
                often let go of my anger as quickly as it came." :records="$executiveConstants::$oftenOrNot">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
                <x-input-radio-or-check name="name"
                  label="Have trouble completing multiple-step tasks and moving from one task to another."
                  :records="$executiveConstants::$agreeOrNot">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
                <x-input-radio-or-check name="name" label="I say “I will do it later” and then forget all about it."
                  :records="$executiveConstants::$oftenOrNot">
                </x-input-radio-or-check>
                <!-- end row -->
                <!-- end row -->
              </form>
            </div>
          </section>
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