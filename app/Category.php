<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
  	protected $table = "category";

  	// tao lien ket giua cac model
    public function type_news()
    {
    	return $this->hasMany('App\Type_news','id_category', 'id');
    }

    public function news()
    {
    	return $this->hasManyThrough('App\News', 'App\Type_news', 'id_category', 'id_type_news', 'id');
    }
}
