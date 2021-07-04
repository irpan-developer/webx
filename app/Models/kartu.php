<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\kategori;

class kartu extends Model
{
    protected $fillable = [
        'judul','deskripsi','path'
    ];

    public function kategori(){
        return $this->belongsTo(kategori::class);
    }
}
