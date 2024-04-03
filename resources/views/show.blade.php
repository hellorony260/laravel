

<table border="1" cellpadding="10px" style="margin-bottom: 20px">
    <thead>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>email</td>
            <td>phone</td>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->phone }}</td>
        </tr>

    </tbody>
</table>

<a href="{{ route('index') }}" style="color: white;
background: green;
padding: 8px 30px;
border-radius: 2px;
text-decoration: none;
margin-top: 10px;">Index</a>
