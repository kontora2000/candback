<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
   protected $table = 'candidate';
   protected $fillable = [
       'id',
       'name',
       'status',
       'part_id',
       'votes',
       'avatar_id',	
       'gallery_id',
       'description'
   ];

}

