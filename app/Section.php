<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;

class Section extends Model
{
    protected $fillable = [
        'name'
    ];
    public function articles(){
        return $this->belongsToMany(Article::class);
    }
}
