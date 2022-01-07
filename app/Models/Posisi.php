<?php

namespace App\Models;

use App\Http\Controllers\PemainController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posisi extends Model
{
    use HasFactory;
    
    public function posisi()
    {
        return $this->hasMany(Pemain::class);
    }
}
