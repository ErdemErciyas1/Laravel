
<table>
    <tr>
        <td>Id</td>
        <td>Name</td>
    </tr>
    @foreach($data as $value)
    <tr>
        <td>{{ $value->id }}</td>
        <td>{{ $value->name }}</td>
    </tr>
    @endforeach 