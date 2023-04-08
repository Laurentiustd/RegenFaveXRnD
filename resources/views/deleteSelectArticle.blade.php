<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=PT Serif Caption' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/articlepage.css') }}">
    <title>Document</title>
</head>

<body>
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
                <button type="button" id="signupbtn" href="/step1" class="hover:bg-blue-700 font-semibold pt-2.5 pb-2.5 px-9 mx-2 rounded-full">Sign Up</button> --}}
                <x-app-layout>
                </x-app-layout>
            </div>
        </div>
    </nav>



    <section class="pt-10 w-5/6 ">
        <div class="flex items-center justify-around mx-10 mb-10 text-center ">
            <button type="button" id="addbtn" href=""
                class="h-18 w-80 hover:bg-blue-700 font-semibold pt-2.5 pb-2.5 px-9 mx-2 rounded-2xl">Add
                Article</button>
            <button type="button" id="editbtn" href=""
                class="h-18 w-80 hover:bg-blue-700 font-semibold pt-2.5 pb-2.5 px-9 mx-2 rounded-2xl">Edit
                Article</button>
            <button type="button" id="delbtn" href=""
                class="h-18 w-80 hover:bg-blue-700 font-semibold pt-2.5 pb-2.5 px-9 mx-2 rounded-2xl">Delete
                Article</button>
        </div>



        <div class="">
            <div class="grid grid-cols-3 justify-items-center">
                @if (Auth::user()->role == 'admin')

                    @foreach ($article1 as $item)
                        {{-- <div style="background-color: whitesmoke; padding:3em">
                    <h1>{{ $item->Tittle }}</h1>
                    <img src="{{ asset('/storage/article/images/' . $item->Image) }}" style="width: 30em; height:20em"
                    alt="thumbnail">
                    <p>{{ $item->Content }}</p>
                    <a href="/editArticle/{{ $item->id }}">edit</a>
                    <form action="/deleteArticle/{{ $item->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button>Delete</button>
                    </form>
                </div> --}}
                        <div class="px-4">
                            <div
                                class="kolartikel py-16 px-12 mb-12  sm:w-48 lg:w-72 transform transition duration-300 ease-in-out hover:-translate-y-2 rounded-2xl">
                                <img src="{{ asset('/storage/article/images/' . $item->Image) }}"
                                    style="width: 30em; height:10em" alt="thumbnail">
                                <h3 class="text-lg leading-normal mt-2 font-semibold text-black"
                                    style="width: 10em; text-align: center">{{ $item->Tittle }}</h3>
                                <form action="/deleteArticle/{{ $item->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button
                                        style="font-weight: bold; text-align: center; padding: .5em 1em; border-radius: 10px;background-color: antiquewhite">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                @elseif(Auth::user()->role == 'member')
                    @foreach ($article1 as $item)
                        @if ($item->Author == Auth::user()->name)
                            <div class="px-4">
                                <div
                                    class="kolartikel py-16 px-12 mb-12  sm:w-48 lg:w-72 transform transition duration-300 ease-in-out hover:-translate-y-2 rounded-2xl">
                                    <img src="{{ asset('/storage/article/images/' . $item->Image) }}"
                                        style="width: 30em; height:10em" alt="thumbnail">
                                    <h3 class="text-lg leading-normal mt-2 font-semibold text-black"
                                        style="width: 10em; text-align: center">{{ $item->Tittle }}</h3>
                                    <form action="/deleteArticle/{{ $item->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button
                                            style="font-weight: bold; text-align: center; padding: .5em 1em; border-radius: 10px;background-color: antiquewhite">Delete</button>
                                    </form>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif
                {{-- <div class="px-4">
                        <div class="kolartikel py-16 px-12 mb-12  sm:w-48 lg:w-72 transform transition duration-300 ease-in-out hover:-translate-y-2 rounded-2xl">
                            <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Article 1</h3>
                            <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    
                    <div class="px-4">
                    <div class="kolartikel py-16 px-12 mb-12 sm:w-48 lg:w-72 transform transition duration-300 ease-in-out hover:-translate-y-2 rounded-2xl ">
                        <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Article 2</h3>
                        <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>

                <div class="px-4" >
                    <div class="kolartikel py-16 px-12 mb-12 sm:w-48 lg:w-72  transform transition duration-300 ease-in-out hover:-translate-y-2 rounded-2xl">
                        <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Article 3</h3>
                        <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>     --}}


                {{-- <div class="flex flex-col">
            <div class="flex items-center justify-around mx-10 text-center ">
                <div class="px-4">
                    <div class="kolartikel py-16 px-12 mb-12 sm:w-48 lg:w-72  transform transition duration-300 ease-in-out hover:-translate-y-2 rounded-2xl">
                        <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Article 4</h3>
                        <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>

                <div class="px-4">
                    <div class="kolartikel py-16 px-12 mb-12 sm:w-48 lg:w-72   transform transition duration-300 ease-in-out hover:-translate-y-2 rounded-2xl">
                        <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Article 5</h3>
                        <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>

                <div class="px-4" >
                    <div class="kolartikel py-16 px-12 mb-12 sm:w-48 lg:w-72  transform transition duration-300 ease-in-out hover:-translate-y-2 rounded-2xl">
                        <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Article 6</h3>
                        <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div> 
                </div>
            </div>   
        </div>  --}}
            </div>

    </section>
</body>

</html>
