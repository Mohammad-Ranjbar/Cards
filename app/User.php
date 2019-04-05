<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Collection ;
use Illuminate\Foundation\Auth\User as Authenticatable;

//class User extends Authenticatable
//{
//
//    protected $fillable=[
//
//        'username',
//        'email',
//        'password',
//
//
//    ];
//
//    protected $hidden=[
//
//        'password',
//
//
//
//    ];
//
//}

class User extends Authenticatable
{

    protected $primaryKey = 'id';

    protected $fillable=[

        'username',
        'email',
        'password',


    ];

    protected $hidden=[

        'password',



    ];
    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasRole($role)
    {
        if (is_string($role)){

            return $this->roles->contains('name',$role);

        }

        return !! $role->intersect($this->roles)->count();
    }

    public function assignRole($role)
    {
        $this->roles()->sync(Role::whereName($role)->firstOrFail());
    }




}
