<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="/updateArticle/{{$article->id}}" method="POST"  enctype="multipart/form-data">
        @csrf
        @method('patch')
        <label for="Tittle">Tittle</label><br>
        <input type="text" placeholder="Input Tittle..." id="Tittle" name="Tittle" value="{{$article->Tittle}}"><br>
        <label for="Image">Image</label><br>
        <input type="file" placeholder="Input thumbnail..." id="Image" name="Image" value="{{$article->Image}}"><br>
        <label for="Content">Content</label><br>
        <input type="text" placeholder="Input Content..." id="Content" name="Content" value="{{$article->Content}}"><br>
        <button>Submit</button>
    </form>
</body>

</html>
