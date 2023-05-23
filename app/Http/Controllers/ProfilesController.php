<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index(User $user){
        //   print_r($user->toArray());die();
        $user = User::FindOrFail($user->id);
        // dd($user);
        return view('profile.index',compact('user'));
    }
    public function edit(User $user){
        $this->authorize('update',$user->profile);
        return view('profile.edit',compact('user'));
    }
    
    public function update(User $user){
        $this->authorize('update',$user->profile);
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);
        if(request('image')) {
            $imagePath = request('image')->store('profile','public');
            // $imagePath->save();
            $imageArray = ['image' => $imagePath];
        }

        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));
        return redirect()->route('profile.show', ['user' => $user->id]);
        // redirect("/profile/{$user->id}");
    }
}
