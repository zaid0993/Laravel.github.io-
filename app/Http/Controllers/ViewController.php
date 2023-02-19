<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ViewController extends Controller
{
    public function ShowView() {
        $data=[];
        $data[ids]=1;
        $data[name]='zaid';
        $data[age]= 30;


        return view('welcome',$data);
    }
}
