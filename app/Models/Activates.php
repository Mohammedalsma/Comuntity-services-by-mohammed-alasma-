<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Activates extends Model
{
   protected $fillable =['name', 'location', 'type_of_work','org_id','category','descrption'];
   protected $guarded = ['id'];
   use HasFactory, Notifiable;
   public function volunters(){
    return $this->hasMany(Volunter::class, 'user_id');
   }
   public function organization(){
      return $this->belongsTo(Organization::class,'org_id' );
     }
}