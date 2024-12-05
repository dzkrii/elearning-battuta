<?php

namespace App\Models;

use App\Models\User;
use App\Models\UserAccessMenu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function userAccessMenus()
    {
        return $this->hasMany(UserAccessMenu::class);
    }
}
