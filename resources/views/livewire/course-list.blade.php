<div>
    <x-record-list :records="$records">
        <div class="table-responsive">
            <table class="table table-bordered w-100">
                <thead>
                    <tr class="table-primary">
                        <th>Course / Service Name</th>
                        <th>Duration</th>
                        <th>Cash Account</th>
                        <th>Log</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($records as $record)
                    <tr>
                        <td>{{ $record->course }}</td>
                        <td>{{ $record->duration }}</td>
                        <td>{{ $record->cash_acc }}</td>
                        <td>{{ $record->created_at }}</td>
                        <td>
                            <a href="{{route('course.show', $record->id)}}" type="button"
                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="mdi mdi-eye"></i>
                            </a>
                            <button type="button"
                                class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                    class="fas fa-check"></i>
                            </button>
                            <button type="button"
                                class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="fas fa-check"></i>
                            </button>
                            <button type="button"
                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="mdi mdi-pencil" data-bs-toggle="modal"
                                    data-bs-target=".Courses-view"></i>
                            </button>
                            <button type="button"
                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="bx bx-dollar"></i>
                            </button>
                            <button type="button"
                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="fas fa-arrow-circle-right"></i>
                            </button>
                            <button type="button"
                                class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-record-list>
</div>