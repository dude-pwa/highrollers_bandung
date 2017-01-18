<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class DemoController extends Controller
{
    public function index(){
        $users = User::all();

        return view('welcome', compact('users'));
    }
}
