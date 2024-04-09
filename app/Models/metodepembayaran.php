<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Carbon;

class metodepembayaran extends Model
{
    use HasFactory;
    protected $table = 'metode_pembayaran';
    protected $primaryKey = 'id_metode_pembayaran';

    protected $fillable = [
        'metode_pembayaran', 'files'
    ];

    public function getCreatedAtAttribute(){
        return carbon::parse($this->attributes['created_at'])
        ->translatedFormat('l, d F Y');
    }
}

