<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=PT Serif Caption' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/homepage3.css') }}">
    <title>Article Page</title>
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
                    <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 text-lg font-semibold rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 text-lg font-semibold hover:text-blue-700 md:p-0 ">About</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 text-lg font-semibold rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Course</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 text-lg font-semibold rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Blog</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 text-lg font-semibold  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                </li>
                </ul>
            </div>
            
            <div class="flex items-center">
                <a href="" id="loginbtn" class="hover:bg-slate-700 hover:text-rose-50 font-semibold pt-2 pb-2 px-9 mx-2 rounded-full ">Log In</a>
                <a href="" id="signupbtn" class="font-semibold pt-2.5 pb-2.5 px-9 mx-2 rounded-full">Sign Up</a>
            </div>
        </div>
    </nav>



    <section class="pt-10 w-5/6 ">
        <div class="flex items-center justify-around mx-24 mb-10 text-center ">
            <a href="" id="addbtn" class="h-18 w-80 hover:bg-yellow-900 hover:text-rose-50  font-semibold pt-2.5 pb-2.5 px-9 mx-12 rounded-2xl">Add Article</a>
            <a href="" id="editbtn" class="h-18 w-80 hover:bg-yellow-900 hover:text-rose-50  font-semibold pt-2.5 pb-2.5 px-9 mx-12 rounded-2xl">Edit Article</a>
            <a href="" id="delbtn" class="h-18 w-80 hover:bg-yellow-900 hover:text-rose-50  font-semibold pt-2.5 pb-2.5 px-9 mx-12 rounded-2xl">Delete Article</a>            
        </div>

        <div class="flex flex-col">
            <div class="flex items-center justify-around mx-24 text-center ">
                <div class="px-4" >
                    <div class="kolartikel py-8 px-6 mb-12 sm:w-48 lg:w-72  transform transition duration-300 ease-in-out hover:-translate-y-2 rounded-2xl">
                        <img src="{{ asset('assets/article/art1.png') }}" alt="" class="mb-4"> 
                        <h3 class="text-lg leading-normal font-bold text-black">Title Article</h3>
                        <p class="font-semibold">Author</p>
                    </div> 
                </div>

                <div class="px-4" >
                    <div class="kolartikel py-8 px-6 mb-12 sm:w-48 lg:w-72  transform transition duration-300 ease-in-out hover:-translate-y-2 rounded-2xl">
                        <img src="{{ asset('assets/article/art2.png') }}" alt="" class="mb-4"> 
                        <h3 class="text-lg leading-normal font-bold text-black">Title Article</h3>
                        <p class="font-semibold">Author</p>
                    </div> 
                </div>

                <div class="px-4" >
                    <div class="kolartikel py-8 px-6 mb-12 sm:w-48 lg:w-72  transform transition duration-300 ease-in-out hover:-translate-y-2 rounded-2xl">
                        <img src="{{ asset('assets/article/art3.png') }}" alt="" class="mb-4"> 
                        <h3 class="text-lg leading-normal font-bold text-black">Title Article</h3>
                        <p class="font-semibold">Author</p>
                    </div> 
                </div>
            </div>    


            <div class="flex items-center justify-around mx-24 text-center ">
                <div class="px-4" >
                    <div class="kolartikel py-8 px-6 mb-12 sm:w-48 lg:w-72  transform transition duration-300 ease-in-out hover:-translate-y-2 rounded-2xl">
                        <img src="{{ asset('assets/article/art4.png') }}" alt="" class="mb-4"> 
                        <h3 class="text-lg leading-normal font-bold text-black">Title Article</h3>
                        <p class="font-semibold">Author</p>
                    </div> 
                </div>

                <div class="px-4" >
                    <div class="kolartikel py-8 px-6 mb-12 sm:w-48 lg:w-72  transform transition duration-300 ease-in-out hover:-translate-y-2 rounded-2xl">
                        <img src="{{ asset('assets/article/art5.png') }}" alt="" class="mb-4"> 
                        <h3 class="text-lg leading-normal font-bold text-black">Title Article</h3>
                        <p class="font-semibold">Author</p>
                    </div> 
                </div>

                <div class="px-4" >
                    <div class="kolartikel py-8 px-6 mb-12 sm:w-48 lg:w-72  transform transition duration-300 ease-in-out hover:-translate-y-2 rounded-2xl">
                        <img src="{{ asset('assets/article/art6.png') }}" alt="" class="mb-4"> 
                        <h3 class="text-lg leading-normal font-bold text-black">Title Article</h3>
                        <p class="font-semibold">Author</p>
                    </div> 
                </div>
            </div>   
        </div>


        <div class="flex items-center justify-center mb-10 text-center ">
            <a href="" id="slidebtn" class="h-12 w-12 hover:bg-yellow-900 hover:text-rose-50 font-semibold text-xl rounded-full mx-2 flex items-center justify-center"><</a>
            <a href="" id="slidebtn" class="h-12 w-12 hover:bg-yellow-900 hover:text-rose-50  font-semibold text-xl rounded-full mx-2 flex items-center justify-center">1</a>
            <a href="" id="slidebtn" class="h-12 w-12 hover:bg-yellow-900 hover:text-rose-50  font-semibold text-xl rounded-full mx-2 flex items-center justify-center">2</a>
            <a href="" id="slidebtn" class="h-12 w-12 hover:bg-yellow-900 hover:text-rose-50  font-semibold text-xl rounded-full mx-2 flex items-center justify-center">3</a>
            <a href="" id="slidebtn" class="h-12 w-12 hover:bg-yellow-900 hover:text-rose-50  font-semibold text-xl rounded-full mx-2 flex items-center justify-center">4</a>
            <a href="" id="slidebtn" class="h-12 w-12 hover:bg-yellow-900 hover:text-rose-50  font-semibold text-xl rounded-full mx-2 flex items-center justify-center">5</a>
            <a href="" id="slidebtn" class="h-12 w-12 hover:bg-yellow-900 hover:text-rose-50  font-semibold text-xl rounded-full mx-2 flex items-center justify-center">></a>
        </div>
    </section>
</body>
</html>
