<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserMenu extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function menus () 
    {
        return $this->hasMany(Menu::class);
    }

    public function submenus () 
    {
        return $this->belongsToMany(Submenu::class);
    }
}
