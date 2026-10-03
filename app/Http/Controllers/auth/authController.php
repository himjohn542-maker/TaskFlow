<?php

namespace App\Http\Controllers\auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Todo_list;

class authController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        // Validate the registration form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:67',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new user
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Log the user in
        auth()->login($user);

        // Redirect to a desired page after successful registration
        // return redirect()->route('auth.login')->with('success', 'Registration successful! You are now logged in.');}
        return redirect()->route('todo_lists.index', [
            'todo_lists' => Todo_list::all()
        ]);
    }


        public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            
            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
        ]);

        if (auth()->attempt($validatedData)) {
            $request->session()->regenerate();
            return redirect()->route('todo_lists.index');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
