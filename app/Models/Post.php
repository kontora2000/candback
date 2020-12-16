<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;



class Post extends Model
{

   protected $table = 'Post';

   protected $fillable  = [
      'content',
      'slug',
      'title',
      'subtitle',
      'subcontent',
      'excerpt',
      'galleryID',
      'locationID',
   ];

   
}
