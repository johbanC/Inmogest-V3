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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    // Método para obtener la URL del perfil del usuario
    public function adminlte_profile_url()
    {
        return 'admin/profile';
    }

    // Método para obtener la URL de la imagen del usuario
    public function adminlte_image()
    {
        // Aquí debes retornar la URL de la imagen del usuario
        // Por ejemplo, si la imagen está almacenada en el sistema de archivos, puedes devolver la URL correspondiente
        // Si la imagen está almacenada en la base de datos, deberás recuperarla y devolver la URL adecuada
        return 'https://picsum.photos/200/300';

    }

     // Método para obtener la descripción del usuario
    public function adminlte_desc()
    {
        // Aquí debes retornar la descripción del usuario
        // Por ejemplo, podrías devolver el rol, el cargo, o cualquier otra información descriptiva del usuario
        return 'Descripción del usuario';
    }
}
