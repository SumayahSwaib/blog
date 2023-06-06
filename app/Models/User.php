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
    ];

    public static function files_uploader($file)
    {
        $uploads = [];
        foreach ($file as $key => $file) {
            $fileName = $file['name'];
            $fileExtention = pathinfo($fileName, PATHINFO_EXTENSION);
            $newFilename = uniqid() . '.' . $fileExtention;
            $fileTmpName = $file['tmp_name'];
            $rootDirectory = $_SERVER['DOCUMENT_ROOT'];
            $destination = $rootDirectory . "/uploads" . $newFilename;
            if (move_uploaded_file($fileTmpName, $destination)) {
                $uploads[] = $newFilename;
            }
           
        }
return $uploads;

        /*             $uploadDirectory = 'public/uploads/';
 */
    }
}
