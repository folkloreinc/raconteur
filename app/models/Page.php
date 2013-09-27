<?php

class Page extends Eloquent {


	protected $table = 'pages';

	protected $fillable = array('title_fr','title_en','slug_fr','slug_en','body_fr','body_en');


	/*
	 *
	 * Accessors and Mutators
	 *
	 */
	protected function setTitleFrAttribute($value) {
    	$this->attributes['title_fr'] = $value;
    	$this->attributes['slug_fr'] = Str::slug($value);
	}
	protected function setTitleEnAttribute($value) {
    	$this->attributes['title_en'] = $value;
    	$this->attributes['slug_en'] = Str::slug($value);
	}

}