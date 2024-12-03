<div>


    <table border="2">
        <tr>
            <td>Sr</td>
            <td>Name</td>
            <td>Email</td>
            <td>Created At</td>
            <td>Updated At</td>
            <td>Action</td>
        </tr>
        @foreach ($data as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->created_at}}</td>
            <td>{{$student->updated_at}}</td>
            <td>
                <a href="/delete/{{$student->id}}">DELETE</a>
                <a href="/update/{{$student->id}}">UPDATE</a>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="/add">ADD STUDENT</a>
</div>
