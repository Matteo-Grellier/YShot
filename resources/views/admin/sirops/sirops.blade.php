<div class="child">
    <h1 class="">Liste des Sirops</h1>
    <table class="">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>created-at</th>
                <th>updated-at</th>
                <th>Supprimer</th>
                <th>Modifier</th>
            </tr>
        </thead>
    @foreach ($siropsList as $sirop)
    <tbody>
        <tr>
            <td class="">{{ $sirop->id }}</td>
            <td class="">{{ $sirop->name }}</td>
            <td class="">{{ $sirop->created_at }}</td>
            <td class="">{{ $sirop->updated_at }}</td>
            <td class="">
                <form action="{{ route('sirops.delete') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" value="{{ $sirop->id }}" name="sirops_id">
                    <button type="submit">Supprimer</button>
                </form>
            </td>
            <td class="">{{ $sirop->Modifier }}
                <a href="{{ route('sirops.edit', ['id' => $sirop->id]) }}">Modifier</a>
            </td>
        </tr>
    </tbody>
    @endforeach
    </table>

    <div>
        <form action="{{route('sirops.create')}}" method="POST">
            @csrf
            <div class="">
                <input type="text" name="name" placeholder="name">
            </div>
            <button type="submit" >Submit</button>
        </form>
    </div>
</div>