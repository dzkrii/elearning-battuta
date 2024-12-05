<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Models\UserAccessMenu;
use Illuminate\Support\Facades\Auth;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->divisi == 'super admin') {
            // $announcements = Announcement::all();
            $announcements = Announcement::orderBy('id', 'desc')->get();
        } else {
            $announcements = Announcement::where('kategori', Auth::user()->divisi)->orderBy('id', 'desc')->get();
        }

        return view('administrator.announcement.index', [
            'title'        => 'Manajemen Pengumuman',
            'announcements' => $announcements,
            'menuId'       => UserAccessMenu::where('role_id', auth()->user()->role_id)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'kategori'  => 'required',
                'judul'     => 'required',
                'deskripsi' => 'required',
                'file'      => 'required|max:5120|mimes:pdf,doc,docx,xls,xlsx'
            ],
            [
                'kategori.required'  => 'Kategori harus dipilih.',
                'judul.required'     => 'Judul harus diisi.',
                'deskripsi.required' => 'Deskripsi harus diisi.',
                'file.required'      => 'File harus diisi.',
                'file.max'           => 'Ukuran file maksimal 5 MB.',
                'file.mimes'         => 'Format file harus pdf/doc/docx/xls/xlsx.',
            ]
        );

        $file = $request->file('file');
        $file_extension = $file->extension();
        $file_name = date('ymdhis') . "." . $file_extension;
        // $file->move(public_path('file/announcement'), $file_name);
        $file->move(base_path('../public_html/file/announcement'), $file_name);
        $data['file'] = $file_name;

        $data['slug'] = Str::slug($request->judul);
        $data['is_active'] = 0;

        Announcement::create($data);
        return redirect('dashboard/announcement')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate(
            [
                'kategori'  => 'required',
                'judul'     => 'required',
                'deskripsi' => 'required',
                'file'      => 'max:5120|mimes:pdf,doc,docx,xls,xlsx'
            ],
            [
                'kategori.required'  => 'Kategori harus dipilih.',
                'deskripsi.required' => 'Deskripsi harus diisi.',
                'file.max'           => 'Ukuran file maksimal 5 MB.',
                'file.mimes'         => 'Format file harus pdf/doc/docx/xls/xlsx.',
            ]
        );

        $file_old = Announcement::find($id)->file;
        $file = $request->file('file');

        if ($file != null) {
            // hapus file lama
            // unlink(public_path('file/announcement/' . $file_old));
            unlink(base_path('../public_html/file/announcement/') . $file_old);

            // upload file baru
            $file_extension = $file->extension();
            $file_name = date('ymdhis') . "." . $file_extension;
            // $file->move(public_path('file/announcement'), $file_name);
            $file->move(base_path('../public_html/file/announcement'), $file_name);
            $data['file'] = $file_name;
        } else {
            $data['file'] = $file_old;
        }

        $data['slug'] = Str::slug($request->judul);

        Announcement::where('id', $id)->update($data);
        return redirect('dashboard/announcement')->with('success', 'Data berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $file = Announcement::find($id)->file;
        // unlink(public_path('file/announcement/' . $file));
        unlink(base_path('../public_html/file/announcement/') . $file);

        Announcement::where('id', $id)->delete();
        return redirect('dashboard/announcement')->with('success', 'Data berhasil dihapus.');
    }

    public function published(string $id)
    {
        Announcement::where('id', $id)->update(['is_active' => 1]);
        return redirect('dashboard/announcement')->with('success', 'Data berhasil diubah.');
    }
}
