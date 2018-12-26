<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username', 'password' , 'status', 'activation_code','profilepicture_filename',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getProfilepictureFilenameAttribute()
    {
        if (! $this->attributes['profilepicture_filename']) {
            return '/assets/img/default-avatar.png';
        }

        return '/assets/img/users/'.$this->attributes['profilepicture_filename'];
    }
}
