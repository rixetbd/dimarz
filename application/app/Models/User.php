<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'username',
        'email',
        'password',
        'avatar',
        'bio',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRoleName()
    {
        return $this->belongsTo(RolePermission::class, 'role')->withDefault([
            'id'=>'',
            'name'=>'N/A',
            "name"=>'0',
            "articles"=>"0",
            "attendance"=>"0",
            "category"=>"0",
            "employee"=>"0",
            "faq"=>"0",
            "gigpage"=>"0",
            "mainpage"=>"0",
            "seo"=>"0",
            "salary"=>"0",
            "settings"=>"0",
            "users"=>"0",
            "workprocess"=>"0",
        ]);
    }
}
