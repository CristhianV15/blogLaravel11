<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    //relacion uno a uno
    public function profile(){
        return $this->hasOne(Profile::class);// relacion entre usuarios y perfil , solo con convecciones
        //return $this->hasOne(Address::class, 'user_id','id'); // sin convecciones

    }

    //Relacion de uno a uno a través de : Has One Throug
    public function address(){
        return $this->hasOneThrough(Address::class,Profile::class); //Debe acceder antes a la relación de perfil para ir a la de 
    }

}
