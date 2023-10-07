<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
      'name','client_id','contact_no','birth_date','address','email_id','country_id','state_id','pin_code','city','concern','package','gender'
    ];

    public function countryMaster()
    {
        return $this->belongsTo(Country::class);
    }

    public function StateMaster()
    {
        return $this->belongsTo(State::class);
    }
}
