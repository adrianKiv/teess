<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Carbon;

class paket extends Model
{
    use HasFactory;
    protected $table = "jenis_paket";
    protected $primaryKey = 'id_jenis_paket';

    public function getCreatedAtAttribute(){
        return carbon::parse($this->attributes['created_at'])
        ->translatedFormat('l, d F Y');
    }
}
