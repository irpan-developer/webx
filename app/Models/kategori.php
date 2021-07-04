<?php

namespace App\Models;
use App\Models\kartu;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $fillable = [
        'kategori'
    ];

    public function kartu(){
        return $this->hasMany(kartu::class);
    }
}
