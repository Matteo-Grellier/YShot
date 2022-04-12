<div>
    <h1 class="underline underline-offset-1 text-2xl font-bold container mx-auto pt-10 ">Liste de noms d'alcool</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Degré</th>
                <th>Type d'alcool</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if(!is_null($alcoolsTypes) && !empty($alcoolsTypes))
                @foreach ($alcoolsNames as $alcoolName)
                    <tr>
                        <td>{{ $alcoolName->name }}</td>
                        <td>{{ $alcoolName->degree }}</td>
                        <td>{{ $alcoolName->alcoolType->name }}</td>
                        <td>
                            <a href="{{ route('admin.edit_alcool_name', $alcoolName->id) }}">Modifier</a>
                            <form action="{{ route('admin.delete_alcool_name') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="alcool_name_id" value={{$alcoolName->id}}>
                                <button type="submit">Supprimer</button>
                            </form>
                            {{-- <a href="{{ route("admin.delete_soft", $soft->id) }}">Supprimer</a> --}}
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <form action="{{ route('admin.create_alcool_name') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="text" name="degree" placeholder="degree">
        <select name="alcools_types_id">
            @foreach($alcoolsTypes as $alcoolType) 
                <option value={{ $alcoolType->id }}>{{ $alcoolType->name }}</option>
            @endforeach
        </select>
        <button type="submit">Create alcool</button>
    </form>
</div>