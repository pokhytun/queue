<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = ['text'];

    public function admin(){ // адмін
        return $this->belongsTo(User::class, 'admin_id' ,'id');
    }

    public function user(){// юзер
        return $this->belongsTo(User::class, 'user_id' ,'id');
    }

    
}
