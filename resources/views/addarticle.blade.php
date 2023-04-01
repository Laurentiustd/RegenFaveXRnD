<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="/storeArticle" method="POST"  enctype="multipart/form-data">
        @csrf
        <label for="Tittle">Tittle</label><br>
        <input type="text" placeholder="Input Tittle..." id="Tittle" name="Tittle"><br>
        <label for="Image">Image</label><br>
        <input type="file" placeholder="Input thumbnail..." id="Image" name="Image"><br>
        <label for="Content">Content</label><br>
        <input type="text" placeholder="Input Content..." id="Content" name="Content"><br>
        <button>Submit</button>
    </form>
</body>

</html>
