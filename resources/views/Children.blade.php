<div>
    <h1>User Data</h1>
    <form action="children" method="post">
        <input type="hidden" name="_methos" id="PUT">
        <input type="text" name="user" placeholder="enter name">
        @csrf
        <br>
        <br>
        <input type="password" name="password" placeholder="enter password">
        <br>
        <br>
        <button>Submit</button>
    </form>
    {{-- <table border="1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
        </tr>
        @foreach ($children as $child )
           <tr>
            <td>{{ $child->name }}</td>
            <td>{{ $child->email }}</td>
            <td>{{ $child->phone }}</td>
        </tr> 
            
        
        @endforeach
    </table> --}}
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
</div>
