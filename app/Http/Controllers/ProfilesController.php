<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user){
          
        $user = User::FindOrFail($user);
        // print_r($user->toArray());die();
        return view('home',compact('user'));
    }
}
