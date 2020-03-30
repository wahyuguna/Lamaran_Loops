<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    protected $table = "posts";
	protected $primaryKey = 'id';

	protected $fillable = [
        'user_id','title','slug','content'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}


