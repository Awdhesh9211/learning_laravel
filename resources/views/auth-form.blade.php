<div class="container">
    <div class="box">
    <h2>Signup</h2>
    <form action="adduser" method="post">
        @csrf
        <div>
            <input type="text" name="username" placeholder="Enter Your Username..." >
            <span>@error('username'){{$message}}@enderror</span>
        </div>
        <br>
        <div>
            <input type="email" name="email" placeholder="Enter Your Email..." >
            <span>@error('email'){{$message}}@enderror</span>
        </div>
        <br>
        <div>
            <input type="password" name="password" placeholder="Enter Your Password..." >
            <span>@error('password'){{$message}}@enderror</span>
        </div>
        <br>
        <div class="btn">
            <button>Signup</button>
        </div>
    </form>
    </div>
</div>

<style>
    /* .container{
        width: 100vw;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .box{
        width: 300px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border: 1px solid red;
        border-radius: 8px;
        background: lightcyan;
    }
    .btn{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    button{
        width: 100%;
        height: 40px;
        background: green;
        border: 1px solid green;
        border-radius: 8px;
        font-size: 18px;
    }
    input{
        height: 35px;
        width: 100%;
        border: 1px solid red;
        border-radius: 8px;
        margin: 4px 4px;
    } */
</style>