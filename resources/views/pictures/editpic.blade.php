<h1>Update Picture</h1><br><br>
<form action="/editpic" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
        <input type="text" value="{{$data['pics']}}" name="pics"><br><br>
    <button type="submit">Update</button>
</form>
