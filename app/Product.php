<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
	protected $fillable = [
		'name', 'quanlity', 'category_id', 'decription',
	];
	public function category() {
		return $this->belongsTo('App\Category');
	}
}
