<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $table = "messages";
    protected $primaryKey = "M_CODE";
    
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'U_ID');
    }

    public function answerUser() 
    {
        return $this->hasOne('App\User', 'id', 'ANSWER_U_ID');
    }
}
