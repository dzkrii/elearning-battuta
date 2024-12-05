<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Models\UserAccessMenu;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('administrator.management.menu', [
            'title'  => 'Manajemen Menu',
            'menus'  => $menus,
            'menuId' => UserAccessMenu::where('role_id', auth()->user()->role_id)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'menu' => 'required|unique:menus',
                'url'  => 'required',
                'icon' => 'required'
            ],
            [
                'menu.unique'   => 'Nama menu sudah ada di tabel.',
                'menu.required' => 'Nama menu harus diisi.',
                'url.required'  => 'URL harus diisi.',
                'icon.required' => 'Icon harus diisi.'
            ]
        );
        // Menu::create($request->except(['_token']));

        Menu::create($data);
        return redirect('dashboard/menu')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate(
            [
                'menu' => 'required',
                'url'  => 'required',
                'icon' => 'required'
            ],
            [
                'menu.required' => 'Nama menu harus diisi.',
                'url.required'  => 'URL harus diisi.',
                'icon.required' => 'Icon harus diisi.'
            ]
        );

        Menu::where('id', $id)->update($data);
        return redirect('dashboard/menu')->with('success', 'Data berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Menu::where('id', $id)->delete();
        return redirect('dashboard/menu')->with('success', 'Data berhasil dihapus.');
    }
}
