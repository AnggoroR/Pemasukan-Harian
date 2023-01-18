<?php

namespace App\Http\Controllers;

use App\Models\Uangtersedia;
use Illuminate\Http\Request;

class UangtersediaController extends Controller
{
    public function index()
    {
        $uangtersedia = Uangtersedia::all();
        $total_debit = Uangtersedia::all()->sum('debit');
        $total_kredit = Uangtersedia::all()->sum('kredit');

        return view("uangtersedia.index", [
            "uangtersedia" => $uangtersedia,
            "title" => "Index Ketersediaan Uang",
            "uangtersedia" => Uangtersedia::latest()->filter()->paginate(5)
        ])->with('total_debit', $total_debit)->with('total_kredit', $total_kredit);
    }

    public function create()
    {
        return view("uangtersedia.create", ["title" => "Tambah Ketersediaan Uang"]);
    }

    public function edit($id)
    {
        $uts = Uangtersedia::find($id);
        return view("uangtersedia.edit", ["uts" => $uts]);
    }

    public function store(Request $request)
    {
        // Validasi
        $validated_data = $request->validate([
            "tanggal_sisa" => "required",
            "debit" => "required|max:25",
            "kredit" => "required|max:25",
            "keterangan_sisa" => "required|min:4|max:45"
        ]);

        Uangtersedia::create($validated_data);

        return redirect(route("indexUangtersedia"))->with('tambah', 'Data berhasil ditambahkan!');
    }

    public function update($id, Request $request)
    {
        // Validasi
        $validated_data = $request->validate([
            "tanggal_sisa" => "required",
            "debit" => "required|max:25",
            "kredit" => "required|max:25",
            "keterangan_sisa" => "required|min:4|max:45"
        ]);

        Uangtersedia::where("id", $id)->update($validated_data);

        return redirect(route("indexUangtersedia"))->with('update', 'Data berhasil diubah!');
    }

    public function delete($id)
    {
        Uangtersedia::where("id", $id)->delete();
        return redirect(route("indexUangtersedia"))->with('hapus', 'Data berhasil dihapus!');
    }
}
