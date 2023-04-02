<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=PT Serif Caption' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/homepage2.css') }}">
    <title>Article Page</title>
</head>
<body class="w-full h-screen">
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
                <a href="" id="signupbtn" class=" font-semibold pt-2.5 pb-2.5 px-9 mx-2 rounded-full">Sign Up</a>
                
            </div>
        </div>
        
    </nav>

    <section class="pt-10 w-2/3 ">
        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/article/seeart.png') }}" alt="" class="border-2 rounded-2xl"  id="artshown">
        </div>

        <div class="flex mt-10 justify-center items-center">
            <a href="" id="signupbtn" class="inline-flex font-semibold pt-2.5 pb-2.5 px-9 mx-2 rounded-full">
                See More Article
                <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>        
        </div>
    </section>

    <footer class="-translate-y-2">
        <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 238" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(164, 132, 136, 1)" offset="0%"></stop><stop stop-color="rgba(164, 132, 136, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,84L80,79.3C160,75,320,65,480,79.3C640,93,800,131,960,144.7C1120,159,1280,149,1440,121.3C1600,93,1760,47,1920,23.3C2080,0,2240,0,2400,14C2560,28,2720,56,2880,88.7C3040,121,3200,159,3360,168C3520,177,3680,159,3840,163.3C4000,168,4160,196,4320,196C4480,196,4640,168,4800,144.7C4960,121,5120,103,5280,116.7C5440,131,5600,177,5760,172.7C5920,168,6080,112,6240,93.3C6400,75,6560,93,6720,84C6880,75,7040,37,7200,60.7C7360,84,7520,168,7680,196C7840,224,8000,196,8160,182C8320,168,8480,168,8640,182C8800,196,8960,224,9120,233.3C9280,243,9440,233,9600,224C9760,215,9920,205,10080,186.7C10240,168,10400,140,10560,140C10720,140,10880,168,11040,172.7C11200,177,11360,159,11440,149.3L11520,140L11520,280L11440,280C11360,280,11200,280,11040,280C10880,280,10720,280,10560,280C10400,280,10240,280,10080,280C9920,280,9760,280,9600,280C9440,280,9280,280,9120,280C8960,280,8800,280,8640,280C8480,280,8320,280,8160,280C8000,280,7840,280,7680,280C7520,280,7360,280,7200,280C7040,280,6880,280,6720,280C6560,280,6400,280,6240,280C6080,280,5920,280,5760,280C5600,280,5440,280,5280,280C5120,280,4960,280,4800,280C4640,280,4480,280,4320,280C4160,280,4000,280,3840,280C3680,280,3520,280,3360,280C3200,280,3040,280,2880,280C2720,280,2560,280,2400,280C2240,280,2080,280,1920,280C1760,280,1600,280,1440,280C1280,280,1120,280,960,280C800,280,640,280,480,280C320,280,160,280,80,280L0,280Z"></path><defs><linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(124, 95, 109, 1)" offset="0%"></stop><stop stop-color="rgba(124, 95, 109, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,28L80,56C160,84,320,140,480,177.3C640,215,800,233,960,224C1120,215,1280,177,1440,149.3C1600,121,1760,103,1920,121.3C2080,140,2240,196,2400,219.3C2560,243,2720,233,2880,191.3C3040,149,3200,75,3360,51.3C3520,28,3680,56,3840,74.7C4000,93,4160,103,4320,88.7C4480,75,4640,37,4800,46.7C4960,56,5120,112,5280,149.3C5440,187,5600,205,5760,214.7C5920,224,6080,224,6240,196C6400,168,6560,112,6720,112C6880,112,7040,168,7200,186.7C7360,205,7520,187,7680,177.3C7840,168,8000,168,8160,168C8320,168,8480,168,8640,144.7C8800,121,8960,75,9120,70C9280,65,9440,103,9600,112C9760,121,9920,103,10080,79.3C10240,56,10400,28,10560,14C10720,0,10880,0,11040,37.3C11200,75,11360,149,11440,186.7L11520,224L11520,280L11440,280C11360,280,11200,280,11040,280C10880,280,10720,280,10560,280C10400,280,10240,280,10080,280C9920,280,9760,280,9600,280C9440,280,9280,280,9120,280C8960,280,8800,280,8640,280C8480,280,8320,280,8160,280C8000,280,7840,280,7680,280C7520,280,7360,280,7200,280C7040,280,6880,280,6720,280C6560,280,6400,280,6240,280C6080,280,5920,280,5760,280C5600,280,5440,280,5280,280C5120,280,4960,280,4800,280C4640,280,4480,280,4320,280C4160,280,4000,280,3840,280C3680,280,3520,280,3360,280C3200,280,3040,280,2880,280C2720,280,2560,280,2400,280C2240,280,2080,280,1920,280C1760,280,1600,280,1440,280C1280,280,1120,280,960,280C800,280,640,280,480,280C320,280,160,280,80,280L0,280Z"></path><defs><linearGradient id="sw-gradient-2" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(81, 62, 84, 1)" offset="0%"></stop><stop stop-color="rgba(81, 62, 84, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 100px); opacity:0.8" fill="url(#sw-gradient-2)" d="M0,196L80,177.3C160,159,320,121,480,93.3C640,65,800,47,960,42C1120,37,1280,47,1440,46.7C1600,47,1760,37,1920,46.7C2080,56,2240,84,2400,93.3C2560,103,2720,93,2880,93.3C3040,93,3200,103,3360,126C3520,149,3680,187,3840,177.3C4000,168,4160,112,4320,93.3C4480,75,4640,93,4800,116.7C4960,140,5120,168,5280,154C5440,140,5600,84,5760,60.7C5920,37,6080,47,6240,74.7C6400,103,6560,149,6720,163.3C6880,177,7040,159,7200,135.3C7360,112,7520,84,7680,79.3C7840,75,8000,93,8160,98C8320,103,8480,93,8640,112C8800,131,8960,177,9120,177.3C9280,177,9440,131,9600,98C9760,65,9920,47,10080,37.3C10240,28,10400,28,10560,65.3C10720,103,10880,177,11040,205.3C11200,233,11360,215,11440,205.3L11520,196L11520,280L11440,280C11360,280,11200,280,11040,280C10880,280,10720,280,10560,280C10400,280,10240,280,10080,280C9920,280,9760,280,9600,280C9440,280,9280,280,9120,280C8960,280,8800,280,8640,280C8480,280,8320,280,8160,280C8000,280,7840,280,7680,280C7520,280,7360,280,7200,280C7040,280,6880,280,6720,280C6560,280,6400,280,6240,280C6080,280,5920,280,5760,280C5600,280,5440,280,5280,280C5120,280,4960,280,4800,280C4640,280,4480,280,4320,280C4160,280,4000,280,3840,280C3680,280,3520,280,3360,280C3200,280,3040,280,2880,280C2720,280,2560,280,2400,280C2240,280,2080,280,1920,280C1760,280,1600,280,1440,280C1280,280,1120,280,960,280C800,280,640,280,480,280C320,280,160,280,80,280L0,280Z"></path><defs><linearGradient id="sw-gradient-3" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(34, 34, 59, 1)" offset="0%"></stop><stop stop-color="rgba(34, 34, 59, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 150px); opacity:0.7" fill="url(#sw-gradient-3)" d="M0,0L80,23.3C160,47,320,93,480,93.3C640,93,800,47,960,51.3C1120,56,1280,112,1440,121.3C1600,131,1760,93,1920,102.7C2080,112,2240,168,2400,168C2560,168,2720,112,2880,102.7C3040,93,3200,131,3360,130.7C3520,131,3680,93,3840,70C4000,47,4160,37,4320,37.3C4480,37,4640,47,4800,65.3C4960,84,5120,112,5280,144.7C5440,177,5600,215,5760,200.7C5920,187,6080,121,6240,112C6400,103,6560,149,6720,154C6880,159,7040,121,7200,93.3C7360,65,7520,47,7680,37.3C7840,28,8000,28,8160,60.7C8320,93,8480,159,8640,177.3C8800,196,8960,168,9120,144.7C9280,121,9440,103,9600,116.7C9760,131,9920,177,10080,182C10240,187,10400,149,10560,112C10720,75,10880,37,11040,32.7C11200,28,11360,56,11440,70L11520,84L11520,280L11440,280C11360,280,11200,280,11040,280C10880,280,10720,280,10560,280C10400,280,10240,280,10080,280C9920,280,9760,280,9600,280C9440,280,9280,280,9120,280C8960,280,8800,280,8640,280C8480,280,8320,280,8160,280C8000,280,7840,280,7680,280C7520,280,7360,280,7200,280C7040,280,6880,280,6720,280C6560,280,6400,280,6240,280C6080,280,5920,280,5760,280C5600,280,5440,280,5280,280C5120,280,4960,280,4800,280C4640,280,4480,280,4320,280C4160,280,4000,280,3840,280C3680,280,3520,280,3360,280C3200,280,3040,280,2880,280C2720,280,2560,280,2400,280C2240,280,2080,280,1920,280C1760,280,1600,280,1440,280C1280,280,1120,280,960,280C800,280,640,280,480,280C320,280,160,280,80,280L0,280Z"></path></svg>
        <!-- <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 260" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(201, 173, 167, 1)" offset="0%"></stop><stop stop-color="rgba(201, 173, 167, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,78L60,69.3C120,61,240,43,360,60.7C480,78,600,130,720,125.7C840,121,960,61,1080,52C1200,43,1320,87,1440,104C1560,121,1680,113,1800,125.7C1920,139,2040,173,2160,186.3C2280,199,2400,191,2520,195C2640,199,2760,217,2880,216.7C3000,217,3120,199,3240,164.7C3360,130,3480,78,3600,86.7C3720,95,3840,165,3960,195C4080,225,4200,217,4320,177.7C4440,139,4560,69,4680,73.7C4800,78,4920,156,5040,177.7C5160,199,5280,165,5400,138.7C5520,113,5640,95,5760,108.3C5880,121,6000,165,6120,190.7C6240,217,6360,225,6480,212.3C6600,199,6720,165,6840,143C6960,121,7080,113,7200,95.3C7320,78,7440,52,7560,34.7C7680,17,7800,9,7920,34.7C8040,61,8160,121,8280,160.3C8400,199,8520,217,8580,225.3L8640,234L8640,260L8580,260C8520,260,8400,260,8280,260C8160,260,8040,260,7920,260C7800,260,7680,260,7560,260C7440,260,7320,260,7200,260C7080,260,6960,260,6840,260C6720,260,6600,260,6480,260C6360,260,6240,260,6120,260C6000,260,5880,260,5760,260C5640,260,5520,260,5400,260C5280,260,5160,260,5040,260C4920,260,4800,260,4680,260C4560,260,4440,260,4320,260C4200,260,4080,260,3960,260C3840,260,3720,260,3600,260C3480,260,3360,260,3240,260C3120,260,3000,260,2880,260C2760,260,2640,260,2520,260C2400,260,2280,260,2160,260C2040,260,1920,260,1800,260C1680,260,1560,260,1440,260C1320,260,1200,260,1080,260C960,260,840,260,720,260C600,260,480,260,360,260C240,260,120,260,60,260L0,260Z"></path><defs><linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(164, 132, 136, 1)" offset="0%"></stop><stop stop-color="rgba(164, 132, 136, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,104L60,99.7C120,95,240,87,360,69.3C480,52,600,26,720,47.7C840,69,960,139,1080,138.7C1200,139,1320,69,1440,47.7C1560,26,1680,52,1800,69.3C1920,87,2040,95,2160,121.3C2280,147,2400,191,2520,182C2640,173,2760,113,2880,82.3C3000,52,3120,52,3240,65C3360,78,3480,104,3600,125.7C3720,147,3840,165,3960,169C4080,173,4200,165,4320,151.7C4440,139,4560,121,4680,117C4800,113,4920,121,5040,130C5160,139,5280,147,5400,151.7C5520,156,5640,156,5760,130C5880,104,6000,52,6120,47.7C6240,43,6360,87,6480,121.3C6600,156,6720,182,6840,190.7C6960,199,7080,191,7200,169C7320,147,7440,113,7560,82.3C7680,52,7800,26,7920,17.3C8040,9,8160,17,8280,21.7C8400,26,8520,26,8580,26L8640,26L8640,260L8580,260C8520,260,8400,260,8280,260C8160,260,8040,260,7920,260C7800,260,7680,260,7560,260C7440,260,7320,260,7200,260C7080,260,6960,260,6840,260C6720,260,6600,260,6480,260C6360,260,6240,260,6120,260C6000,260,5880,260,5760,260C5640,260,5520,260,5400,260C5280,260,5160,260,5040,260C4920,260,4800,260,4680,260C4560,260,4440,260,4320,260C4200,260,4080,260,3960,260C3840,260,3720,260,3600,260C3480,260,3360,260,3240,260C3120,260,3000,260,2880,260C2760,260,2640,260,2520,260C2400,260,2280,260,2160,260C2040,260,1920,260,1800,260C1680,260,1560,260,1440,260C1320,260,1200,260,1080,260C960,260,840,260,720,260C600,260,480,260,360,260C240,260,120,260,60,260L0,260Z"></path><defs><linearGradient id="sw-gradient-2" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(124, 95, 109, 1)" offset="0%"></stop><stop stop-color="rgba(124, 95, 109, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 100px); opacity:0.8" fill="url(#sw-gradient-2)" d="M0,52L60,43.3C120,35,240,17,360,43.3C480,69,600,139,720,156C840,173,960,139,1080,130C1200,121,1320,139,1440,121.3C1560,104,1680,52,1800,26C1920,0,2040,0,2160,4.3C2280,9,2400,17,2520,21.7C2640,26,2760,26,2880,43.3C3000,61,3120,95,3240,117C3360,139,3480,147,3600,143C3720,139,3840,121,3960,104C4080,87,4200,69,4320,60.7C4440,52,4560,52,4680,43.3C4800,35,4920,17,5040,26C5160,35,5280,69,5400,95.3C5520,121,5640,139,5760,156C5880,173,6000,191,6120,195C6240,199,6360,191,6480,160.3C6600,130,6720,78,6840,82.3C6960,87,7080,147,7200,177.7C7320,208,7440,208,7560,177.7C7680,147,7800,87,7920,69.3C8040,52,8160,78,8280,104C8400,130,8520,156,8580,169L8640,182L8640,260L8580,260C8520,260,8400,260,8280,260C8160,260,8040,260,7920,260C7800,260,7680,260,7560,260C7440,260,7320,260,7200,260C7080,260,6960,260,6840,260C6720,260,6600,260,6480,260C6360,260,6240,260,6120,260C6000,260,5880,260,5760,260C5640,260,5520,260,5400,260C5280,260,5160,260,5040,260C4920,260,4800,260,4680,260C4560,260,4440,260,4320,260C4200,260,4080,260,3960,260C3840,260,3720,260,3600,260C3480,260,3360,260,3240,260C3120,260,3000,260,2880,260C2760,260,2640,260,2520,260C2400,260,2280,260,2160,260C2040,260,1920,260,1800,260C1680,260,1560,260,1440,260C1320,260,1200,260,1080,260C960,260,840,260,720,260C600,260,480,260,360,260C240,260,120,260,60,260L0,260Z"></path><defs><linearGradient id="sw-gradient-3" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(81, 62, 84, 1)" offset="0%"></stop><stop stop-color="rgba(81, 62, 84, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 150px); opacity:0.7" fill="url(#sw-gradient-3)" d="M0,0L60,13C120,26,240,52,360,56.3C480,61,600,43,720,39C840,35,960,43,1080,73.7C1200,104,1320,156,1440,173.3C1560,191,1680,173,1800,169C1920,165,2040,173,2160,169C2280,165,2400,147,2520,138.7C2640,130,2760,130,2880,143C3000,156,3120,182,3240,186.3C3360,191,3480,173,3600,156C3720,139,3840,121,3960,104C4080,87,4200,69,4320,78C4440,87,4560,121,4680,112.7C4800,104,4920,52,5040,60.7C5160,69,5280,139,5400,156C5520,173,5640,139,5760,108.3C5880,78,6000,52,6120,69.3C6240,87,6360,147,6480,182C6600,217,6720,225,6840,229.7C6960,234,7080,234,7200,199.3C7320,165,7440,95,7560,65C7680,35,7800,43,7920,65C8040,87,8160,121,8280,138.7C8400,156,8520,156,8580,156L8640,156L8640,260L8580,260C8520,260,8400,260,8280,260C8160,260,8040,260,7920,260C7800,260,7680,260,7560,260C7440,260,7320,260,7200,260C7080,260,6960,260,6840,260C6720,260,6600,260,6480,260C6360,260,6240,260,6120,260C6000,260,5880,260,5760,260C5640,260,5520,260,5400,260C5280,260,5160,260,5040,260C4920,260,4800,260,4680,260C4560,260,4440,260,4320,260C4200,260,4080,260,3960,260C3840,260,3720,260,3600,260C3480,260,3360,260,3240,260C3120,260,3000,260,2880,260C2760,260,2640,260,2520,260C2400,260,2280,260,2160,260C2040,260,1920,260,1800,260C1680,260,1560,260,1440,260C1320,260,1200,260,1080,260C960,260,840,260,720,260C600,260,480,260,360,260C240,260,120,260,60,260L0,260Z"></path></svg> -->
        <!-- <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 260" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(201, 173, 167, 1)" offset="0%"></stop><stop stop-color="rgba(201, 173, 167, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,78L60,73.7C120,69,240,61,360,56.3C480,52,600,52,720,78C840,104,960,156,1080,156C1200,156,1320,104,1440,69.3C1560,35,1680,17,1800,13C1920,9,2040,17,2160,39C2280,61,2400,95,2520,99.7C2640,104,2760,78,2880,60.7C3000,43,3120,35,3240,39C3360,43,3480,61,3600,60.7C3720,61,3840,43,3960,65C4080,87,4200,147,4320,169C4440,191,4560,173,4680,143C4800,113,4920,69,5040,52C5160,35,5280,43,5400,43.3C5520,43,5640,35,5760,65C5880,95,6000,165,6120,173.3C6240,182,6360,130,6480,125.7C6600,121,6720,165,6840,151.7C6960,139,7080,69,7200,60.7C7320,52,7440,104,7560,121.3C7680,139,7800,121,7920,134.3C8040,147,8160,191,8280,195C8400,199,8520,165,8580,147.3L8640,130L8640,260L8580,260C8520,260,8400,260,8280,260C8160,260,8040,260,7920,260C7800,260,7680,260,7560,260C7440,260,7320,260,7200,260C7080,260,6960,260,6840,260C6720,260,6600,260,6480,260C6360,260,6240,260,6120,260C6000,260,5880,260,5760,260C5640,260,5520,260,5400,260C5280,260,5160,260,5040,260C4920,260,4800,260,4680,260C4560,260,4440,260,4320,260C4200,260,4080,260,3960,260C3840,260,3720,260,3600,260C3480,260,3360,260,3240,260C3120,260,3000,260,2880,260C2760,260,2640,260,2520,260C2400,260,2280,260,2160,260C2040,260,1920,260,1800,260C1680,260,1560,260,1440,260C1320,260,1200,260,1080,260C960,260,840,260,720,260C600,260,480,260,360,260C240,260,120,260,60,260L0,260Z"></path><defs><linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(164, 132, 136, 1)" offset="0%"></stop><stop stop-color="rgba(164, 132, 136, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,104L60,121.3C120,139,240,173,360,160.3C480,147,600,87,720,65C840,43,960,61,1080,69.3C1200,78,1320,78,1440,82.3C1560,87,1680,95,1800,121.3C1920,147,2040,191,2160,199.3C2280,208,2400,182,2520,147.3C2640,113,2760,69,2880,60.7C3000,52,3120,78,3240,86.7C3360,95,3480,87,3600,99.7C3720,113,3840,147,3960,138.7C4080,130,4200,78,4320,82.3C4440,87,4560,147,4680,173.3C4800,199,4920,191,5040,173.3C5160,156,5280,130,5400,125.7C5520,121,5640,139,5760,160.3C5880,182,6000,208,6120,182C6240,156,6360,78,6480,43.3C6600,9,6720,17,6840,34.7C6960,52,7080,78,7200,112.7C7320,147,7440,191,7560,190.7C7680,191,7800,147,7920,143C8040,139,8160,173,8280,164.7C8400,156,8520,104,8580,78L8640,52L8640,260L8580,260C8520,260,8400,260,8280,260C8160,260,8040,260,7920,260C7800,260,7680,260,7560,260C7440,260,7320,260,7200,260C7080,260,6960,260,6840,260C6720,260,6600,260,6480,260C6360,260,6240,260,6120,260C6000,260,5880,260,5760,260C5640,260,5520,260,5400,260C5280,260,5160,260,5040,260C4920,260,4800,260,4680,260C4560,260,4440,260,4320,260C4200,260,4080,260,3960,260C3840,260,3720,260,3600,260C3480,260,3360,260,3240,260C3120,260,3000,260,2880,260C2760,260,2640,260,2520,260C2400,260,2280,260,2160,260C2040,260,1920,260,1800,260C1680,260,1560,260,1440,260C1320,260,1200,260,1080,260C960,260,840,260,720,260C600,260,480,260,360,260C240,260,120,260,60,260L0,260Z"></path><defs><linearGradient id="sw-gradient-2" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(124, 95, 109, 1)" offset="0%"></stop><stop stop-color="rgba(124, 95, 109, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 100px); opacity:0.8" fill="url(#sw-gradient-2)" d="M0,156L60,130C120,104,240,52,360,52C480,52,600,104,720,121.3C840,139,960,121,1080,104C1200,87,1320,69,1440,78C1560,87,1680,121,1800,117C1920,113,2040,69,2160,65C2280,61,2400,95,2520,130C2640,165,2760,199,2880,212.3C3000,225,3120,217,3240,177.7C3360,139,3480,69,3600,73.7C3720,78,3840,156,3960,186.3C4080,217,4200,199,4320,186.3C4440,173,4560,165,4680,169C4800,173,4920,191,5040,182C5160,173,5280,139,5400,125.7C5520,113,5640,121,5760,143C5880,165,6000,199,6120,190.7C6240,182,6360,130,6480,108.3C6600,87,6720,95,6840,95.3C6960,95,7080,87,7200,95.3C7320,104,7440,130,7560,143C7680,156,7800,156,7920,147.3C8040,139,8160,121,8280,121.3C8400,121,8520,139,8580,147.3L8640,156L8640,260L8580,260C8520,260,8400,260,8280,260C8160,260,8040,260,7920,260C7800,260,7680,260,7560,260C7440,260,7320,260,7200,260C7080,260,6960,260,6840,260C6720,260,6600,260,6480,260C6360,260,6240,260,6120,260C6000,260,5880,260,5760,260C5640,260,5520,260,5400,260C5280,260,5160,260,5040,260C4920,260,4800,260,4680,260C4560,260,4440,260,4320,260C4200,260,4080,260,3960,260C3840,260,3720,260,3600,260C3480,260,3360,260,3240,260C3120,260,3000,260,2880,260C2760,260,2640,260,2520,260C2400,260,2280,260,2160,260C2040,260,1920,260,1800,260C1680,260,1560,260,1440,260C1320,260,1200,260,1080,260C960,260,840,260,720,260C600,260,480,260,360,260C240,260,120,260,60,260L0,260Z"></path><defs><linearGradient id="sw-gradient-3" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(81, 62, 84, 1)" offset="0%"></stop><stop stop-color="rgba(81, 62, 84, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 150px); opacity:0.7" fill="url(#sw-gradient-3)" d="M0,0L60,8.7C120,17,240,35,360,56.3C480,78,600,104,720,99.7C840,95,960,61,1080,56.3C1200,52,1320,78,1440,108.3C1560,139,1680,173,1800,186.3C1920,199,2040,191,2160,195C2280,199,2400,217,2520,216.7C2640,217,2760,199,2880,164.7C3000,130,3120,78,3240,82.3C3360,87,3480,147,3600,177.7C3720,208,3840,208,3960,195C4080,182,4200,156,4320,151.7C4440,147,4560,165,4680,156C4800,147,4920,113,5040,112.7C5160,113,5280,147,5400,143C5520,139,5640,95,5760,104C5880,113,6000,173,6120,186.3C6240,199,6360,165,6480,151.7C6600,139,6720,147,6840,156C6960,165,7080,173,7200,160.3C7320,147,7440,113,7560,95.3C7680,78,7800,78,7920,69.3C8040,61,8160,43,8280,69.3C8400,95,8520,165,8580,199.3L8640,234L8640,260L8580,260C8520,260,8400,260,8280,260C8160,260,8040,260,7920,260C7800,260,7680,260,7560,260C7440,260,7320,260,7200,260C7080,260,6960,260,6840,260C6720,260,6600,260,6480,260C6360,260,6240,260,6120,260C6000,260,5880,260,5760,260C5640,260,5520,260,5400,260C5280,260,5160,260,5040,260C4920,260,4800,260,4680,260C4560,260,4440,260,4320,260C4200,260,4080,260,3960,260C3840,260,3720,260,3600,260C3480,260,3360,260,3240,260C3120,260,3000,260,2880,260C2760,260,2640,260,2520,260C2400,260,2280,260,2160,260C2040,260,1920,260,1800,260C1680,260,1560,260,1440,260C1320,260,1200,260,1080,260C960,260,840,260,720,260C600,260,480,260,360,260C240,260,120,260,60,260L0,260Z"></path></svg> -->

    </footer>

</body>
</html>