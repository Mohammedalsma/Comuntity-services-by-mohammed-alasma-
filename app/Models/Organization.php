<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Organization extends Model
{
   //protected $fillable =['name', 'location', 'type_of_work','owner_id'];
   //protected $guarded = ['id'];
   use HasFactory, Notifiable;
   public function Activates(){
    return $this->hasMany(Activates::class);
   }
}