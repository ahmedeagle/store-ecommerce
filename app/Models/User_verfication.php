<?php

namespace App\Models;
use Astrotomic\Translatable\Translatable;

use Illuminate\Database\Eloquent\Model;

class User_verfication extends Model
{

     public $table = 'users_verificationCodes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'code','created_at','updated_at'];


    public function attribute(){
        return $this -> belongsTo(Attribute::class,'attribute_id');
    }
}
