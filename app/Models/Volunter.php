<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Volunter extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'user_id',
        'activates_id'
    ];

   public function user(){
    return $this->belongsTo(User::class, 'user_id');
   }
   public function Activates(){
    return $this->belongsTo(Activates::class);
   }
}
