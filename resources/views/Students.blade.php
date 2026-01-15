<div>
    <h1>Student List</h1>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
        </tr>
        @foreach ($data as $student)
        <tr>
            <td>{{ $student->ID }}</td>
            <td>{{ $student->Name }}</td>
            <td>{{ $student->Email }}</td>
            <td>{{ $student->Phone }}</td>
        </tr>
        @endforeach
    </table>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
</div>
