<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dosen extends Model
{
    //
    protected $guarded = [];

    public function matkuls(): HasMany
    {
        return $this->hasMany(Matkul::class);
    }
}
