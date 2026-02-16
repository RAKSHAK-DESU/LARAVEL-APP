<div>
    <h1>Add new Student to the college</h1>
    <form action="{{ url('addunistudent') }}" method="post">
        @csrf

        <input type="text" name="name" placeholder="Enter Name">x
        <br>
        <input type="text" name="email" placeholder="Enter Email">
        <br>
        <input type="text" name="phone" placeholder="Enter Phone">
        <br>
        <button>Add Student</button>

    </form>
    
</div>
