<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_news extends Model
{
    //
	protected $table = "type_news";

	// tao lien ket giua cac model
	public function category()
	{
		//Xem loai tin thuoc the loai nao
		return $this->belongsTo('App\Category', 'id_category', 'id');
	}

	public function news()
	{
	    //loai tin co nhieu tin tuc
	    return $this->hasMany('App\News', 'id_type_news', 'id');
	}
}
