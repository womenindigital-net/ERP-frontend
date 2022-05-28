@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Dashboard @endslot
@slot('title') STUDENT QAS @endslot
@endcomponent
<!-- end page title -->
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="col-12 text-end pb-2">
          <h4 class="card-title text-start m-0">STUDENT QAS</h4>
          <button type="button" class="btn btn-outline-info waves-effect waves-light me-2" data-bs-toggle="modal"
            data-bs-target=""><i class="fa fa-user"></i> Profile</button>
          <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal"
            data-bs-target=".bs-example-modal-lg"><i class="fa fa-plus"></i> Add</button>
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
              <tr class="text-center">
                <th>Collection Date
                  <span>
                    <i class="dripicons-arrow-thin-down"></i>
                    <i class="dripicons-arrow-thin-up"></i>
                  </span>
                </th>
                <th>Student Name</th>
                <th>Collected By</th>
                <th>Log</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-center">
                <td>2022-05-17</td>
                <td>Abdur Rahman Sajid</td>
                <td>Ohidul Hassan</td>
                <td>Create: Ohidul Hassan @ 2022-05-17 15:50:24</td>
                <td>
                  <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                    data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                    <i class=" fas fa-eye"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2"
                    data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                    <i class="fas fa-pen"></i></button>
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

{{-- Modal Code Start Here --}}
<!--  Large modal example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel"> Dairy > OT Assessment In Computer Trainee</h5>
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
                    <div class="input-group" id="datepicker2">
                      <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                    </div><!-- input-group -->
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
              </div>
            </form>
          </section>
          <!-- Company Document -->
          <h3> Gym</h3>
          <section>
            <form>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Treadmill(15-20 min) speed:5</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Need maximum assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Partial assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Verbal prompt </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Pictorial observation </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Completely independent</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Cycling (5 min)</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Need maximum assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Partial assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Verbal prompt </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Pictorial observation </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Completely independent</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Butterfly(10x5) 24,36 kg</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Need maximum assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Partial assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Verbal prompt </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Pictorial observation </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Completely independent</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Lat pull down (10x5) 24,36 kg</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Need maximum assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Partial assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Verbal prompt </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Pictorial observation </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Completely independent</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Lat up (10x3), 12,24 kg</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Need maximum assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Partial assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Verbal prompt </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Pictorial observation </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Completely independent</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Dumble (10x4)6,8,10 lb</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Need maximum assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Partial assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Verbal prompt </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Pictorial observation </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Completely independent</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Leg curl (10x4)</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Need maximum assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Partial assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Verbal prompt </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Pictorial observation </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Completely independent</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Vibration (10 min)</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Need maximum assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Partial assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Verbal prompt </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Pictorial observation </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Completely independent</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Spot jump (10x2)</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Need maximum assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Partial assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Verbal prompt </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Pictorial observation </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Completely independent</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Free hand exercise (10-15 min)</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Need maximum assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Partial assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Verbal prompt </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Pictorial observation </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Completely independent</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Ball throw (15)</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Need maximum assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Partial assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Verbal prompt </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Pictorial observation </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Completely independent</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Basket ball throw (10)</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Need maximum assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Partial assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Verbal prompt </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Pictorial observation </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Completely independent</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Ball Kick (15)</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Need maximum assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Partial assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Verbal prompt </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Pictorial observation </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Completely independent</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </section>

          <!-- Company Document -->
          <h3>Outing</h3>
          <section>
            <form>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Walking (20 min)</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Need maximum assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Partial assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Verbal prompt </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Pictorial observation </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Completely independent</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Running (15 min)</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Need maximum assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Partial assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Verbal prompt </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Pictorial observation </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Completely independent</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">height down jump (10)</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Need maximum assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Partial assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Verbal prompt </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Pictorial observation </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Completely independent</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Tennis ball throw (15)</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Need maximum assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Partial assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Verbal prompt </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Pictorial observation </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Completely independent</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Tennis ball catch (15)</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Need maximum assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Partial assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Verbal prompt </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Pictorial observation </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Completely independent</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Ball fielding practice (10)</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Need maximum assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Partial assistance </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Verbal prompt </label>
                      </div>
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label"> Pictorial observation </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Completely independent</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

{{-- Modal Code Close Here --}}

@endsection
@section('script')
<!-- form wizard init -->
<script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>
<script>
  $(document).ready(function(){
        $(".hide").hide();
      $("#container").click(function(){
        $(".hide").toggle();
      });
    });
</script>
@endsection