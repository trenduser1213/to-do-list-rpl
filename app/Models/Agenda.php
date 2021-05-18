<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'user_id',
        'nama_agenda',
        'tenggat_waktu',
        'deskripsi',
        'label',
        'durasi',
        'status',
        'skala_prioritas'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
