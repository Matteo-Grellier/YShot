

<div>
    <h1 class="underline underline-offset-1 text-2xl font-bold container mx-auto pt-10 ">Liste de type de verre</h1>
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
            @if(!is_null($glassesTypes) && !empty($glassesTypes))
                @foreach ($glassesTypes as $glassType)
                    <tr>
                        <td>{{ $glassType->id }}</td>
                        <td>{{ $glassType->name }}</td>
                        <td><img src="{{ asset('../storage/app/public/' . $glassType->image_path) }}" width="100" height="100%"/></td>
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
    <form action="{{ route('admin.create_glasses_types') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="file" name="image" accept=".gif, image/jpg, image/jpeg, image/png">
        <button type="submit">Create Soft</button>
    </form>
</div>