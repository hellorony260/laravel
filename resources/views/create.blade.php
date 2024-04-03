<form action="{{ route('store') }}" method="POST">
    @csrf
    <label for="">name</label>
    <input type="text" name="name">
    <label for="">email</label>
    <input type="email" name="email">
    <label for="">phone</label>
    <input type="text" name="phone">
    <button type="submit">Submit</button>
</form>

<a href="{{ route('index') }}" style="color: white;
background: green;
padding: 8px 30px;
border-radius: 2px;
text-decoration: none;
margin-top: 10px;">Index</a>
