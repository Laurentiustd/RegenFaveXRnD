<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=PT Serif Caption' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/register1.css') }}">
    <title>Register 1</title>
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


    <section class="pt-10 w-3/5">
        <div class="flex flex-col justify-center items-center">
            <h1 class="font-bold text-4xl mb-3">Register</h1>
            <h6 class="font-medium text-lg mb-6">Sign Up and Start Learning</h6>
        </div>
        <form class="grid grid-cols-2 gap-6 mt-8 py-12 px-4 rounded-3xl" id="form">
            <div class="mx-10">
                <label class="mx-1 mb-2 font-semibold">First Name *</label>
                <input type="text" id="input" class="w-full px-5 py-2 mt-2 mb-4 placeholder-gray-500 bg-white rounded-md border focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
            </div>

            <div class="mx-10">
                <label class="mx-1 mb-2 font-semibold">Last Name *</label>
                <input type="text" id="input" class="w-full px-5 py-2 mt-2 mb-4 placeholder-gray-500  rounded-md border focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
            </div>
            
            <div class="mx-10">
                <label class=" mx-1 mb-2 font-semibold">Email *</label>
                <input type="email" id="input" placeholder="abcde@gmail.com" class=" w-full px-5 py-2 mt-2 mb-4 placeholder-gray-500  rounded-md border focus:border-blue-400  focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
            </div>

            <div class="mx-10">
                <label class=" mx-1 mb-2 font-semibold">Phone Number *</label>
                <input type="text" id="input" placeholder="+62 |" class=" w-full px-5 py-2 mt-2 mb-4 placeholder-gray-500  rounded-md border focus:border-blue-400  focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
            </div>

            <div class="mx-10">
                <label class=" mx-1 mb-2 font-semibold">Password *</label>
                <input type="password" id="input" class=" w-full px-5 py-2 mt-2 mb-4 placeholder-gray-500  rounded-md border focus:border-blue-400  focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
            </div>

            <div class="mx-10">
                <label class=" mx-1 mb-2 font-semibold">Confirm Password *</label>
                <input type="password" id="input" class=" w-full px-5 py-2 mt-2 mb-4 placeholder-gray-500 rounded-md border focus:border-blue-400  focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
            </div>

        </form>

        <div class="flex flex-row items-start justify-between mt-8 mx-4">
            <a href="" id="backlogin" class="font-medium text-sm" >< Back To Login</p>
            <a href="" class="font-medium text-sm" >Next Step ></a> 
        </div>
       
        
    </section>
</body>
</html>
