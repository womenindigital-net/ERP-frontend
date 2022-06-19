@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
@endsection

@section('content')
    {{-- code  --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-end pb-5">
                        <button type="button" class="btn btn-outline-info waves-effect waves-light " data-bs-toggle="modal"
                        data-bs-target=".bs-example-modal-xl"><i class="fas fa-plus-circle"></i>
                        Add</button>
                        <!-- sample modal content -->
                        <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myExtraLargeModalLabel">Student Create</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-0">
                                        <div class="card p-0 m-0">
                                            <div class="card-body">
                                                <div class="row pb-3">
                                                    <div class="col-6 d-flex">
                                                        <label class="col-4 col-form-label"> Student Name</label>
                                                        <div class="col-6">
                                                          <x-input-select name="student_id" :records="$students"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 d-flex">
                                                        <label for="example-text-input" class="col-md-4 col-form-label">ITP Name</label>
                                                        <div class="col-md-6">
                                                            <x-input-text name="itp_name"  placeholder="ITP Name"></x-input-text>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row pb-3">
                                                    <div class="col-6 d-flex">
                                                        <label for="example-date-input" class="col-md-4 col-form-label">Start Date</label>
                                                        <div class="col-md-6">
                                                            <x-input-text name="start_date" type="date" placeholder="mm/dd/yyyy"></x-input-text>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 d-flex">
                                                        <label for="example-date-input" class="col-md-4 col-form-label">End Date</label>
                                                        <div class="col-md-6">
                                                            <x-input-text name="end_date" type="date" placeholder="mm/dd/yyyy"></x-input-text>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row pb-3">
                                                    <div class="col-6 d-flex">
                                                        <label class="form-label col-md-4">Instruction</label>
                                                        <div class="col-md-6">
                                                            <x-input-textarea name='instruction' rows='5'></x-input-textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row pb-3">

                                                    <div class="row">
                                                        <div class="table-responsive">
                                                            <table class="table w-100 table-bordered">
                                                              <thead>
                                                                <tr class="table-primary">
                                                                  <th>Selected task</th>
                                                                  <th>Comment</th>
                                                                </tr>
                                                              </thead>
                                                            </table>
                                                          </div>
                                                    </div>
                                                    <div class="col-12 row">
                                                        <div class="col-2">
                                                            <button class="btn btn-primary accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target=".collapse"
                                                                        aria-expanded="true" aria-controls="collapse">Collapse</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="accordion" id="accordionExample">
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingOne">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                                        aria-expanded="true" aria-controls="collapseOne">
                                                                        Personal Work
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="personal_work[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Grooming
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" name="personal_work[]" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Cut nails hands and feet
                                                                            </label>
                                                                        </div>
                                                                        


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingTwo">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                        Family Work
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        

                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="family_work[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Making breakfast for the family
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="family_work[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Watching movie and television show with family
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingThree">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                        Recreational Work
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="recreational_work[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Games(online games)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="recreational_work[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Games(making picture by cutting paper)
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingfoure">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapsefoure" aria-expanded="false" aria-controls="collapsefoure">
                                                                       Household Work
                                                                    </button>
                                                                </h2>
                                                                <div id="collapsefoure" class="accordion-collapse collapse" aria-labelledby="headingfoure"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="household_work[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="household_work[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingfive">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                                                        Computer Homework
                                                                    </button>
                                                                </h2>
                                                                <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="computer_homework[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="computer_homework[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingsix">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix"
                                                                        aria-expanded="false" aria-controls="collapsesix">
                                                                        Meal Preparetion Skill
                                                                    </button>
                                                                </h2>
                                                                <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="meal_preparetion_skill[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="meal_preparetion_skill[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingseven">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                                                        Cooking Catering
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="cooking_catering[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="cooking_catering[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingeight">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                                                        Gym Exercise
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="gym_exercise[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="gym_exercise[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingnine">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                                                                        Therapeutic Home work
                                                                    </button>
                                                                </h2>
                                                                <div id="collapsenine" class="accordion-collapse collapse" aria-labelledby="headingnine"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="therapeutic_homework[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="therapeutic_homework[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingten">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                                                                        Homework(Karishma)
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseten" class="accordion-collapse collapse" aria-labelledby="headingten"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="Homework_karisma[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="Homework_karisma[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingeleven">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseeleven" aria-expanded="false" aria-controls="collapseeleven">
                                                                        Homework(Karishma)
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseeleven" class="accordion-collapse collapse" aria-labelledby="headingeleven"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="Homework_karisma1[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="Homework_karisma1[]"  class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingtwelve">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapsetwelve" aria-expanded="false" aria-controls="collapsetwelve">
                                                                        Homework(Karishma)
                                                                    </button>
                                                                </h2>
                                                                <div id="collapsetwelve" class="accordion-collapse collapse" aria-labelledby="headingtwelve"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="Homework_karisma2[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="Homework_karisma2[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading13">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                                                        Homework(Karishma)
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="Homework_karisma3[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="Homework_karisma3[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading14">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                                                        Homework(Karishma)
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="heading14"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="Homework_karisma4[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="Homework_karisma4[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Clear a table Type: Pre-Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="Homework_karisma4[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Participate in preparing foods Type: Pre-Vocational
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading15">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                                                        Homework(Karishma)
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="heading15"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="Homework_karisma5[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="Homework_karisma5[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading16">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                                                        Homework(Karishma)
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="heading16"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="Homework_karisma6[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="Homework_karisma6[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading17">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                                                        Homework(Karishma)
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse17" class="accordion-collapse collapse" aria-labelledby="heading17"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="Homework_karisma7[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="Homework_karisma7[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading18">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                                                                        Homework(Karishma)
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse18" class="accordion-collapse collapse" aria-labelledby="heading18"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="Homework_karisma8[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="Homework_karisma8[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading19">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                                                                        Homework(Karishma)
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse19" class="accordion-collapse collapse" aria-labelledby="heading19"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="Homework_karisma9[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingB">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseB" aria-expanded="false" aria-controls="collapseB">
                                                                        Section G : Domain 03 - Emotional development > Intrapersonal > Loss of relationship > managing death of family members
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseB" class="accordion-collapse collapse" aria-labelledby="headingB"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="section_g[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading20">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                                                                        Homework(Karishma)
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse20" class="accordion-collapse collapse" aria-labelledby="heading20"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="Homework_karisma10[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Share personal exhausting feelings. Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading21">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
                                                                        Section H : Domain 04 - Social and ethical development > Social Emotional Learning (SEL) > Interpersonal Skills > Interpersonal Skills
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse21" class="accordion-collapse collapse" aria-labelledby="heading21"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="section_interpersonal_skill[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Apologizing Type: Pre-Vocational

                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="section_interpersonal_skill[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Wait while others speak Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="section_interpersonal_skill[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Asking questions Type: Pre-Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="section_interpersonal_skill[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Sharing with others Type: Vocational
                                                                            </label>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading22">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
                                                                        Section H : Domain 04 - Social and ethical development > Social Emotional Learning (SEL) > Perspective taking > Handle/accept different situation
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse22" class="accordion-collapse collapse" aria-labelledby="heading22"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="section_different_situation[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Self control Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                    


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading23">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse23" aria-expanded="false" aria-controls="collapse23">
                                                                        Section H : Domain 04 - Social and ethical development > Social Emotional Learning (SEL) > Empathy > Understand social deviation in terms of age
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse23" class="accordion-collapse collapse" aria-labelledby="heading23"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="section_termsof_age[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Understand, follow and maintain the acceptable and unacceptable behaviors Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="section_termsof_age[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Understand the responsibility towards all age group of people. Type: Vocational
                                                                            </label>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->

                                                            
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading24">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse24" aria-expanded="false" aria-controls="collapse24">
                                                                        Section H : Domain 04 - Social and ethical development > Leisure & Recreation > Social games > How to Play with others
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse24" class="accordion-collapse collapse" aria-labelledby="heading24"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="section_play_with_others[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                               Understanding game / play Type: Vocational
                                                                            </label>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading25">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse25" aria-expanded="false" aria-controls="collapse25">
                                                                        Section H : Domain 04 - Social and ethical development > Social Communication skills > Social Interaction > Interactional - Me and You…
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse25" class="accordion-collapse collapse" aria-labelledby="heading25"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="section_social_interection[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Makes apologies or gives explanations of behavior Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                  


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading26">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse26" aria-expanded="false" aria-controls="collapse26">
                                                                        Section H : Domain 04 - Social and ethical development > Work Habit > Communication (work related) > Ethical Values
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse26" class="accordion-collapse collapse" aria-labelledby="heading26"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="section_ethical_values[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Interrupting skills Type: Vocational

                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="section_ethical_values[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Explain clearly Type: Pre-Vocational
                                                                            </label>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading27">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse27" aria-expanded="false" aria-controls="collapse27">
                                                                        Section H : Domain 04 - Social and ethical development > Work Habit > Work Readiness > Ethical Values
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse27" class="accordion-collapse collapse" aria-labelledby="heading27"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="section_work_habit_ethical_values[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Be comfortable with getting temporarily interrupted Type: Vocational

                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="section_work_habit_ethical_values[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Accept changes in schedule Type: Vocational
                                                                            </label>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingV">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseV" aria-expanded="false" aria-controls="collapseV">
                                                                        Section I: Independent skills > Household maintenance skills > Home Maintenance > Self development
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseV" class="accordion-collapse collapse" aria-labelledby="headingV"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="section_self_development[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Ironing Type: Pre-Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="section_self_development[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Making bed Type: Pre-Vocational
                                                                            </label>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading28">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse28" aria-expanded="false" aria-controls="collapse28">
                                                                        Section I: Independent skills > Household maintenance skills > Cleaning & Washing Chores > Self development
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse28" class="accordion-collapse collapse" aria-labelledby="heading28"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="section_cleaning_selfdevelopment[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Clean windows Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="section_cleaning_selfdevelopment[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Clean sink Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="section_cleaning_selfdevelopment[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Mop floor Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="section_cleaning_selfdevelopment[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Sweep floor Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="section_cleaning_selfdevelopment[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Change garbage bag Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="section_cleaning_selfdevelopment[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Pick up personal items Type: Pre-Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="section_cleaning_selfdevelopment[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Washing clothes Type: Pre-Vocational
                                                                            </label>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading29">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse29" aria-expanded="false" aria-controls="collapse29">
                                                                        Section I: Independent skills > Household maintenance skills > Telephone Skills > Self development
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse29" class="accordion-collapse collapse" aria-labelledby="heading29"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input name="section_telephone_selfdevelopment[]" class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Relay simple telephone messages Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <!-- Single item  -->
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </div>
                    </div>
                    <div class="table-responsive">
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
                                  <x-input-text type="search" name="search" />
                              </label>
                            </div>
                          </div>
                          <div class="table-responsive">
                            <table class="table w-100 table-bordered">
                              <thead>
                                <tr class="table-primary">
                                  <th>Student</th>
                                  <th>ITP Name</th>
                                  <th>Type</th>
                                  <th>Is Closed</th>
                                  <th>Instruction</th>
                                  <th> Log</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Puja</td>
                                  <td>Demo</td>
                                  <td>reading</td>
                                  <td>first to last</td>
                                  <td>Demo</td>
                                  <td>Demo</td>
                                  <td>
                                    <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
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
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


@endsection
@section('script')


@endsection