<form action="{{route('sirops.update', $sirops->id)}}" method="POST">
    @csrf
    <div class="form-group">
        <input type="text" name="name" placeholder="name" value="{{ $sirops->name }}">
    </div>
    <button type="submit" >Submit</button>
</form>