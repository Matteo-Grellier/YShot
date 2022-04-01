<div>
    <h1 class="underline underline-offset-1 text-2xl font-bold container mx-auto pt-10 ">Liste de type d'alcool</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if(!is_null($alcoolsTypes) && !empty($alcoolsTypes))
                @foreach ($alcoolsTypes as $alcoolType)
                    <tr>
                        <td>{{ $alcoolType->id }}</td>
                        <td>{{ $alcoolType->name }}</td>
                        <td>
                            <a href="{{ route('admin.edit_alcools_types', $alcoolType->id) }}">Modifier</a>
                            <form action="{{ route('admin.delete_alcools_types') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="alcools_types_id" value={{$alcoolType->id}}>
                                <button type="submit">Supprimer</button>
                            </form>
                            {{-- <a href="{{ route("admin.delete_soft", $soft->id) }}">Supprimer</a> --}}
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <form action="{{ route('admin.create_alcools_types') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name">
        <button type="submit">Create Soft</button>
    </form>
</div>