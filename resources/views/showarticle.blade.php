<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($article as $item)
    <div style="background-color: whitesmoke; padding:3em">
        <h1>{{$item->Tittle}}</h1>
        <img src="{{asset('/storage/article/images/'.$item->Image)}}" style="width: 30em; height:20em" alt="thumbnail">
        <p>{{$item->Content}}</p>
        <a href="/editArticle/{{$item->id}}">edit</a> 
        <form action="/deleteArticle/{{$item->id}}" method="POST">
            @csrf
            @method('delete')
            <button>Delete</button>
        </form>
    </div>
    @endforeach
</body>
</html>