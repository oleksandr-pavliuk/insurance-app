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
    @foreach ($recods as $record)
        <tr>
            <td>{{ $record->client->id }}</a></td>
            <td>{{ $record->client->first_name }}}</td>
            <td>{{ $record->client->last_name }}</td>
            <td>{{ $record->service->id}}</td>
            <td>{{ $record->service->name }}</td>

            <td>
                <a class="btn btn-primary" href="/admin/students/{{ $record->id }}/edit">Edit</a>
                <form style="float:right; padding: 0 15px;"
                      action="/admin/students/{{ $student->id }}" method="POST">
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
