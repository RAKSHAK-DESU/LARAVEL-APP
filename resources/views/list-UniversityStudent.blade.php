<div>
    <h1>University Student list</h1>
    <form action="search" method="get">
        <input type="text" placeholder="Search with name" name="search"
       value="{{ request('search') }}"   >
        <button>Search</button>
    </form>
    <form action="delete-multi" method="post">
        @csrf
        <button>Delete</button>
    <table border="1">
        <tr>
            <td>Selection</td>
            <td>Name</td>
            <td>Email</td> 
            <td>Phone</td>
            <td>Operation</td>
        </tr>

        @foreach($universitystudents as $student)
        <tr>
            <td><input type="checkbox" name="ids[]" value="{{ $student->id }}"></td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone }}</td>
           
            <td>
                <a href="{{ 'delete/'.$student->id }}">Delete</a>
                <a href="{{ 'editunistd/'.$student->id }}">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
    </form>
    <br>
    <br>
    {{ $universitystudents->links() }}
</div>

<style>
    .w-5.h-5{
        width: 20px;
    }
</style>