{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-4">
            <label for="username">Username : </label> <br>
            <x-text-input type="text" name="username" id="username" class="block mt-1 w-full" />
            <label for="city">City : </label> <br>
            <x-text-input type="text" name="city" id="city" class="block mt-1 w-full" />
            <label for="birthdate">Birthdate : </label> <br>
            <input type="date" name="birthdate" id="birthdate" class="block mt-1 w-full" />
            <label for="number">Number : </label> <br>
            <input type="number" name="number" id="number" class="block mt-1 w-full" />
            <label for="gender">Gender : </label> <br>
            <select name="gender" id="gender" class="block mt-1 w-full">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <select name="role" id="role" class="block mt-1 w-full">
                <option value="member">Member</option>
                <option value="admin">Admin</option>
            </select>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/step1.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SignUpStep1</title>
    <style>
        .form-control, .form-select{
            background-color: transparent;
            border-radius: 10px;
            border: 1px solid black;
            height: 3em;
        }
    </style>
</head>
<body>
  <section class="h-100">
    <div class="container py-5 h-100">
        <div class="col">
            <p class="fw-bold fs-2 text-center mb-2">Register</p>
            <p class="text-center ">Sign Up and Start Learning</p> 
                <div class="card card-registration my-4">
                    <div class="card-body p-md-5 text-black" id="card">
                     <form method="POST" action="{{ route('register') }}">
                          @csrf
                        <!-- first name & last name -->
                    
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="name" :value="__('Name')">Full Name *</label>
                                        <input type="text" id="name" name="name" :value="old('name')" required autofocus autocomplete="name"  class="form-control " /> 
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />                                   
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline form">
                                        <label class="form-label" for="role">Role</label>
                                        <select name="role" id="role" class="form-select">
                                            <option selected disabled>Choose Role</option>
                                            <option value="member">Member</option>
                                            <option value="admin">Admin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        

                        <!-- email  & phone number -->
                    
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="email" :value="__('Email')">Email *</label>
                                        <input type="email" id="email" name="email" :value="old('email')" required autocomplete="username"  class="form-control " placeholder="abcde@gmail.com"/>         
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />                           
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="number">Phone Number *</label>
                                        <input type="text" id="number" class="form-control" name="number" placeholder="+62 | "/>
                                    </div>
                                </div>
                            </div>
                        

                        <!-- password & confirm password -->
                    
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="password" :value="__('Password')">Password *</label>
                                        <input type="password" id="password" name="password" required autocomplete="new-password"  class="form-control " />                                    
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="password_confirmation" :value="__('Confirm Password')">Confirm Password *</label>
                                        <input type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password"  class="form-control " />
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>
                                </div>
                            </div>
                        
                        {{-- username & gender --}}
                    
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="username">Username*</label>
                                        <input type="text" id="username" name="username" class="form-control" />                                    
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="gender">Gender</label>
                                    <select class="form-select" id="gender" name="gender" aria-label="Gender">
                                            <option selected disabled>Choose Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                          </select>
                                    </div>
                                </div>
                              </div>
                        
                        {{-- dob & pob --}}
                    
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="form3Example1m">Date of Birth*</label>
    
                                        <input type="date" id="birthdate" name="birthdate" class="form-control" placeholder="DD/MM/YYYY"/>                                    
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="form3Example1n">Place of Birth*</label>
                                        <input type="text" id="city" name="city" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="text-muted border-0 bg-transparent">{{ __('Sign Up >') }}</button>
                            </div>
                     </form>
                    </div>
                </div>

            <div class="d-flex justify-content-between">
                <button type="button" class="text-muted border-0 bg-transparent" data-mdb-ripple-color="dark"><a href="/login" style="text-decoration: none; color: inherit"><small>< Back To Login</small></a></button>
            </div>
        </div>
    </div>
  </section>
</body>
</html>