<?php

namespace App\Http\Controllers;

use App\Models\Pendapatan;
use Illuminate\Http\Request;

class PendapatanController extends Controller
{
    public function index()
    {
        $pendapatan = Pendapatan::all();
        $total_pendapatan = Pendapatan::all()->sum('uang_masuk');

        return view("pendapatan.index", [
            "pendapatan" => $pendapatan,
            "title" => "Index Pendapatan",
            "pendapatan" => Pendapatan::latest()->filter()->paginate(5)
        ])->with('total_pendapatan', $total_pendapatan);
    }

    public function create()
    {
        return view("pendapatan.create", ["title" => "Tambah Pendapatan"]);
    }

    public function edit($id)
    {
        $pdp = Pendapatan::find($id);
        return view("pendapatan.edit", ["pdp" => $pdp]);
    }

    public function store(Request $request)
    {
        // Validasi
        $validated_data = $request->validate([
            "uang_masuk" => "required|max:25",
            "tanggal_masuk" => "required",
            "kategori_pendapatan" => "required|min:4|max:50"
        ]);

        Pendapatan::create($validated_data);

        return redirect(route("indexPendapatan"))->with('tambah', 'Data berhasil ditambahkan!');
    }

    public function update($id, Request $request)
    {
        // Validasi
        $validated_data = $request->validate([
            "uang_masuk" => "required|max:25",
            "tanggal_masuk" => "required",
            "kategori_pendapatan" => "required|min:4|max:50"
        ]);

        Pendapatan::where("id", $id)->update($validated_data);

        return redirect(route("indexPendapatan"))->with('update', 'Data berhasil diubah!');
    }

    public function delete($id)
    {
        Pendapatan::where("id", $id)->delete();
        return redirect(route("indexPendapatan"))->with('hapus', 'Data berhasil dihapus!');
    }

}
