<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <a href=" {{ route('contacts') }} ">Contacts</a>
        <a href=" {{ route('adress') }} ">Adress</a>

    </header>
    <h1>Welcome</h1>
    <p>by</p>
    <h2> {{ $name }} </h2>
    <h2> {{ $surname}} </h2>
</body>

</html>