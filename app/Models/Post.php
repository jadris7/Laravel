<?php

namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //protected $table = 'post';
    protected $fillable = [
        'publication',
        'publication_content',
        'state',
        'category_id'
    ];

    public function category(){
       return $this->belongsTo(Category::class);
    }

}
