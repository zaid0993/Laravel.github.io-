<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


 class secoundController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');

    }

     public function showString(){

    return 'helpus';
    }
}
