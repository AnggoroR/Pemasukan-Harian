<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    public function index()
    {
        $pengeluaran = Pengeluaran::all();
        $total_pengeluaran = Pengeluaran::all()->sum('uang_keluar');

        return view("pengeluaran.index", [
            "pengeluaran" => $pengeluaran,
            "title" => "Index Pengeluaran",
            "pengeluaran" => Pengeluaran::latest()->filter()->paginate(5)
        ])->with('total_pengeluaran', $total_pengeluaran);
    }

    public function create()
    {
        return view("pengeluaran.create", ["title" => "Tambah Pengeluaran"]);
    }

    public function edit($id)
    {
        $pgl = Pengeluaran::find($id);
        return view("pengeluaran.edit", ["pgl" => $pgl]);
    }

    public function store(Request $request)
    {
        // Validasi
        $validated_data = $request->validate([
            "uang_keluar" => "required|max:25",
            "tanggal_keluar" => "required",
            "kategori_pengeluaran" => "required|min:4|max:50"
        ]);

        Pengeluaran::create($validated_data);

        return redirect(route("indexPengeluaran"))->with('tambah', 'Data berhasil ditambahkan!');
    }

    public function update($id, Request $request)
    {
        // Validasi
        $validated_data = $request->validate([
            "uang_keluar" => "required|max:25",
            "tanggal_keluar" => "required",
            "kategori_pengeluaran" => "required|min:4|max:50"
        ]);

        Pengeluaran::where("id", $id)->update($validated_data);

        return redirect(route("indexPengeluaran"))->with('update', 'Data berhasil diubah!');
    }

    public function delete($id)
    {
        Pengeluaran::where("id", $id)->delete();
        return redirect(route("indexPengeluaran"))->with('hapus', 'Data berhasil dihapus!');
    }
}
