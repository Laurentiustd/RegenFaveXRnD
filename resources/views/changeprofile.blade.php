<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=PT Serif Caption' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/datepicker.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/changeprofile.css') }}">
    <title>Change Profile</title>
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
        <div class="flex justify-center">
            <h1 class="font-bold text-4xl mb-6">Change Profile</h1>
        </div>
        <form class="grid grid-cols-2 gap-6 mt-8">
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

            <div class="mx-10">
                <label class=" mx-1 mb-2 font-semibold">Username *</label>
                <input type="text" id="input" class=" w-full px-5 py-2 mt-2 mb-4 placeholder-gray-500  rounded-md border focus:border-blue-400  focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
            </div>

            <div class="mx-10">
                <label class="mx-1 mb-2 font-semibold">Gender *</label>
                <button id="input" data-dropdown-toggle="dropdown" class="w-full px-5 py-2 mt-2 mb-4 border text-gray-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-center inline-flex items-center" type="button">
                    Please select
                    <svg class="w-6 h-4 ml-60" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div id="dropdown" class="w-96 z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li><a href="#" class="block mx-2 px-4 py-2 hover:bg-gray-100 ">Man</a></li>
                        <li><a href="#" class="block mx-2 px-4 py-2 hover:bg-gray-100 ">Woman</a></li>
                    </ul>
                </div>

            </div>

            <div class="mx-10">
                <label class=" mx-1 mb-2 font-semibold">Date of Birth *</label>
                <input datepicker type="text" id="input" class="w-full px-5 py-2 mt-2 mb-4 border rounded-md placeholder-gray-500 focus:ring-blue-500 focus:border-blue-500 " placeholder="MM / DD / YYYY">
            </div>

            <div class="mx-10">
                <label class=" mx-1 mb-2 font-semibold">Place of Birth *</label>
                <input type="text" id="input" class=" w-full px-5 py-2 mt-2 mb-4 placeholder-gray-500 rounded-md border focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
            </div>

            <div class="col-span-2 flex justify-center">
                <a href="" id="savebtn" class="h-12 w-40 hover:bg-yellow-900 hover:text-rose-50 font-semibold text-xl rounded-xl mx-2 flex items-center justify-center mt-10 text-center ">Save</a>
            </div>
        </form>
       

        
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>
</html>