<table class="table table-bordered">
    <tr>
        <th>Unique ID</th>
        <td>{{ $item->uniqueid }}</td>
    </tr>
    <tr>
        <th>Session ID</th>
        <td>{{ $item->session_id }}</td>
    </tr>
    <tr>
        <th>Subject Area Abbreviation</th>
        <td>{{ $item->subject_area_abbreviation }}</td>
    </tr>
    <tr>
        <th>Long Title</th>
        <td>{{ $item->long_title }}</td>
    </tr>
    <tr>
        <th>Department Unique ID</th>
        <td>{{ $item->department_uniqueid }}</td>
    </tr>
    <!-- Add other rows based on the columns in the subject_area table -->
</table>
