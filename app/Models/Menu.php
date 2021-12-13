<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public function Submenus () 
    {
        return $this->hasMany(Submenu::class);
    }

    public function user_menus ()
    {
        return $this->belongsTo(UserMenu::class);
    }

    public function users () 
    {
        return $this->belongsToMany(User::class);
    }
}
