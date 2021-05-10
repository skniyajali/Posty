<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    function __construct() {
        $this->middleware(['guest']);
    }
    
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required|min:8|max:20',
            'username' => 'required|min:8|max:20',
            'email' => 'required|email|max:20',
            'password' => 'required|min:8|max:20|confirmed',            
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            
        ]);
        //auth()->attempt($request->only('email','password'));
        Auth::attempt($request->only('email','password'));

        return redirect()->route('dashboard');
    }
}
