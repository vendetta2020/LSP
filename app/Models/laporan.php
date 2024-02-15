<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;

class laporan extends Model
{
    use HasFactory;

    protected $with = ['kategories'];

    protected $guarded = [];

    public function kategories() {
        return $this->belongsTo(Kategori::class, 'kategori', 'id');
    }
}
