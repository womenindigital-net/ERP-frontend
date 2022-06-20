@extends('layouts.master')

@section('title')
@lang('translation.Data_Tables')
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assets/custom/custom_step_form/custom_step.css') }}">
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#case-histroy" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Add</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#case-histroy_list" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">List</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="case-histroy" role="tabpanel">
                        <form action="{{ route('assign-teacher.store') }}" method="post">
                            @csrf
                                 <div class="modal-body p-0">
                <div class="card p-0 m-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3 row">
                                    <label class="col-md-4 col-form-label">Student:</label>
                                    <div class="col-md-8">
                                        <x-input-select name="student_id" :records="[]" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3 row">
                                    <label class="col-md-4 col-form-label">Main Teacher:</label>
                                    <div class="col-md-8">
                                        <x-input-select name="teachar_id" :records="[]" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <div class="col-2 d-flex align-items-center">
                                <div class=" row">
                                    <label class=" col-form-label">Teachers:</label>
                                </div>
                            </div>
                            <div class="col-2 d-flex align-items-center">
                                <div class="form-check ">
                                    <input class="form-check-input" name="chk" :records="['Select All']" type="checkbox"  onclick='selects()'>
                                    <label class="form-check-label" for="formCheck1">
                                        Select All
                                    </label>
                                </div>
                            </div>
                            <div class="col-2 d-flex align-items-center">
                                <div class="form-check ">
                                    <input class="form-check-input"  type="checkbox"  onclick='deSelect()'>
                                    <label class="form-check-label" for="formCheck1">
                                        Deselect All
                                    </label>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-3">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" name="chk">
                                    <label class="form-check-label" for="formCheck1">
                                        Boutique
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" name="chk">
                                    <label class="form-check-label" for="formCheck2">
                                        Paperwork
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" name="chk">
                                    <label class="form-check-label" for="formCheck3">
                                        Elementary
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" name="chk">
                                    <label class="form-check-label" for="formCheck4">
                                        Music
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-3">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" name="chk">
                                    <label class="form-check-label" for="formCheck5">
                                        Tailoring
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" name="chk">
                                    <label class="form-check-label" for="formCheck6">
                                        Starter
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" name="chk">
                                    <label class="form-check-label" for="formCheck7">
                                        Yoga
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" name="chk">
                                    <label class="form-check-label" for="formCheck8">
                                        Dance
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-3">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" name="chk">
                                    <label class="form-check-label" for="formCheck9">
                                        Online Chess class
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" name="chk">
                                    <label class="form-check-label" for="formCheck10">
                                        Jewelry
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" name="chk">
                                    <label class="form-check-label" for="formCheck11">
                                        Radial
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" name="chk">
                                    <label class="form-check-label" for="formCheck12">
                                        Physical Exercise(PE)
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="square-switch pt-3">
                            <h6>Published:</h6>
                            <input type="checkbox" id="square-switch1" switch="none" checked />
                            <label for="square-switch1" data-on-label="Yes" data-off-label="No"></label>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
<div class="tab-pane" id="case-histroy_list" role="tabpanel">
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
                <th>Main Teacher</th>
                <th>Log</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Iaffee Hossain Dipto</td>
                <td>PFDA C COMMON</td>
                <td>Create: Md. Amir Hossain @ 2019-07-25 00:32:35
                    There is no update record.</td>
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
    </div>
</div>
</div>
</div>
@endsection
@section('script')
<<script type="text/javascript">  
    function selects(){  
        var ele=document.getElementsByName('chk');  
        for(var i=0; i<ele.length; i++){  
            if(ele[i].type=='checkbox')  
                ele[i].checked=true;  
        }  
    }  
    function deSelect(){  
        var ele=document.getElementsByName('chk');  
        for(var i=0; i<ele.length; i++){  
            if(ele[i].type=='checkbox')  
                ele[i].checked=false;  
              
        }  
    }             
</script>  
@endsection
