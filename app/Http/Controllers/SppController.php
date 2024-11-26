<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spp; // Pastikan ada model Spp yang berhubungan dengan tabel SPP di database

class sppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua data SPP dari database
        $spps = Spp::all();
        
        // Kirim data SPP ke tampilan (view) untuk ditampilkan
        return view('spp.index', compact('spps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Tampilkan form untuk menambah data SPP baru
        return view('spp.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'tahun' => 'required|integer',
            'nominal' => 'required|numeric',
        ]);

        // Simpan data baru ke dalam tabel SPP
        Spp::create($request->all());

        // Redirect ke halaman index SPP dengan pesan sukses
        return redirect()->route('spp.index')->with('success', 'Data SPP berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Cari data SPP berdasarkan ID
        $spp = Spp::findOrFail($id);
        
        // Tampilkan detail data SPP
        return view('spp.show', compact('spp'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Cari data SPP berdasarkan ID
        $spp = Spp::findOrFail($id);

        // Tampilkan form untuk mengedit data SPP
        return view('spp.edit', compact('spp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'tahun' => 'required|integer',
            'nominal' => 'required|numeric',
        ]);

        // Cari data SPP berdasarkan ID dan perbarui
        $spp = Spp::findOrFail($id);
        $spp->update($request->all());

        // Redirect ke halaman index SPP dengan pesan sukses
        return redirect()->route('spp.index')->with('success', 'Data SPP berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Cari data SPP berdasarkan ID dan hapus
        $spp = Spp::findOrFail($id);
        $spp->delete();

        // Redirect ke halaman index SPP dengan pesan sukses
        return redirect()->route('spp.index')->with('success', 'Data SPP berhasil dihapus.');
    }
}
