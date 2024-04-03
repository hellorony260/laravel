
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <table border="1" cellpadding="10px" style="margin-bottom: 20px" class="table">
        <thead>
            <tr>
                <td>sl</td>
                <td>id</td>
                <td>name</td>
                <td>email</td>
                <td>phone</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>

            @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->phone }}</td>
                <td>
                    <a href="{{ route('show', $item->id) }}">Show</a>
                    <form action="{{ route('delete', $item->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                   <button>Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('create') }}" style="color: white;
    background: green;
    padding: 8px 30px;
    border-radius: 2px;
    text-decoration: none;
    margin-top: 10px;">Create</a>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

