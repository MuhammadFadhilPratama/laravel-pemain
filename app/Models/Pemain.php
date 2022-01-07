<?php

namespace App\Models;

use App\Models\Posisi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pemain extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function posisi()
    {
        return $this->belongsTo(Posisi::class);
    }

    public function gerRouteKeyName()
    {
        return 'id';
    }
}