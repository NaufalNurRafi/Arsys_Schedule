<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <td>{{ $item->uniqueid }}</td>
    </tr>
    <tr>
        <th> Pos Code</th>
        <td>{{ $item->pos_code }}</td>
    </tr>
    <tr>
        <th>Name</th>
        <td>{{ $item->fname }} {{ $item->mname }} {{ $item->lname }}</td>
    </tr>
    <tr>
        <th>Dept</th>
        <td>{{ $item->dept }}</td>
    </tr>
</table>
