<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash; // Import the Hash facade
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Models\Register;

class Registercontroller extends Controller
{
    public function showLoginForm()
    {
        return view('Register/login');
    }
    public function showSignupForm()
    {
        return view('Register.signup');
    }

    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:registers,email',
            'phone' => 'required|unique:registers,phone',
            'password' => [
                'required',
                'min:6',
                'max:12',
                'confirmed',
                'regex:/^(?=.*[a-z])(?=.*[^a-zA-Z])[\w@-]{6,12}$/',
        ],
    ], [
        'password.regex' => 'The password must be between 6 and 12 characters and must contain at least one lowercase letter and one non-alphabetic character. Valid characters include letters, numbers, underscores, and the symbols "@" and "-".',
    ]);

        try {
            $user = new Register();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->password = Hash::make($request->password);
            $res = $user->save();
            $email=$request->email;
            $password=$request->password;
            
            Mail::raw("Your are Sucessfully Signup in Our Platform\n Your Email is: $email\n Password: $password", function ($message) use ($request) {
                $message->to($request->email)->subject('Signup Sucessfully');
            });
            if ($res) {
                return redirect()->route('login')->with('success', 'You have registered successfully! Now Login.');
            } else {
                return back()->with('fail', 'Something went wrong! Please try again.');
            }
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if ($errorCode == 1062) {
                // Phone number already exists
                return back()->with('fail', 'Phone number already exists.');
            } else {
                return back()->with('fail', 'Something went wrong! Please try again.');
            }
        }
    }

    public function login(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Retrieve the user based on the provided email
        $user = Register::where('email', $request->email)->first();

        // Check if the user exists and the password matches
        if ($user && Hash::check($request->password, $user->password)) {
            // Authentication successful
            // Perform any additional logic if needed, such as setting session data
            Session::put('user', $user);
            // Redirect the user to the appropriate dashboard based on their role
            if ($user->role === 'admin') {
                // Redirect admin to admin dashboard
                return redirect()->route('university');
            } elseif ($user->role === 'user') {
                // Redirect user to user dashboard
                return redirect()->route('index');
            }
        }

        // Authentication failed, redirect back with error message
        return back()->withErrors(['email' => 'Invalid credentials.']);
    }
    
    public function resetpasswordview(){
        return view('Profile.forgetpassword');
    }

    public function sendRandomPassword(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|email|exists:registers,email',
        ]);

        // Generate a random password
        $randomPassword = $this->generateRandomPassword();

        // Update the user's password in the database
        $user = Register::where('email', $request->email)->first();
        $user->password = Hash::make($randomPassword);
        $user->save();

        // Send the randomly generated password to the user's email
        Mail::raw("Your new password is: $randomPassword", function ($message) use ($request) {
            $message->to($request->email)->subject('Password Reset');
        });

        // Redirect back with success message
        return back()->with('status', 'A randomly generated password has been sent to your email.');
    }

    private function generateRandomPassword($length = 8)
    {
        $characters = ')(*&^%$#@!+_-{[}]\/?><.,;:0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $password = '';
        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $password;
    }

    public function logout(Request $request)
    {
        $user='';
        Session::put('user', $user);
        return redirect('/');
    }
}
