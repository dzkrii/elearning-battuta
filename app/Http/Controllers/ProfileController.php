<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function sejarah()
    {
        $news = News::where('is_active', 1)->orderBy('id', 'desc')->paginate(6);

        return view('profile.sejarah', [
            'news' => $news
        ]);
    }

    public function visiMisi()
    {
        $news = News::where('is_active', 1)->orderBy('id', 'desc')->paginate(6);

        return view('profile.visi-misi', [
            'news' => $news
        ]);
    }

    public function strukturOrganisasi()
    {
        $news = News::where('is_active', 1)->orderBy('id', 'desc')->paginate(6);

        return view('profile.struktur-organisasi', [
            'news' => $news
        ]);
    }

    public function marsHymne()
    {
        $news = News::where('is_active', 1)->orderBy('id', 'desc')->paginate(6);

        return view('profile.mars-hymne', [
            'news' => $news
        ]);
    }
}
