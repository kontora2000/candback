<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class News extends Model
{
  use Sluggable;

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
      'location_id',
   ];

   public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
