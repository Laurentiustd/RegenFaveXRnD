<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class, 
                        'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[cC][oO][mM]$/'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'username' => ['required'],
            'city' => ['required'],
            'birthdate' => ['required'],
            'number' => ['required', 'regex:/^(\+62|62|0)8[1-9][0-9]{6,9}$/'],
            'gender' => ['required'],
            'role' => ['required']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'city' => $request->city,
            'birthdate'=>$request->birthdate,
            'number'=>$request->number,
            'gender'=>$request->gender,
            'password' => Hash::make($request->password),
            'role' =>$request->role,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function update(Request $request, $id){
        User::where('id', $id)->update([
            'username' => $request->username,
            'city' => $request->city,
            'birthdate'=>$request->birthdate,
            'number'=>$request->number,
            'gender'=>$request->gender,
        ]);

        return redirect('/dashboard');
    }
}
