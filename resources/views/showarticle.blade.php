<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/seearticle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/articlepage.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=PT Serif Caption' rel='stylesheet'>
    <title>Article</title>
    <style>
        .judul{
            font-size: 3em;
            font-weight: bold;
            text-align: center;
            padding: 3em
        }

        .gambar{
            height: 80vh;
            width: 80vw;
            margin: 0 auto;
        }

        .isi{
            padding: 3em
        }
    </style>
</head>
<body>
    <nav class="py-2.5">
        <div class="flex flex-wrap items-center justify-around px-4 mx-10">
            <a href="" class="flex items-center">
                <span id="brand" class="self-center text-2xl whitespace-nowrap dark:text-white">BrainGrow</span>
            </a>
            
            <div class="items-center justify-between hidden w-full md:flex md:w-auto" >
                <ul class="flex flex-col p-4 mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/home" class="block py-2 pl-3 pr-4 text-gray-700 text-lg font-semibold rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 text-lg font-semibold hover:text-blue-700 md:p-0 ">About</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 text-lg font-semibold rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Course</a>
                    </li>
                    <li>
                        <a href="/blog" class="block py-2 pl-3 pr-4 text-gray-700 text-lg font-semibold rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Blog</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 text-lg font-semibold  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center">
            {{-- <x-app-layout>
            </x-app-layout>       --}}
            </div>
        </div>
        
    </nav>

    <h1 class="judul">{{$article->Tittle}}</h1>
    <img src="{{ asset('/storage/article/images/' . $article->Image) }}" alt="thumbnail" class="gambar">
    <p class="isi">{{$article->Content}}</p>
</body>
</html>