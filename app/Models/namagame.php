<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Carbon;

class namagame extends Model
{
    use HasFactory;
    protected $table = 'jenis_game';
    protected $primaryKey = 'id_jenis_game';

    protected $fillable = [
        'nama_game', 'files'
    ];

    public function getCreatedAtAttribute(){
        return carbon::parse($this->attributes['created_at'])
        ->translatedFormat('l, d F Y');
    }
}
