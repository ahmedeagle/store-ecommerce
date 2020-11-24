<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['photo', 'created_at', 'updated_at'];


    public function getPhotoAttribute($val)
    {
        return ($val !== null) ? asset('assets/images/sliders/' . $val) : "";
    }

}
