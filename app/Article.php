<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Section;

class Article extends Model
{
    protected $fillable = [
        'title',
        'description',
//        'link',
        'content',
//        'section_id[]'
    ];
    public function sections(){
        return $this->belongsToMany(Section::class);
    }

    // helper
    public function getSectionListAttribute()
    {
        return $this->sections->pluck('id', 'id')->toArray();
    }

}
