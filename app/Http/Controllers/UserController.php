<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        $user = User::get();
        return view('user.index', compact('user'));
    }
    public function create(Request $request)
    {
        $data=$request->except(['_token']);
        if(User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => $data['role'],
            'password' => Hash::make($data['password']),
        ])){
            return redirect('user')
            ->with('message', 'New User was created successfully.');
        }
        else{
        return back();
        }

    }
    public function store()
    {
        return view('user.create');
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }
    public function update(Request $request,$id)
    {
        $data=$request->except(['_token']);
        if(User::find($id)->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => $data['role'],
            'password' => Hash::make($data['password']),
        ])){
            return redirect('user');
        }
        else{
            return back();
        }
    }
    public function destroy($id)
    {
        $user=User::find($id)->delete();
        if($user){
            return redirect('user');
        }
        else{
            return 'Error';
        }
    }
}
