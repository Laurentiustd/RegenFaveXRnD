{{-- <!DOCTYPE html>
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

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=PT Serif Caption' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/datepicker.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Add Article</title>
    <style>
        * {
            font-family: 'Montserrat';
        }

        body {

            font-family: Arial, sans-serif;
            background-color: #F8F4F2;
            /* Light cream color */
            /* display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around; */
            height: 100vh;
            margin: 0;
        }

        /* section{margin: 0 auto;} */
        #brand {
            font-family: 'PT Serif Caption';
        }

        #loginbtn {
            border-color: #4A4E69;
            border-width: 3px;
        }

        #signupbtn {
            color: #F8F4F2;
            background-color: #22223B;
        }

        #savebtn {
            color: #F8F4F2;
            background-color: #22223B;
        }

        #input {
            background: #F2E9E4;
            border-color: #22223B;
        }

        h1 {
            position: absolute;
            top: 5rem;
            left: 50%;
            transform: translate(-50%, 0);
            margin: 1rem 0;
            z-index: 10;
        }

        .container {
            display: flex;
            align-items: center;
            width: 700px;
            height: 400px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            background-color: #F2E9E4;
            border-radius: 5px;
            /* Rounded corners */
            margin-top: 70px;
        }

        .left-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .right-container {
            flex: 2;
            margin-left: 2rem;
        }

        .form-group {
            margin-bottom: 1rem;
            width: 100%;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
        }

        input[type="text"],
        textarea {
            background-color: #F2E9E4;
            width: 100%;
            padding: 0.5rem;
            box-sizing: border-box;
            border: 1px solid black;
            border-radius: 5px;
            /* Rounded corners */
            font-size: 16px;
        }

        input[type="file"] {
            display: none;
        }

        #add {
            position: absolute;
            bottom: 70%;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            width: 200px;
        }

        #save {
            /* position: relative;
            bottom: 1rem;
            left: 66%;
            transform: translateX(-50%);
            z-index: 10; */
        }

        .article-thumbnail-container {
            position: relative;
            width: 300px;
            height: 150px;
            border: 1px dashed #000;
            border-radius: 5px;
            /* Rounded corners */
            margin-right: 1rem;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            font-weight: bold;
        }

        .article-thumbnail {
            max-width: 100%;
            max-height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            border-radius: 5px;
            /* Rounded corners */
        }

        textarea {
            min-height: 220px;
            /* Height based on thumbnail and title */
            resize: vertical;
        }
    </style>
</head>

<body>
    <!-- <h1>Add Article</h1> -->
    <nav class="py-2.5">
        <div class="flex flex-wrap items-center justify-around px-4 mx-10">
            <a href="" class="flex items-center">
                <span id="brand" class="self-center text-2xl whitespace-nowrap dark:text-white">BrainGrow</span>
            </a>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto">
                <ul
                    class="flex flex-col p-4 mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/home"
                            class="block py-2 pl-3 pr-4 text-gray-700 text-lg font-semibold rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 text-lg font-semibold hover:text-blue-700 md:p-0 ">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 text-lg font-semibold rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Course</a>
                    </li>
                    <li>
                        <a href="/blog"
                            class="block py-2 pl-3 pr-4 text-gray-700 text-lg font-semibold rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Blog</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 text-lg font-semibold  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center">
                {{-- <button type="button" id="loginbtn" class="hover:bg-slate-700 hover:text-blue-600 font-semibold pt-2 pb-2 px-9 mx-2 rounded-full ">Log In</button>
                <button type="button" id="signupbtn" href="/step1" class="hover:bg-blue-700 font-semibold pt-2.5 pb-2.5 px-9 mx-2 rounded-full">Sign Up</button>  --}}
                <x-app-layout>
                </x-app-layout>
            </div>
        </div>
    </nav>
    <form action="/storeArticle" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container" style="margin: 5em auto">
            <div class="left-container">
                <div class="form-group">
                    <label for="thumbnail">Upload Thumbnail:</label>
                    <div class="article-thumbnail-container" onclick="document.getElementById('thumbnail').click()">
                        <span>+</span>
                        <img id="preview" class="article-thumbnail" style="display: none;">
                        <input type="file" id="thumbnail" name="Image" onchange="loadThumbnail(event)">
                    </div>
                </div>
                <div class="form-group">
                    <label for="title">Article
                        Title:</label>
                    <input type="text" id="title" name="Tittle">
                </div>
            </div>
            <div class="right-container">
                <div class="form-group">
                    <label for="content">Article Content:</label>
                    <textarea id="content" rows="5" name="Content"></textarea>
                </div>
                <div id="articles">
                </div>
                <button id="save"
                    style="margin-top:2em;background-color: black; color:white; padding:.5em 1.5em; border-radius: 10px">Save</button>
            </div>
    </form>
    </div>
    <script>
        const saveBtn = document.getElementById('save');
        const addBtn = document.getElementById('add');
        const thumbnailInput = document.getElementById('thumbnail');
        const titleInput = document.getElementById('title');
        const contentInput = document.getElementById('content');
        const articlesDiv = document.getElementById('articles');
        const preview = document.getElementById('preview');

        // function createArticle(title, thumbnail, content) {
        //     const articleDiv = document.createElement('div');
        //     articleDiv.className = 'article';
        //     const thumbnailContainer = document.createElement('div');
        //     thumbnailContainer.className = 'article-thumbnail-container';
        //     if (thumbnail) {
        //         const articleThumbnail = document.createElement('img');
        //         articleThumbnail.src = thumbnail;
        //         articleThumbnail.className = 'article-thumbnail';
        //         thumbnailContainer.appendChild(articleThumbnail);
        //     }
        //     articleDiv.appendChild(thumbnailContainer);
        //     const articleInfo = document.createElement('div');
        //     articleInfo.className = 'article-info';
        //     const articleTitle = document.createElement('h2');
        //     articleTitle.className = 'article-title';
        //     articleTitle.textContent = title;
        //     articleInfo.appendChild(articleTitle);
        //     const articleContent = document.createElement('p');
        //     articleContent.className = 'article-content';
        //     articleContent.textContent = content;
        //     articleInfo.appendChild(articleContent);
        //     articleDiv.appendChild(articleInfo);
        //     return articleDiv;
        // }

        function loadThumbnail(event) {
            const reader = new FileReader();
            reader.onload = () => {
                preview.src = reader.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(event.target.files[0]);
        }
        // saveBtn.addEventListener('click', () => {
        //     const title = titleInput.value;
        //     const content = contentInput.value;
        //     const thumbnail = preview.src;
        //     if (title && content) {
        //         const newArticle = createArticle(title, thumbnail, content);
        //         articlesDiv.appendChild(newArticle);
        //         titleInput.value = '';
        //         contentInput.value = '';
        //         thumbnailInput.value = '';
        //         preview.style.display = 'none';
        //         preview.src = '';
        //     } else {
        //         alert('Please fill in the title and content fields.');
        //     }
        // });
        // addBtn.addEventListener('click', () => {
        //     titleInput.value = '';
        //     contentInput.value = '';
        //     thumbnailInput.value = '';
        //     preview.style.display = 'none';
        //     preview.src = '';
        //     titleInput.focus();
        // });
    </script>

</body>

</html>
