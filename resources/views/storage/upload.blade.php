<div>
    <form action="/upload" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" placeholder="Choose File">
        <br>
        <br>
        <button>Upload File</button>
    </form>
    <a href="/list">Go To List</a>
</div>
