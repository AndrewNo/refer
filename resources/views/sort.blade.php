@foreach($clicks as $click)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $click->ua }}</td>
        <td>{{ $click->ip }}</td>
        <td>{{ $click->ref }}</td>
        <td>{{ $click->param1 }}</td>
        <td>{{ $click->param2 }}</td>
        <td>{{ $click->error }}</td>
        <td>{{ $click->bad_domain }}</td>
        <td>{{ $click->created_at }}</td>
        <td>{{ $click->updated_at }}</td>
    </tr>
@endforeach