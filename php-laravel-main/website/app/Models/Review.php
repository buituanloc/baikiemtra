<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Review extends Model
{
    protected $primaryKey = 'review_id';
    use HasFactory;
    public function categoryAndUser(){
        return $this->belongsTo(Review::class,['user_id','category_parent_id'],'review_id');
    }

    public function foreignKeyId():HasMany
    {
        return $this->hasMany(Review::class,['user_id','category_parent_id'],'review_id');
    }
}
