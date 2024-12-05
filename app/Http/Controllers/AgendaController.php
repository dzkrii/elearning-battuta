<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use App\Models\UserAccessMenu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->divisi == 'super admin') {
            // $agendas = Agenda::all();
            $agendas = Agenda::orderBy('id', 'desc')->get();
        } else {
            // $agendas = Agenda::where('kategori', Auth::user()->divisi)->get();
            $agendas = Agenda::where('kategori', Auth::user()->divisi)->orderBy('id', 'desc')->get();
        }

        return view('administrator.agenda.index', [
            'title'   => 'Manajemen Agenda',
            'agendas' => $agendas,
            'menuId'  => UserAccessMenu::where('role_id', auth()->user()->role_id)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'kategori'      => 'required',
                'judul'         => 'required|unique:agendas',
                'tanggal_start' => 'required',
                'tanggal_end'   => 'required',
                'waktu_start'   => 'required',
                'waktu_end'     => 'required',
                'tempat'        => 'required',
                'image'         => 'required|max:5120|mimes:png,jpg,jpeg'
            ],
            [
                'kategori.required'      => 'Kategori harus dipilih.',
                'judul.required'         => 'Judul harus diisi.',
                'judul.unique'           => 'Judul sudah ada di tabel.',
                'tanggal_start.required' => 'Tanggal mulai harus diisi.',
                'tanggal_end.required'   => 'Tanggal selesai harus diisi.',
                'waktu_start.required'   => 'Waktu mulai harus diisi.',
                'waktu_end.required'     => 'Waktu selesai harus diisi.',
                'tempat.required'        => 'Tempat harus diisi.',
                'image.required'         => 'File harus diisi.',
                'image.max'              => 'Ukuran file maksimal 5 MB.',
                'image.mimes'            => 'Format file harus png/jpg/jpeg.',
            ]
        );

        $file = $request->file('image');
        $file_extension = $file->extension();
        $file_name = date('ymdhis') . "." . $file_extension;
        // $file->move(public_path('file/agenda'), $file_name);
        $file->move(base_path('../public_html/file/agenda'), $file_name);
        $data['image'] = $file_name;

        $data['slug'] = Str::slug($request->judul);
        $data['is_active'] = 0;

        Agenda::create($data);
        return redirect('dashboard/agenda')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate(
            [
                'kategori'      => 'required',
                'judul'         => 'required',
                'tanggal_start' => 'required',
                'tanggal_end'   => 'required',
                'waktu_start'   => 'required',
                'waktu_end'     => 'required',
                'tempat'        => 'required',
                'image'         => 'max:5120|mimes:png,jpg,jpeg'
            ],
            [
                'kategori.required'      => 'Kategori harus dipilih.',
                'judul.required'         => 'Judul harus diisi.',
                'tanggal_start.required' => 'Tanggal mulai harus diisi.',
                'tanggal_end.required'   => 'Tanggal selesai harus diisi.',
                'waktu_start.required'   => 'Waktu mulai harus diisi.',
                'waktu_end.required'     => 'Waktu selesai harus diisi.',
                'tempat.required'        => 'Tempat harus diisi.',
                'image.max'              => 'Ukuran file maksimal 5 MB.',
                'image.mimes'            => 'Format file harus png/jpg/jpeg.',
            ]
        );

        $file_old = Agenda::find($id)->image;
        $file = $request->file('image');

        if ($file != null) {
            // hapus file lama
            // unlink(public_path('file/agenda/' . $file_old));
            unlink(base_path('../public_html/file/agenda/') . $file_old);

            // upload file baru
            $file_extension = $file->extension();
            $file_name = date('ymdhis') . "." . $file_extension;
            // $file->move(public_path('file/agenda'), $file_name);
            $file->move(base_path('../public_html/file/agenda'), $file_name);
            $data['image'] = $file_name;
        } else {
            $data['image'] = $file_old;
        }

        $data['slug'] = Str::slug($request->judul);

        Agenda::where('id', $id)->update($data);
        return redirect('dashboard/agenda')->with('success', 'Data berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $file = Agenda::find($id)->image;
        // unlink(public_path('file/agenda/' . $file));
        unlink(base_path('../public_html/file/agenda/') . $file);

        Agenda::where('id', $id)->delete();
        return redirect('dashboard/agenda')->with('success', 'Data berhasil dihapus.');
    }

    public function published(string $id)
    {
        Agenda::where('id', $id)->update(['is_active' => 1]);
        return redirect('dashboard/agenda')->with('success', 'Data berhasil diubah.');
    }
}
