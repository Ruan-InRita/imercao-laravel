<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container{
            width: 1200px;
            background: rgba(159, 159, 255, 0.87);
            margin: 0px auto;
            display: flex;
        }
        .container .item{
            width: 40%;
            margin-right: 5%;
            background: red;
            padding: 30px;
        }
        
    </style>
</head>
<body>

    <div class="container">
        @foreach ($produtos as  $produto)
            <div class="item">
                <h1>Nome: {{$produto['name']}}</h1>
                <h1>Preco: {{$produto['price']}}</h1>
                <h1>Descricao: {{$produto['description']}}</h1>
                <h1>Marca: {{$produto['brand']}}</h1>
            </div>
        @endforeach
    </div>
    
</body>
</html>