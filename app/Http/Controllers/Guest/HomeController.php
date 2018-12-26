<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private function viewHome($viewName,$arrayData = []){
        $viewName = 'home.'.$viewName;
        return $this->viewGuest($viewName, $arrayData);
    }

    public function index(){
        return $this->viewHome('home');
    }
}
