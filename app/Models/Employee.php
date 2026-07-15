<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
   
    public function visacard()
    {
        return $this->hasOne(VisaCard::class);  //one to one
       // return $this->hasMany(VisaCard::class); //one to many
    }


}
