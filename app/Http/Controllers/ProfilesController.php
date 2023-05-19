<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index(User $user){
          
        $user = User::FindOrFail($user);
        dd($user);
        return view('profile.index',compact('user'));
    }
    public function edit(User $user){
        return view('profile.edit',compact('user'));
    }
    
    public function update(User $user){
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);
        auth()->user()->profile->update($data);
        return redirect("/profile/{$user->id}");
    }
}
