<div>
    <h3>Liste de soft</h3>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if(!is_null($softsList) && !empty($softsList))
                @foreach ($softsList as $soft)
                    <tr>
                        <td>{{ $soft->id }}</td>
                        <td>{{ $soft->name }}</td>
                        <td>
                            <a href="{{ route('admin.edit_soft', $soft->id) }}">Modifier</a>
                            <form action="{{ route('admin.delete_soft') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="soft_id" value={{$soft->id}}>
                                <button type="submit">Supprimer</button>
                            </form>
                            {{-- <a href="{{ route("admin.delete_soft", $soft->id) }}">Supprimer</a> --}}
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <form action="{{ route('admin.create_soft') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name">
        <button type="submit">Create Soft</button>
    </form>
</div>