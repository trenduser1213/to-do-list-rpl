<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_agenda',
        'tenggat_waktu',
        'durasi',
        'deskripsi',
        'skala_prioritas',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
