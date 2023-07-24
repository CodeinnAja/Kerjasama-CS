<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;
    protected $fillable = ['nama'];

    public function alumni(){
        return $this->hasMany(Alumni::class, 'perusahaan_id', 'id');
    }
}
