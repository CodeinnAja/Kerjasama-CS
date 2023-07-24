<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;
    protected $fillable = ['nim', 'nama', 'tahun_lulus', 'massa_tunggu'];

    public function perusahaan(){
        return $this->belongsTo(Perusahaan::class, 'perusahaan_id', 'id');
    }
}
