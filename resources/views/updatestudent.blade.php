<div>
    <form action="/update/{{$data->id}}" method="post">
        @csrf
       <input type="text" name="name" value="{{$data->name}}">
       <input type="email" name="email" value="{{$data->email}}">
       <button>Update</button>
    </form>
    <a href="/add">CANCEL</a>
</div>
