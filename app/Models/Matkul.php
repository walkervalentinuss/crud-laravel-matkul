<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Matkul extends Model
{
    //
    protected $guarded = [];

    public function dosens(): BelongsTo
    {
        return $this->belongsTo(Dosen::class);
    }

    public function ruangans(): BelongsTo
    {
        return $this->belongsTo(Ruangan::class);
    }
}
