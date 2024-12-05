<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\UserAccessMenu;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->divisi == 'super admin') {
            // $news = News::all();
            $news = News::orderBy('id', 'desc')->get();
            
        } else {
            // $news = News::where('kategori', Auth::user()->divisi)->get();
            $news = News::where('kategori', Auth::user()->divisi)->orderBy('id', 'desc')->get();

        }

        return view('administrator.news.index', [
            'title'  => 'Manajemen Berita',
            'news'   => $news,
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
                'kategori' => 'required',
                'judul'    => 'required|unique:news',
                'isi'      => 'required',
                'image'    => 'required|max:5120|mimes:png,jpg,jpeg'
            ],
            [
                'kategori.required' => 'Kategori harus dipilih.',
                'judul.required'    => 'Judul harus diisi.',
                'judul.unique'      => 'Judul sudah ada di tabel.',
                'isi.required'      => 'Isi berita harus diisi.',
                'image.required'    => 'File harus diisi.',
                'image.max'         => 'Ukuran file maksimal 5 MB.',
                'image.mimes'       => 'Format file harus png/jpg/jpeg.',
            ]
        );

        $file = $request->file('image');
        $file_extension = $file->extension();
        $file_name = date('ymdhis') . "." . $file_extension;
        // $file->move(public_path('file/news'), $file_name);
        $file->move(base_path('../public_html/file/news'), $file_name);
        $data['image'] = $file_name;

        $data['slug'] = Str::slug($request->judul);
        $data['is_active'] = 0;

        News::create($data);
        return redirect('dashboard/news')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate(
            [
                'kategori' => 'required',
                'judul'    => 'required',
                'isi'      => 'required',
                'image'    => 'max:5120|mimes:png,jpg,jpeg'
            ],
            [
                'kategori.required' => 'Kategori harus dipilih.',
                'judul.required'    => 'Judul harus diisi.',
                'isi.required'      => 'Isi berita harus diisi.',
                'image.max'         => 'Ukuran file maksimal 5 MB.',
                'image.mimes'       => 'Format file harus png/jpg/jpeg.',
            ]
        );

        $file_old = News::find($id)->image;
        $file = $request->file('image');

        if ($file != null) {
            // hapus file lama
            // unlink(public_path('file/news/' . $file_old));
            unlink(base_path('../public_html/file/news/') . $file_old);

            // upload file baru
            $file_extension = $file->extension();
            $file_name = date('ymdhis') . "." . $file_extension;
            // $file->move(public_path('file/news'), $file_name);
            $file->move(base_path('../public_html/file/news'), $file_name);
            $data['image'] = $file_name;
        } else {
            $data['image'] = $file_old;
        }

        $data['slug'] = Str::slug($request->judul);

        News::where('id', $id)->update($data);
        return redirect('dashboard/news')->with('success', 'Data berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $file = News::find($id)->image;
        // unlink(public_path('file/news/' . $file));
        unlink(base_path('../public_html/file/news/') . $file);


        News::where('id', $id)->delete();
        return redirect('dashboard/news')->with('success', 'Data berhasil dihapus.');
    }

    public function published(string $id)
    {
        News::where('id', $id)->update(['is_active' => 1]);
        return redirect('dashboard/news')->with('success', 'Data berhasil diubah.');
    }
}
