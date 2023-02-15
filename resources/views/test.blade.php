
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Test Page</h1>
    @for ($i = 0, $j = 0; $i < sizeof($grupe); $i++, $j < sizeof($specialitati) ? $j = 0 : $j++)
        <h2>{{$grupe[$i], ' ', $specialitati[$i]}}</h2>
    @endfor
</body>
</html>