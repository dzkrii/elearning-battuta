<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\UserAccessMenu;

class UserAccessMenuController extends Controller
{
    public function index(string $id)
    {
        // $userAccessMenus = Role::find(2)->userAccessMenus;
        // foreach ($userAccessMenus as $userAccessMenu) {
        //     echo $userAccessMenu->menu->menu . "<br>";
        // }

        return view('administrator.management.user_access_menu', [
            'title'     => 'Manajemen Menu',
            'dataMenu'  => Menu::where('id', $id)->get(),
            'menuId' => UserAccessMenu::where('role_id', auth()->user()->role_id)->get(),
            'roles' => Role::all()
            // 'hakAkses'  => RoleMenu::where('menu_id', $id)->get(),
        ]);
    }

    // public function store(Request $request)
    // {
    //     dd($request->input('menuID'));

    //     $menuID = $request->input('menuID');
    //     $checkboxRole = $request->input('role');

    //     RoleMenu::where('menu_id', $menuID)->delete();

    //     foreach ($checkboxRole as $role) {
    //         RoleMenu::create([
    //             'user_id' => $role,
    //             'menu_id' => $menuID
    //         ]);
    //     }

    //     return redirect('role-menu')->with('success', 'Data berhasil disimpan.');
    // }
}
