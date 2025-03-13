<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user profile</title>
</head>
<body>
<h1>user profile</h1>

<p><strong>Name:</strong> {{ $user->name }}</p>
<p><strong>Surname:</strong> {{ $user->surname }}</p>
<p><strong>Email:</strong> {{ $user->email }}</p>

<a href="{{ route('home') }}">home page</a>
</body>
</html>
