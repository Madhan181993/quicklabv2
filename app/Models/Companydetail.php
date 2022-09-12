<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companydetail extends Model
{
    use HasFactory;

    protected $table = 'companydetails';

    protected $fillable = [
        'companyname',
        'companyaddress1',
        'companyaddress2',
        'companycity',
        'companystate',
        'companypincode',
        'companyphone',
        'companymobile1',
        'companymobile2',
        'companyemail1',
        'companyemail2',
        'companywebsite',
        'companygstin',
        'companyiecno',
    ];
}
