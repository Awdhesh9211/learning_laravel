<div>
    <form action="/addstudent" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter Your Name">
        <br>
        <br>
        <input type="email" name="email" placeholder="Enter Your Email">
        <br>
        <button>ADD STUDENT</button>
    </form>
</div>
