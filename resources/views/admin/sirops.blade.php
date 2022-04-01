<div class="w-1 flex-col ">
    <h1 class="underline underline-offset-1 text-2xl font-bold container mx-auto pt-10 ">Liste des Sirops</h1>
    <table class="table-auto border-collapse border border-slate-500 ">
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
            <td class="border border-slate-700">{{ $sirop->id }}</td>
            <td class="border border-slate-700">{{ $sirop->name }}</td>
            <td class="border border-slate-700">{{ $sirop->created_at }}</td>
            <td class="border border-slate-700">{{ $sirop->updated_at }}</td>
            <td class="border border-slate-700">
                <form action="{{ route('sirops.delete') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" value="{{ $sirop->id }}" name="sirops_id">
                    <button type="submit">Supprimer</button>
                </form>
            </td>
            <td class="border border-slate-700">{{ $sirop->Modifier }}
                <a href="{{ route('sirops.edit', ['id' => $sirop->id]) }}">Modifier</a>
            </td>
        </tr>
    </tbody>
@endforeach
    </table>
</div>
<div>
    <form action="{{route('sirops.create')}}" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" name="name" placeholder="name">
        </div>
        <button type="submit" >Submit</button>
    </form>
</div>

