<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
   protected $table = 'news';

   protected $fillable = [
      'id',
      'content',
      'slug',
      'title',
      'subtitle',
      'subcontent',
      'excerpt',
      'gallery_id',
      'location_id'
   ];
}
