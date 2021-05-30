<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tagline extends Model
{
    protected $fillable = [
        'headline','bodyline','addressSatu','addressDua','phoneNumber','email'
    ];
}
