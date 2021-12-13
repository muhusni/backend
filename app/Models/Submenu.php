<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    use HasFactory;

    public function menus () 
    {
        return $this->belongsTo(Menu::class);
    }

    public function user_menus ()
    {
        return $this->belongsToMany(UserMenu::class);
    }
}
