<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>Client Id</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Service Id</th>
        <th>Service Name</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($records as $record)
        <tr>
            <td>{{ $record->id }}</a></td>
            <td>{{ $record->first_name }}</td>
            <td>{{ $record->last_name }}</td>
            <td>@foreach($record->services as $key => $service) {{ $service->id }}@if($key != count($record->services) - 1), @endif @endforeach</td>
            <td>@foreach($record->services as $key => $service) {{ $service->name }}@if($key != count($record->services) - 1), @endif @endforeach</td>

            <td>
                <a class="btn btn-primary" href="/admin/records/{{ $record->id }}/edit">Edit</a>
                <form style="float:right; padding: 0 15px;"
                      action="/admin/records/{{ $record->id }}" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    @if (\count($records) == 0)
        <tr>
            <td colspan="7">Records not found</td>
        </tr>
    @endif
    </tbody>
</table>
