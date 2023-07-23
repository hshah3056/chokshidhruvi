<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    const ACTIVE = 1,INACTIVE = 2;
    const JR = 1,Sr = 2,TL =3,Manager = 4;

    protected $fillable = [
            'admin_id','name','password','email','gender','status','type','joining_date','last_logged_in_ip','last_logged_in_at'
    ];

}
