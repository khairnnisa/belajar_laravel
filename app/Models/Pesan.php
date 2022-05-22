<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\dataPesanan;

class Pesan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function dataPesanan(){
        return $this->hasMany(dataPesanan::class);
    }
}
