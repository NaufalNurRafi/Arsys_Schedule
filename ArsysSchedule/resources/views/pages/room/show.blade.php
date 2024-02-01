<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <td>{{ $item->uniqueid }}</td>
    </tr>
    <tr>
        <th>Building ID</th>
        <td>{{ $item->building_id }}</td>
    </tr>
    <tr>
        <th>Room Number</th>
        <td>{{ $item->room_number }}</td>
    </tr>
    <tr>
        <th>Capacity</th>
        <td>{{ $item->capacity }}</td>
    </tr>
    <tr>
        <th>Coordinate X</th>
        <td>{{ $item->coordinate_x }}</td>
    </tr>
    <tr>
        <th>Coordinate Y</th>
        <td>{{ $item->coordinate_y }}</td>
    </tr>
</table>
