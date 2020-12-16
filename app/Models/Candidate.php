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
       'partyID',
       'votes',
       'avatarID',	
       'galleryID',
       'description',
       'tagID'
   ];

}

