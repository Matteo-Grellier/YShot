
<h1 class="underline underline-offset-1 text-2xl font-bold container mx-auto pt-10 ">Liste des Fruits</h1>
@foreach ($fruitsList as $fruit)
    <div>
        <p>{{ $fruit->id }}</p>
        <h3>{{ $fruit->name }}</h3>
        {{-- <h3>{{ $fruit->file_path }}</h3> --}}
        <img src="{{ "img/" . $fruit->file_path}}" width="400" height="500"/>

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
<a href="{{ route('admin.create_fruits') }}" >add a fruit</a>
