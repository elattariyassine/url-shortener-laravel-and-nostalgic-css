<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    public $timestamps = false;
    protected $fillable = ['url','shortened'];

    public static function get_unique_url_short_url()
	{
		$shortened = str_random(5);

		if (static::where('shortened',$shortened)->count() != 0) {
			return static::get_unique_url_short_url();
		}

		return $shortened;
	}
}
