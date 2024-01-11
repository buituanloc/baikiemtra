<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    use HasFactory;
    public function findSeo(){
        return $this->hasOne(Seo::class,'post_id','id');
    }

    public static function boot():void
    {
        parent::boot();
        static::deleting(function ($post){
            $post->findSeo->delete();
        });
    }
}
