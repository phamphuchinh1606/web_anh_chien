<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('guest.home.home');
    }
}
