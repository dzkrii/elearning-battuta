<?php

namespace App\Models;

use App\Models\UserAccessMenu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function userAccessMenus()
    {
        return $this->hasMany(UserAccessMenu::class);
    }
}
