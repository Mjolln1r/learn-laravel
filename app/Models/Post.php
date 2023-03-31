<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;

    use Filterable;
    protected $table = 'post';
    protected $guarded = false;

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id','id');
    }
}
