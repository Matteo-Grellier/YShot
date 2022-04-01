<div>
    <h3>Liste de type de verre</h3>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if(!is_null($glassesTypes) && !empty($glassesTypes))
                @foreach ($glassesTypes as $glassType)
                    <tr>
                        <td>{{ $glassType->id }}</td>
                        <td>{{ $glassType->name }}</td>
                        <td>
                            <a href="{{ route('admin.edit_glasses_types', $glassType->id) }}">Modifier</a>
                            <form action="{{ route('admin.delete_glasses_types') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="glasses_types_id" value={{$glassType->id}}>
                                <button type="submit">Supprimer</button>
                            </form>
                            {{-- <a href="{{ route("admin.delete_soft", $soft->id) }}">Supprimer</a> --}}
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <form action="{{ route('admin.create_glasses_types') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name">
        <button type="submit">Create Soft</button>
    </form>
</div>