<div>
<x-record-list :records="$records">

    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
        <thead>
            <tr class="table-primary">
                <th>Warehouse</th>
                <th>Count Date</th>
                <th>Counted By</th>
                <th>Note</th>
                <th>Is Approved</th>
                <th>Log</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($records as $record)
                <tr>
                    <td>{{ $record->warehouse_id }}</td>
                    <td>{{ $record->count_date ?? '' }}</td>
                    <td>{{ $record->date}}</td>
                    <td>{{ $record->note }}</td>
                    <td>{{ $record->count_date ?? '' }}</td>
                    <td>{{ $record->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
        

</x-record-list>
</div>
