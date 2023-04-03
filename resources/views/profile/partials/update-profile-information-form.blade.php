{{-- <section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section> --}}

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

            <div class="items-center justify-between hidden w-full md:flex md:w-auto">
                <ul
                    class="flex flex-col p-4 mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
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
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 text-lg font-semibold rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Blog</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 text-lg font-semibold  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="flex items-center">
                {{-- <a href="" id="loginbtn" class="hover:bg-slate-700 hover:text-rose-50 font-semibold pt-2 pb-2 px-9 mx-2 rounded-full ">Log In</a>
                <a href="" id="signupbtn" class="font-semibold pt-2.5 pb-2.5 px-9 mx-2 rounded-full">Sign Up</a> --}}
                <x-app-layout></x-app-layout>
            </div>
        </div>
    </nav>



    <section class="pt-10 w-3/5">
        <div class="flex justify-center">
            <h1 class="font-bold text-4xl mb-6">Change Profile</h1>
        </div>
        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>

        <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('patch')
            <div class="mx-10">
                <label class="mx-1 mb-2 font-semibold" for="name" :value="__('Name')">Name *</label>
                <x-text-input id="name" name="name" type="text" style="background-color: #F2E9E4"
                    class="mt-1 block w-full w-full px-5 py-2 mt-2 mb-4  rounded-md border focus:border-blue-400  focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"
                    :value="old('name', $user->name)" required autofocus autocomplete="name" />
            </div>
            <div class="mx-10">
                <label class=" mx-1 mb-2 font-semibold" for="email" :value="__('Email')">Email *</label>
                <x-text-input type="email" id="email" name="email" :value="old('email', $user->email)"
                    style="background-color: #F2E9E4" required autocomplete="username"
                    class="mt-1 block w-full w-full px-5 py-2 mt-2 mb-4  rounded-md border focus:border-blue-400  focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                    <div>
                        <p class="text-sm mt-2 text-gray-800">
                            {{ __('Your email address is unverified.') }}

                            <button form="send-verification"
                                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p class="mt-2 font-medium text-sm text-green-600">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </p>
                        @endif
                    </div>
                @endif
            </div>
            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('Save') }}</x-primary-button>

                @if (session('status') === 'profile-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                @endif
            </div>
        </form>

        <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('put')
            <div class="mx-10">
                <label class=" mx-1 mb-2 font-semibold" for="current_password" :value="__('Current Password')">Password
                    *</label>
                <input id="current_password" name="current_password" type="password" autocomplete="current-password"
                    style="background-color: #F2E9E4"
                    class="mt-1 block w-full w-full px-5 py-2 mt-2 mb-4 placeholder-gray-500  rounded-md border focus:border-blue-400  focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
            </div>

            <div class="mx-10">
                <label class=" mx-1 mb-2 font-semibold" for="password" :value="__('New Password')">New Password
                    *</label>
                <input id="password" name="password" type="password" autocomplete="new-password"
                    style="background-color: #F2E9E4"
                    class="mt-1 block w-full w-full px-5 py-2 mt-2 mb-4 placeholder-gray-500 rounded-md border focus:border-blue-400  focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
            </div>
            <div class="mx-10">
                <label class=" mx-1 mb-2 font-semibold" for="password_confirmation"
                    :value="__('Confirm Password')">Password Confirmation</label>
                <input id="password_confirmation" name="password_confirmation" type="password"
                    autocomplete="new-password" style="background-color: #F2E9E4"
                    class="mt-1 block w-full w-full px-5 py-2 mt-2 mb-4 placeholder-gray-500  rounded-md border focus:border-blue-400  focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
            </div>
            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('Save') }}</x-primary-button>

                @if (session('status') === 'password-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                @endif
            </div>
        </form>
        <form action="/updateProfile/{{ $user->id }}" method="POST">
            @csrf
            @method('patch')
            <div class="mx-10">
                <label class=" mx-1 mb-2 font-semibold">Phone Number *</label>
                <input type="text" id="input" name="number" :value="old('number', $user - > number)"
                    class=" w-full px-5 py-2 mt-2 mb-4 placeholder-gray-500  rounded-md border focus:border-blue-400  focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
            </div>
            <div class="mx-10">
                <label class=" mx-1 mb-2 font-semibold">Username</label>
                <input type="text" id="input" name="username"
                    class=" w-full px-5 py-2 mt-2 mb-4 placeholder-gray-500  rounded-md border focus:border-blue-400  focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
            </div>
            <div class="mx-10">
                <label class="mx-1 mb-2 font-semibold">Gender *</label><br>
                <select
                    class="form-select w-full px-5 py-2 mt-2 mb-4 placeholder-gray-500  rounded-md border focus:border-blue-400  focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40 "
                    style="background-color: #F2E9E4" id="gender" name="gender" aria-label="Gender"
                    style="">
                    <option selected disabled>Choose Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <div class="mx-10">
                <label class=" mx-1 mb-2 font-semibold">Date of Birth *</label>
                {{-- <input datepicker type="text" id="input" name="birthdate"
                    class="w-full px-5 py-2 mt-2 mb-4 border rounded-md placeholder-gray-500 focus:ring-blue-500 focus:border-blue-500 "
                    placeholder="MM / DD / YYYY"> --}}
                <input type="date" id="input" name="birthdate"
                    class="w-full px-5 py-2 mt-2 mb-4 border rounded-md placeholder-gray-500 focus:ring-blue-500 focus:border-blue-500">
                </div>
                
                <div class="mx-10">
                    <label class=" mx-1 mb-2 font-semibold">Place of Birth *</label>
                    <input type="text" id="input" name="city"
                    class=" w-full px-5 py-2 mt-2 mb-4 placeholder-gray-500 rounded-md border focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                </div>
                
                <div class="flex items-center gap-4">
                    <x-primary-button>{{ __('Save') }}</x-primary-button>
    
                
                </div>
                
                
                
            </form>
                
            </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>
