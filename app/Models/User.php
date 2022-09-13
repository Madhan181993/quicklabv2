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

    protected $table = 'users';

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'usercode',
        'userfirstname',
        'usermiddlename',
        'userlastname',
        'email',
        'password',
        'userphone',
        'usermobile1',
        'usermobile2',
        'useremail1',
        'useraddress1',
        'useraddress2',
        'usercity',
        'userstate',
        'usercountry',
        'userpincode',
        'userrole',
        'userstatus',
        'deleted_status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    
}
