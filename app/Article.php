<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public static function index()
    {
    	$list = static::all();
    	return $list;
    }
    public static function show($id)
    {
    	$data = static::find($id);
    	return $data;
    }
}
