<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $guarded = []; 

    public function profileImage(){
        $imagePath = ($this->image) ?  $this->image : '/profile/aWz2hODWEeXzOGEhZuhYQF4Qfg6vGMZruWcw4mgx.png';
        return '/storage/' . $imagePath;
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}