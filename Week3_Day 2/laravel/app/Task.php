<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	protected $table = 'tasks';
	protected $fillable = ['tittle','user_id','description','categoryid'];

	public function category(){
		return $this->belongsTo('App\Category','categoryid');
	}

	public function user(){
		return $this=>belongsTo('App\User','user_id');
	}
    //
}
