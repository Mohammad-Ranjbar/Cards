<?php
/**
 * Created by PhpStorm.
 * User: mohammad
 * Date: 5/1/19
 * Time: 1:30 AM
 */

namespace App;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class PremiumUser implements Scope
{


    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $builder
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @return $this|void
     */
    public function apply(Builder $builder, Model $model)
    {

        //Select users.type FROM users WHERE type='premium
        //User::all()


        return $builder->where('type','premium');



    }



}