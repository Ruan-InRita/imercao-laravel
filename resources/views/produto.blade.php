<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>

    <style>

        .form{
            width: 800px;
            margin: 0px auto;
            background: cornsilk;

            display: flex;
            flex-direction: column;
            margin: 50px auto;
        }

        input {
            margin: 10px 0px;
            padding: 10px 5px;
        }

        button{
            height: 60px;
            background: rgb(114, 255, 114);
            border: none;
            border-radius: 10px;

            font-size: 1.5rem;
            font-weight: 700;

        }
    </style>
</head>
<body>
    <div style="with:100%; height: 50px; background: red">
        <h1 style="color: white; text-align: center">{{$data}}</h1>
    </div>
    <form class="form" action="{{route('product/store')}}" method="post">
        @csrf
        
        <h1>Casdastrar Produto</h1>
        <input type="text" name="nome" placeholder="name">
        <input type="text" name="preco" placeholder="preco">
        <input type="text" name="descricao" placeholder="descricao" >
        <input type="text" name="marca" placeholder="marca">
        <button type="submit">Criar</button>
    </form>

</body>
</html>