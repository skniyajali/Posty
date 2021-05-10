<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    function __construct() {
        $this->middleware(['guest']);
    }

    public function index(){
        return view('auth.login');
    }

    public function store(Request $request){
        $this->validate($request,[            
            'email' => 'required|email',
            'password' => 'required',            
        ]);

        //auth()->attempt($request->only('email','password'));
        if(!Auth::attempt($request->only('email','password'),$request->remember)){
            return back()->with('status','Invalid Login Details');
        }

        return redirect()->route('dashboard');
    }
}
