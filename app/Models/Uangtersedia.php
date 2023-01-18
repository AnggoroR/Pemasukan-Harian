<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uangtersedia extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function scopeFilter($query)
    {
        if(request('search')) {
            return $query->where('tanggal_sisa', 'like', '%' . request('search') . '%')
                         ->orWhere('debit', 'like', '%' . request('search') . '%')
                         ->orWhere('kredit', 'like', '%' . request('search') . '%')
                         ->orWhere('keterangan_sisa', 'like', '%' . request('search') . '%');
        }
    }
}
