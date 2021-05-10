<?php

namespace App\Http\Controllers;

use App\Mail\Postliked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }

    public function index() {        
        return view('auth.dashboard');
    }
}
