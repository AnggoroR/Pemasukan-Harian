<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pendapatan extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function scopeFilter($query)
    {
        if(request('search')) {
            return $query->where('uang_masuk', 'like', '%' . request('search') . '%')
                         ->orWhere('tanggal_masuk', 'like', '%' . request('search') . '%')
                         ->orWhere('kategori_pendapatan', 'like', '%' . request('search') . '%');
        }
    }
}
