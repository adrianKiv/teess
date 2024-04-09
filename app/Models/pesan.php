<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Carbon;

class pesan extends Model
{
    use HasFactory;
    protected $table ='pesan';
    protected $fillable = [
        'nama_depan', 'nama_belakang', 'email', 'judul', 'pesan'
    ];

    protected $primaryKey = 'id_pesan';

    public function getCreatedAtAttribute(){
        return carbon::parse($this->attributes['created_at'])
        ->translatedFormat('l, d F Y');
    }
}
