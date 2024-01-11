<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static where(string $string, string $string1, int $int)
 */
class Category extends Model
{
    use HasFactory;
    protected $primaryKey = 'category_id';
    public function parentCategory(){
        return $this->belongsTo(Category::class, "category_parent_id",'category_id');
    }

    public function childs():HasMany{
        return $this->hasMany(Category::class, "category_parent_id",'category_id');
    }
}

