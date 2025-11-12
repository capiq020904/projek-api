<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = ["nama_mahasiswa","nim_mahasiswa","fakultas_id"];

   public function fakultas():BelongsTo{
    return $this->belongsto(Fakultas::class,'fakulas_id');

   }
}
