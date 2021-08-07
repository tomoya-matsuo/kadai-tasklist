<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tasklist extends Model
{
    //
        protected $fillable = ['content','status','user_id'];
    
    // この投稿を所有するユーザ
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}