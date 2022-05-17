<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'isAdmin',
        'phone_number'
    ];

    public function applications(){ // заявки користувача
        return $this->hasMany(Application::class , 'user_id');
    }

    public function adminApplications(){ // заявки адміна
        return $this->hasMany(Application::class , 'admin_id');
    }

    public function isAdminActive(){
        return $this->adminApplications()->where('status' , 1);
    }

    public function getUserHasApplicationsAttribute(){
        return $this->applications()->where('status', '!=' , 2)->get();
    }
    
}
