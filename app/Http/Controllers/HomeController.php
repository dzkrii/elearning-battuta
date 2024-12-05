<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Announcement;
use App\Models\Info;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $news = News::where('is_active', 1)->orderBy('id', 'desc')->paginate(6);
        $agendas = Agenda::where('is_active', 1)->orderBy('id', 'desc')->paginate(2);
        $informations = Info::where('is_active', 1)->orderBy('id', 'desc')->paginate(5);
        $announcements = Announcement::where('is_active', 1)->orderBy('id', 'desc')->paginate(3);

        return view('home.index', [
            'news'          => $news,
            'agendas'       => $agendas,
            'informations'  => $informations,
            'announcements' => $announcements
        ]);
    }

    public function opening()
    {
        $news = News::where('is_active', 1)->orderBy('id', 'desc')->paginate(6);

        return view('home.selengkapnya.sambutan', [
            'news' => $news
        ]);
    }

    public function news()
    {
        $newss = News::where('is_active', 1)->orderBy('id', 'desc')->paginate(8);
        $news = News::where('is_active', 1)->orderBy('id', 'desc')->paginate(6);
        $informations = Info::where('is_active', 1)->orderBy('id', 'desc')->paginate(5);
        $announcements = Announcement::where('is_active', 1)->orderBy('id', 'desc')->paginate(3);

        return view('home.selengkapnya.berita-all', [
            'newss'         => $newss,
            'informations'  => $informations,
            'announcements' => $announcements,
            'news'          => $news
        ]);
    }

    public function agenda()
    {
        $agendas = Agenda::where('is_active', 1)->orderBy('id', 'desc')->paginate(6);
        $informations = Info::where('is_active', 1)->orderBy('id', 'desc')->paginate(5);
        $announcements = Announcement::where('is_active', 1)->orderBy('id', 'desc')->paginate(3);
        $news = News::where('is_active', 1)->orderBy('id', 'desc')->paginate(6);

        return view('home.selengkapnya.agenda-all', [
            'agendas'       => $agendas,
            'informations'  => $informations,
            'announcements' => $announcements,
            'news'          => $news
        ]);
    }

    public function information()
    {
        $informations = Info::where('is_active', 1)->orderBy('id', 'desc')->paginate(5);
        $announcements = Announcement::where('is_active', 1)->orderBy('id', 'desc')->paginate(6);
        $news = News::where('is_active', 1)->orderBy('id', 'desc')->paginate(6);

        return view('home.selengkapnya.informasi-all', [
            'informations'  => $informations,
            'announcements' => $announcements,
            'news'          => $news
        ]);
    }

    public function newsSelect($lug)
    {
        $newsSelect = News::where('slug', $lug)->first();
        $informations = Info::where('is_active', 1)->orderBy('id', 'desc')->paginate(5);
        $announcements = Announcement::where('is_active', 1)->orderBy('id', 'desc')->paginate(3);
        $news = News::where('is_active', 1)->orderBy('id', 'desc')->paginate(6);

        return view('home.selengkapnya.berita', [
            'newsSelect'    => $newsSelect,
            'informations'  => $informations,
            'announcements' => $announcements,
            'news'          => $news
        ]);
    }
    
    public function agendaSelect($lug)
    {
        $agendaSelect = Agenda::where('slug', $lug)->first();
        $informations = Info::where('is_active', 1)->orderBy('id', 'desc')->paginate(5);
        $announcements = Announcement::where('is_active', 1)->orderBy('id', 'desc')->paginate(3);
        $news = News::where('is_active', 1)->orderBy('id', 'desc')->paginate(6);

        return view('home.selengkapnya.agenda', [
            'agendaSelect'  => $agendaSelect,
            'informations'  => $informations,
            'announcements' => $announcements,
            'news'          => $news
        ]);
    }
}
