<x-bootstrap title="Book">
<table>
    <tr>
        <th>ID</th> <th>Book ID</th> <th>Image</th> <th>Title</th> <th>Category</th> <th>Episode</th>
    </tr>
    @foreach($books as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->b_id }}</td>
        <td>{{ $item->image }}</td>
        <td>{{ $item->b_name }}</td>
        <td>{{ $item->category }}</td>
        <td>{{ $item->episode }}</td>
    </tr>
    @endforeach
</table>

</x-bootstrap>