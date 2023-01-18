<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function scopeFilter($query)
    {
        if(request('search')) {
            return $query->where('uang_keluar', 'like', '%' . request('search') . '%')
                         ->orWhere('tanggal_keluar', 'like', '%' . request('search') . '%')
                         ->orWhere('kategori_pengeluaran', 'like', '%' . request('search') . '%');
        }
    }
}
