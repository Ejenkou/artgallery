<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    public $timestamps = true;

    protected $fillable =[
    	'UserId',
        'body',
        'contentId'
    ];

    public function user()
    {
    	return $this->belongsTo('App\Models\User', 'userId');
    }

    public function content()
    {
    	return $this->belongsTo('App\Models\Content', 'contentId');
    }


}
