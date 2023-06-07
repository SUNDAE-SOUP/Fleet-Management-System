<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {

        //if Auth::id();
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */


    public function store(Request $request)
    {
        $request->validate([
            'employee_code' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::where('employee_code', $request->employee_code)->first();

        if ($user) {
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
        }

        event(new Registered($user));

        Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
        return redirect('/user/dashboard');
    }

    public function update(Request $request)
    
    {
    $existingUser = User::where('employee_id', $request->employee_code)->first();

    
        // Update the existing user's details
        $existingUser->email = $request->email;
        $existingUser->password = Hash::make($request->password);
        $existingUser->save();
    
        // Create a new user record
        // $user = User::create([
        //     'employee_id' => $request->employee_id,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);
        
    

    // Other logic or response as needed
    }
}
