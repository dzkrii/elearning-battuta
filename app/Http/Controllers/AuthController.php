<?php

namespace App\Http\Controllers;

use App\Models\UserAccessMenu;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    function index()
    {
        if (auth()->user()->divisi == 'super admin') {
            $countBerita = DB::table('news')->count();
            $countAgenda = DB::table('agendas')->count();
            $countInformasi = DB::table('infos')->count();
            $countPengumuman = DB::table('announcements')->count();
        } else {
            $countBerita = DB::table('news')->where('kategori', auth()->user()->divisi)->count();
            $countAgenda = DB::table('agendas')->where('kategori', auth()->user()->divisi)->count();
            $countInformasi = DB::table('infos')->where('kategori', auth()->user()->divisi)->count();
            $countPengumuman = DB::table('announcements')->where('kategori', auth()->user()->divisi)->count();
        }

        return view('administrator.dashboard.main', [
            'title'           => 'Dashboard',
            'menuId'          => UserAccessMenu::where('role_id', auth()->user()->role_id)->get(),
            'countBerita'     => $countBerita,
            'countAgenda'     => $countAgenda,
            'countInformasi'  => $countInformasi,
            'countPengumuman' => $countPengumuman
        ]);
    }

    function superAdmin()
    {
        if (auth()->user()->divisi == 'super admin') {
            $countBerita = DB::table('news')->count();
            $countAgenda = DB::table('agendas')->count();
            $countInformasi = DB::table('infos')->count();
            $countPengumuman = DB::table('announcements')->count();
        } else {
            $countBerita = DB::table('news')->where('kategori', auth()->user()->divisi)->count();
            $countAgenda = DB::table('agendas')->where('kategori', auth()->user()->divisi)->count();
            $countInformasi = DB::table('infos')->where('kategori', auth()->user()->divisi)->count();
            $countPengumuman = DB::table('announcements')->where('kategori', auth()->user()->divisi)->count();
        }

        return view('administrator.dashboard.main', [
            'title'           => 'Dashboard',
            'menuId'          => UserAccessMenu::where('role_id', auth()->user()->role_id)->get(),
            'countBerita'     => $countBerita,
            'countAgenda'     => $countAgenda,
            'countInformasi'  => $countInformasi,
            'countPengumuman' => $countPengumuman
        ]);
    }

    function admin()
    {
        if (auth()->user()->divisi == 'super admin') {
            $countBerita = DB::table('news')->count();
            $countAgenda = DB::table('agendas')->count();
            $countInformasi = DB::table('infos')->count();
            $countPengumuman = DB::table('announcements')->count();
        } else {
            $countBerita = DB::table('news')->where('kategori', auth()->user()->divisi)->count();
            $countAgenda = DB::table('agendas')->where('kategori', auth()->user()->divisi)->count();
            $countInformasi = DB::table('infos')->where('kategori', auth()->user()->divisi)->count();
            $countPengumuman = DB::table('announcements')->where('kategori', auth()->user()->divisi)->count();
        }

        return view('administrator.dashboard.main', [
            'title'           => 'Dashboard',
            'menuId'          => UserAccessMenu::where('role_id', auth()->user()->role_id)->get(),
            'countBerita'     => $countBerita,
            'countAgenda'     => $countAgenda,
            'countInformasi'  => $countInformasi,
            'countPengumuman' => $countPengumuman
        ]);
    }
}
