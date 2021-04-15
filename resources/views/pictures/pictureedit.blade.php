<h1>Picturelist</h1>

<table border="1">
    <tr>
        <td>Picture_ID</td>
        <td>PicturPath</td>
        <td>Operations</td>
    </tr>
    @foreach($pictures as $picture)
        <tr>
            <td>{{$picture['id']}}</td>
            <td>{{$picture['pics']}}</td>
            <td>
                <a href="{{"editpic/".$picture['id']}}">Edit</a>

            </td>
        </tr>
        @endforeach
</table>

<span>

</span>
