<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\User;
  
class RegisterController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user/create');
    }
      
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  
        $validatedData = $request->validate([
                'name' => 'required|unique:users',
                'password' => 'required|min:5',
                'password_confirmation' => 'required_with:password|same:password|min:5',
                'email' => 'required|email|unique:users'
            ], [
                'name.required' => 'Name field is required.',
                'name.name' => 'Name field must be Name.',
                'password.required' => 'Password field is required.',
                
                'email.required' => 'Email field is required.',
                'email.email' => 'Email field must be email address.'
            ]);
    
        $validatedData['password'] = bcrypt($validatedData['password']);
        $user = User::create($validatedData);
          
        return back()->with('success', 'User created successfully.');
    }
}