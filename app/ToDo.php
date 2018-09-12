<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ToDo extends Model
{
    use SoftDeletes;
    protected $fillable=['title','description','user_by','completed'];

    public function user(){
        return $this->belongsTo(User::class,'user_by','id');
    }
}
