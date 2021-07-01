<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productes extends Model
{
    use HasFactory;
    protected $table = "productes";
    
    protected $fillable = ["name","descriotion","price"];
 
   protected  $hidden = ['password','remember_token'];
}
