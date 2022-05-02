<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

	protected $fillable = [
		'author_id',
		'slug',
		'title',
		'annotation',
		'cover_url',
		'release_date',
		'is_published'
	];

	public function author(){
		return $this->belongsTo(Author::class);
	}


	public function getReleaseDateAttribute($value){
		if(!$value){
			return false;
		}
		return \Carbon\Carbon::parse($value)->format('m/d/Y');
	}
}
