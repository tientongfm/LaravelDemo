<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//su dung model category
use App\Category;

class CategoryController extends Controller
{
    //
    public function getList()
    {
        $category = Category::all();
        return view('admin.category.list', ['category'=>$category]);

    }

    public function getAdd()
    {
    	
    }

    public function getEdit()
    {
    	
    }




}
