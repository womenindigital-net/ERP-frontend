<div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="d-flex justify-content-between pb-3 card-body">
                    <div>
                        <h4 class="card-title"></h4>
                    </div>
                    <div class="">
                        <a href="accounting.income.student_receivable" class="btn btn-danger">Student Receivable</a>
                    </div>
                    <div>
                        <button type="button" class="btn btn-outline-info waves-effect waves-light mb-2"
                            data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-add"> <i
                                class="fas fa-plus-circle"></i> Add</button>
                    </div>
                </div>
                <livewire:student-income.student-income-list />
            </div>
        </div>
    </div> <!-- end col -->

    <!--  Extra Large modal example -->
    <div class="modal fade student-income-modal-xl-add" tabindex="-1" role="dialog" aria-hidden="true">
        <livewire:student-income.student-income-operations />
    </div>
</div>

@section('script')
    <!-- form repeater js -->
    <script src="{{ asset('assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-repeater.int.js') }}"></script>

@endsection
