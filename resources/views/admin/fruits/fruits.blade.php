
<h1 class="child">Liste des Fruits</h1>
        @foreach ($fruitsList as $fruit)    
    <div class="child">
        <p>{{ $fruit->id }}</p>
        <h3>{{ $fruit->name }}</h3>
        {{-- <h3>{{ $fruit->file_path }}</h3> --}}
        <td><img src="{{ asset('../storage/app/public/' . $fruit->file_path) }}" width="100" height="100%"/></td>

        <a href="{{ route('admin.edit_fruits', $fruit->id) }}" >modifier</a>
        <form action="{{ route('admin.delete_fruits') }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="hidden" name="fruits_id" value="{{ $fruit->id }}"/>
            <button type="submit">Supprimer</button>
        </form>
        {{-- <a class="del" href="{{ route('admin.delete_fruits', $fruit->id) }}">supprimer</a> --}}
        <p>----------</p>
    </div>
@endforeach
<form action="{{ route('admin.store_fruits') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="name">
    <input type="file" name="image" accept=".gif, image/jpg, image/jpeg, image/png">
    <button type="submit">Envoyer</button>
</form>