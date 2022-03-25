<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create fruits</title>
</head>
<body>

    <h2>create Fruits</h2>

    <form action="{{ route('admin.store_fruits') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name">
        <button type="submit">Envoyer</button>
    </form>

</body>
</html>