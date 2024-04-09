<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use illuminate\Support\Carbon;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';
    protected $fillable = [
        'username_admin',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getCreatedAtAttribute(){
        return carbon::parse($this->attributes['created_at'])
        ->translatedFormat('l, d F Y');
    }
}
