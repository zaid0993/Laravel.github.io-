<?php

namespace App\Http\Front\Controllers\UserController;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as Controller;

class UserController extends Controllers
{
    public function showUserController(){
        return 'zaid';
    }
    public function getIndex(){
        /*$obj = new \stdClass();
        $obj ->name ='zaid';
        $obj ->id =5;*/
//        return view('welcome',compact('obj'));
return view('welcome') -> with ('name','zaid');
    }
}
