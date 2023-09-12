<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
   protected $fillable=['title','month','day','start_date','end_date','updated_at','created_at'];
   // protected $fillable=['title'];

}
