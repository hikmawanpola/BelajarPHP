<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = ['nim', 'nama', 'kelas', 'jenis_kelamin_id'];

    public function jenisKelamin()
    {
        return $this->belongsTo(JenisKelamin::class);
    }
}
