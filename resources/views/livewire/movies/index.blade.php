<div>
    <table class="table table-striped">
        <thead class="table table-striped bg-info">
            <tr>
                <th>ID</th>
                <th>Movie Name</th>
                <th>Genra</th>
                <th>Company</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td>{{ $movie->id }}</td>
                    <td>{{ $movie->name }}</td>
                    <td>{{ $movie->genra }}</td>
                    <td>{{ $movie->company }}</td>
                    <td>
                        <a href="{{ url('edit', ['movie' => $movie->id]) }}" class="btn btn-secondary">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('delete', ['movie' => $movie->id]) }}" class="btn btn-danger">Delete</i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

