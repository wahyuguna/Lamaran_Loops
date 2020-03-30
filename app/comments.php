<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    protected $table = "comments";
	protected $primaryKey = 'id';

	protected $fillable = [
        'post_id','name','email','website','comment'
    ];

     public function post()
    {
        return $this->belongsTo('App\posts');
    }

}
