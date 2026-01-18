<div>
    <h1>
        User Login
    </h1>
    <form action="httpuser" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter Name">
        <br>
        <br>
        <input type="text" name="age" placeholder="Enter Age">
        <br>
        <br>
        <input type="text" name="gender" placeholder="Enter Gender">
        <br>
        <br>
        <input type="password" name="password" placeholder="Enter Name">
        <br>
        <br>
        <button>Login</button>
    </form>
    <!-- When there is no desire, all things are at peace. - Laozi -->
</div>
