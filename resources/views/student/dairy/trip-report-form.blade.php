@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') DashBoard @endslot
@slot('title')STUDENT QA @endslot
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
                <tr>
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
                <tr>
                  <td>2022-05-17</td>
                  <td>Abdur Rahman Sajid</td>
                  <td>Ohidul Hassan</td>
                  <td>Create: Ohidul Hassan @ 2022-05-17 15:50:24</td>
                  <td>
                    <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                      data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                      <i class=" fas fa-eye"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2"
                      data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
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
</div>
<!--  Large modal example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel">Trip Report And Evaluation Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="vertical-example" class="vertical-wizard">
          <!-- Seller Details -->
          <h3> Trip Report And Evaluation Form</h3>
          <section>
            <form>
              <div class="row">
                <div class="col-lg-4">
                  <div class="mb-3">
                    <label for="basicpill-firstname-input">Collection Date:</label>
                    <div class="input-group" id="datepicker2">
                      <input type="date" class="form-control" placeholder="dd, M, yyyy">
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
              <div class="row">
                <div class="col-lg-12">
                  <div class="mb-3">
                    <label for="verticalnav-email-input">Instruction:</label>
                    <p>এই ওয়ার্কশীটটি আপনাকে ও পরিবারের সদস্যদের বুঝতে সাহায্য করবে যে তাদের সন্তানের কোন ধরনের সহায়তা
                      প্রয়োজন</p>
                  </div>
                </div>
              </div>
            </form>
          </section>

          <!-- Company Document -->
          <h3>Signs Of Tactile Dysfunction</h3>
          <section>
            <form>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5>Hypersensitivity To Touch (Tactile Defensiveness)</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios" checked>
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Na</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5>Becomes fearful, anxious or aggressive with light or unexpected touch</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios" checked>
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">As an infant, did/does not like to be held or cuddled; may arch back, cry, and pull
                      away</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Distressed when diaper is being, or needs to be, changed</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Appears fearful of, or avoids standing in close proximity to other people or peers
                      (especially in lines)</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Becomes frightened when touched from behind or by someone/something they can not
                      see (such as under a blanket)</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Complains about having hair brushed; may be very picky about using a particular
                      brush</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Bothered by rough bed sheets (i.e., if old and "bumpy")</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Complains about having hair brushed; may be very picky about using a particular
                      brush</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Complains about having hair brushed; may be very picky about using a particular
                      brush</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Avoids group situations for fear of the unexpected touch</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Complains about having hair brushed; may be very picky about using a particular
                      brush</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Resists friendly or affectionate touch from anyone besides parents or siblings (and
                      sometimes them too!)</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Dislikes kisses, will "wipe off" place where kissed</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Appears fearful of, or avoids standing in close proximity to other people or peers
                      (especially in lines)</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Becomes frightened when touched from behind or by someone/something they can not
                      see (such as under a blanket)</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Complains about having hair brushed; may be very picky about using a particular
                      brush</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Bothered by rough bed sheets (i.e., if old and "bumpy")</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Avoids group situations for fear of the unexpected touch</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Resists friendly or affectionate touch from anyone besides parents or siblings (and
                      sometimes them too!)</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Dislikes kisses, will "wipe off" place where kissed</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Prefers hugs</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">A raindrop, water from the shower, or wind blowing on the skin may feel like
                      torture and produce adverse and avoidance reactions</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">May overreact to minor cuts, scrapes, and or bug bites</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Avoids touching certain textures of material (blankets, rugs, stuffed animals)</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Refuses to wear new or stiff clothes, clothes with rough textures, turtlenecks,
                      jeans, hats, or belts, etc.</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">A raindrop, water from the shower, or wind blowing on the skin may feel like
                      torture and produce adverse and avoidance reactions</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">A raindrop, water from the shower, or wind blowing on the skin may feel like
                      torture and produce adverse and avoidance reactions</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Avoids using hands for play</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Yes No
                      Avoids/dislikes/aversive to "messy play", i.e., sand, mud, water, glue, glitter, playdoh, slime,
                      shaving cream/funny foam etc.</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Will be distressed by dirty hands and want to wipe or wash them frequently</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Excessively ticklish</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">
                      Distressed by seams in socks and may refuse to wear them</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Distressed by clothes rubbing on skin; may want to wear shorts and short sleeves
                      year round, toddlers may prefer to be naked and pull diapers and clothes off constantly</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">
                      May want to wear long sleeve shirts and long pants year-round to avoid having skin exposed</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">
                      Distressed about having face washed</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">
                      Distressed about having hair, toenails, or fingernails cut</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">
                      Resists brushing teeth and is extremely fearful of the dentist</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">
                      Is a picky eater, only eating certain tastes and textures; mixed textures tend to be avoided as
                      well as hot or cold foods; resists trying new foods</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">
                      May refuse to walk barefoot on grass or sand</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">
                      May walk on toes only</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
            </form>
          </section>

          <!-- Bank Details -->
          <h3>Hyposensitivity To Touch (Under-Responsive)</h3>
          <section>
            <form>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5>May crave touch, needs to touch everything and everyone</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios" checked>
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Na</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5>Is not aware of being touched/bumped unless done with extreme force or intensity</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios" checked>
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Is not bothered by injuries, like cuts and bruises, and shows no distress with
                      shots (may even say they love getting shots!)</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">May not be aware that hands or face are dirty or feel his/her nose running</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">May be self-abusive; pinching, biting, or banging his own head</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Mouths objects excessively</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Frequently hurts other children or pets while playing</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Repeatedly touches surfaces or objects that are soothing (i.e., blanket)</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Seeks out surfaces and textures that provide strong tactile feedback</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Thoroughly enjoys and seeks out messy play</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                  <div class="m-0">
                    <h5 class="mb-4">Craves vibrating or strong sensory input</h5>
                    <div class="form-check d-flex">
                      <div class="me-5">
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="formRadios">
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- end row -->
            </form>
          </section>

          <!-- Bank Details -->
          <h3>Poor Tactile Perception And Discrimination</h3>
          <section>
            <div>
              <form>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Has difficulty with fine motor tasks such as buttoning ,zipping,and fastening clothes
                      </h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">May not be able to identify which part of their body was touched if they were not
                        looking</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Maybe afraid of the dark</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">May be a messy dresser</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Looks disheveled</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Does not notice pants are twisted</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Shirt is half un tucked</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Shoes are untied</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">One pant leg is up and one is down</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Has difficulty using scissors</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Crayons, or silverware</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Continues to mouth objects to explore them even after age two</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Has difficulty figuring out physical characteristics of objects; shape, size,
                        texture, . Temperature, weight, etc</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">May not be able to identify objects by feel, uses vision to help; such as, reaching
                        into backpack or desk to retrieve an item Vestibular Sense: input from the inner ear about
                        equilibrium, gravitational changes, movement experiences, and position in space.</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
              </form>
            </div>
          </section>

          <!-- Bank Details -->
          <h3>Signs Of Vestibular Dysfunction > Hypersensitivity To Movement (Over-Responsive)</h3>
          <section>
            <div>
              <form>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Avoids/dislikes playground equipment; i.e., swings, ladders, slides, or
                        merry-go-rounds</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Prefers sedentary tasks, moves slowly and cautiously, avoids taking risks, and may
                        appear "wimpy"</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Avoids/dislikes elevators and escalators; may prefer sitting while they are on them
                        or, actually get motion sickness from them</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">May physically cling to an adult they trust</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">May appear terrified of falling even when there is no real risk of it</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Afraid of heights, even the height of a curb or step</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Fearful of feet leaving the ground</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Fearful of going up or down stairs or walking on uneven surfaces</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Afraid of being tipped upside down, sideways or backwards; will strongly resist
                        getting hair washed over the sink</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Startles if someone else moves them; i.e., pushing his/her chair closer to the table
                      </h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">As an infant, may never have liked baby swings or jumpers</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class=""></h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">May be fearful of, and have difficulty riding a bike, jumping, hopping, or balancing
                        on one foot (especially if eyes are closed)</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">May have disliked being placed on stomach as an infant</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Loses balance easily and may appear clumsy</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Fearful of activities which require good balance</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">
                        Avoids rapid or rotating movements</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->

              </form>
            </div>
          </section>


          <!-- Bank Details -->
          <h3>Signs Of Vestibular Dysfunction > Hyposensitivity To Movement (Under-Responsive)</h3>
          <section>
            <div>
              <form>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">in constant motion, can't seem to sit still</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Craves fast, spinning, and/or intense movement experiences</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">loves being tossed in the air</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Could spin for hours and never appear to be dizzy</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Loves the fast, intense, and/or scary rides at amusement parks</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Always jumping on furniture, trampolines, spinning in a swivel chair, or getting into
                        upside down positions</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Loves to swing as high as possible and for long periods of time</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Is a "thrill-seeker"; dangerous at times</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Always running, jumping, hopping etc. instead of walking</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Rocks body, shakes leg, or head while sitting</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class=""></h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Likes sudden or quick movements, such as, going over a big bump in the car or on a
                        bike</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
              </form>
            </div>
          </section>


          <!-- Bank Details -->
          <h3>Signs Of Vestibular Dysfunction > . Poor Muscle Tone And/Or Coordination</h3>
          <section>
            <div>
              <form>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">has a limp, "floppy" body</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Frequently slumps, lies down, and/or leans head on hand or arm while working at
                        his/her desk</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Difficulty simultaneously lifting head, arms, and legs off the floor while lying on
                        stomach ("superman" position)</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Often sits in a "W sit" position on the floor to stabilize body</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Fatigues easily! __ compensates for "looseness" by grasping objects tightly</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Difficulty turning doorknobs, handles, opening and closing items</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Difficulty catching him/her self if falling</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Difficulty getting dressed and doing fasteners, zippers, and buttons</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">May have never crawled as an baby</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">has poor body awareness; bumps into things, knocks things over, trips, and/or appears
                        clumsy</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Poor gross motor skills; jumping, catching a ball, jumping jacks, climbing a ladder
                        etc.</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Poor fine motor skills; difficulty using "tools", such as pencils, silverware, combs,
                        scissors etc.</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">
                        May appear ambidextrous, frequently switching hands for coloring, cutting, writing etc.; does
                        not have an established hand preference/dominance by 4 or 5 years old</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">has difficulty licking an ice cream cone</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Seems to be unsure about how to move body during movement, for example, stepping over
                        something</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Difficulty learning exercise or dance steps</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
              </form>
            </div>
          </section>

          <!-- Bank Details -->
          <h3> Signs Of Proprioceptive Dysfunction > Sensory Seeking Behaviors</h3>
          <section>
            <div>
              <form>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Seeks out jumping, bumping, and crashing activities</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Stomps feet when walking</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Kicks his/her feet on floor or chair while sitting at desk/table</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Bites or sucks on fingers and/or frequently cracks his/her knuckles</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Loves to be tightly wrapped in many or weighted blankets, especially at bedtime</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Prefers clothes (and belts, hoods, shoelaces) to be as tight as possible</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">May not understand the idea of "heavy" or "light"; would not be able to hold two
                        objects and tell you which weighs more</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Loves/seeks out "squishing" activities</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Enjoys bear hugs</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Excessive banging on/with toys and objects</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">loves "roughhousing" and tackling/wrestling games</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Frequently falls on floor intentionally</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Would jump on a trampoline for hours on end</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Grinds his/her teeth throughout the day</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Loves pushing/pulling/dragging objects</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Loves jumping off furniture or from high places</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Frequently hits, bumps or pushes other children</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">chews on pens, straws, shirt sleeves etc.</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
              </form>
            </div>
          </section>

          <!-- Bank Details -->
          <h3> Signs Of Proprioceptive Dysfunction > 2. Difficulty With "Grading Of Movement"</h3>
          <section>
            <div>
              <form>
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Misjudges how much to flex and extend muscles during tasks/activities (i.e., putting
                        arms into sleeves or climbing)</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Difficulty regulating pressure when writing/drawing; may be too light to see or so
                        hard the tip</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Kicks his/her feet on floor or chair while sitting at desk/table</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Written work is messy and he/she often rips the paper when erasing</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Always seems to be breaking objects and toys</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Misjudges the weight of an object, such as a glass of juice, picking it up with too
                        much force sending it flying or spilling, or with too little force and complaining about objects
                        being too heavy</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">May not understand the idea of "heavy" or "light"; would not be able to hold two
                        objects and tell you which weighs more</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">Seems to do everything with too much force; i.e., walking, slamming doors, pressing
                        things too hard, slamming objects down</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <!-- end row -->
                <div class="row border-top py-2">
                  <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                      <h5 class="">plays with animals with too much force, often hurting them</h5>
                      <div class="form-check d-flex">
                        <div class="me-5">
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div>
                          <input class="form-check-input" type="radio" name="formRadios">
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
              </form>
            </div>
          </section>
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection

@section('script')
<!-- form wizard init -->
<script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>
@endsection