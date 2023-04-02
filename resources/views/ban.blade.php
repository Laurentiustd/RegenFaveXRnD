<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ban.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <!-- navbar -->
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
                            class="block py-2 pl-3 pr-4 text-white text-base font-semibold bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 text-base font-semibold hover:text-blue-700 md:p-0 ">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 text-base font-semibold rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Course</a>
                    </li>
                    <li>
                        <a href="/blog"
                            class="block py-2 pl-3 pr-4 text-gray-700 text-base font-semibold rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Blog</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 text-base font-semibold  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center">
                <x-app-layout>
            </x-app-layout>

            </div>
        </div>

    </nav>

    <div class="container-ban">
        <div class="tittle">
            <h1>List Member : </h1>
        </div>
        <div class="container-table">
            <table>
                <tr id="kolom">
                    <th>Username</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Number</th>
                    <th>Gender</th>
                    <th>Birthdate</th>
                    <th>Birthdate</th>
                </tr>
                <tr>
                    <th>Lorem1</th>
                    <th>Lorem Ithsum</th>
                    <th>Lorem@gmail.com</th>
                    <th>08123456789</th>
                    <th>male</th>
                    <th>Jakarta, 03-03-2003</th>
                    <th><button>Ban</button></th>
                </tr>
                <tr>
                    <th>Lorem1</th>
                    <th>Lorem Ithsum</th>
                    <th>Lorem@gmail.com</th>
                    <th>08123456789</th>
                    <th>male</th>
                    <th>Jakarta, 03-03-2003</th>
                    <th><button>Ban</button></th>
                </tr>
                <tr>
                    <th>Lorem1</th>
                    <th>Lorem Ithsum</th>
                    <th>Lorem@gmail.com</th>
                    <th>08123456789</th>
                    <th>male</th>
                    <th>Jakarta, 03-03-2003</th>
                    <th><button>Ban</button></th>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>