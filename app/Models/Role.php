<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name', 'permissions'   // json field
    ];

    public function users()
    {
        $this->hasMany(User::class);
    }

    public function getPermissionsAttribute($permissions)
    {
        return json_decode($permissions, true);
    }
}
