<div class="admin-ingredient child">
    <h1>Liste de Fruits</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if(!is_null($fruitsList) && !empty($fruitsList))
                @foreach ($fruitsList as $fruit)
                    <tr>
                        <td>{{ $fruit->id }}</td>
                        <td>{{ $fruit->name }}</td>
                        <td><img src="{{ asset('../storage/app/public/' . $fruit->file_path) }}" width="100" height="100%"/></td>
                        <td>
                            <a href="{{ route('admin.edit_fruits', $fruit->id) }}">Modifier</a>
                            <form action="{{ route('admin.delete_fruits') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="fruits_id" value={{$fruit->id}}>
                                <button type="submit">Supprimer</button>
                            </form>
                            {{-- <a href="{{ route("admin.delete_soft", $soft->id) }}">Supprimer</a> --}}
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <form action="{{ route('admin.store_fruits') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="file" name="image" accept=".gif, image/jpg, image/jpeg, image/png">
        <button type="submit">Create Soft</button>
    </form>
</div>
