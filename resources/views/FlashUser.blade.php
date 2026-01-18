<div>
    <h1>ADD New User</h1>
    {{ session('message') }}
    <form action="flashadd" method="post">
        @csrf   
        <input type="text" name="username" placeholder="Enter UserName">
        <br>
        <br>
        <input type="text" name="email" placeholder="Enter email">
        <br>
        <br>
        <input type="text" name="phone" placeholder="Enter phone">
        <br>
        <br>
        <button>Add New User</button>
    </form>
    <!-- When there is no desire, all things are at peace. - Laozi -->
</div>
