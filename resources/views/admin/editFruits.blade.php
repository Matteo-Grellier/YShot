<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit fruits</title>
</head>
<body>

    <h2>edit Fruits</h2>

    <form action="{{ route('admin.update_fruits', $fruits->id) }}" method="POST">
        @csrf
        @method("PUT")
        <input type="text" name="name" placeholder="name" value="{{ $fruits->name }}">
        <button type="submit">Envoyer</button>
    </form>

</body>
</html>