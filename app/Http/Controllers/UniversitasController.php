<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class UniversitasController extends Controller
{
    public function rektorat()
    {
        $news = News::where('is_active', 1)->orderBy('id', 'desc')->paginate(6);

        return view('universitas.rektorat', [
            'news' => $news
        ]);
    }

    public function sarpras()
    {
        $news = News::where('is_active', 1)->orderBy('id', 'desc')->paginate(6);

        return view('universitas.sarpras', [
            'news' => $news
        ]);
    }
}
