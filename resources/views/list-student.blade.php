<div>
    <h1>Student list</h1>
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Operation</td>
        </tr>

        @foreach($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone }}</td>
            <td>{{ $student->phone }}</td>
            <td><a href="{{ 'delete/'.$student->id }}">Delete</a></td>
        </tr>
        @endforeach
    </table>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
</div>
