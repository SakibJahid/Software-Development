<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Project</title>
</head>

<body>
    <h1>Demo Page</h1>
    @if ($name == 'sakib')
        <h1>Name: {{ $name }}</h1>

    @elseif($id==2242)
    <h1>ID: {{'2242'}}</h1>

    @else
        {{ 'This is not Sakib' }}
    @endif

</body>

</html>
