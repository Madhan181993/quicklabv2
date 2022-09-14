<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;

class AdminProfile extends Model
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
        'useremail2',
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

    protected $hidden = [
        'password',
    ];
}
