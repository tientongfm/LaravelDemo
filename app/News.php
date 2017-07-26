<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = "news";
    
    // tao lien ket giua cac model
    public function type_news()
    {
    	//1 tin tuc thuoc 1 loai tin
    	return $this->belongsTo('App\Type_news', 'id_type_news', 'id');
    }

    public function comment()
    {
    	//1 tin tuc co nhieu comment
    	return $this->hasMany('App\Comment', 'id_news', 'id');
    }
}
