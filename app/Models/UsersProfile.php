<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class UsersProfile extends Eloquent
{
    /**
     * Indicates table user for this model
     * @var string
     */
    protected $table = "users_profile";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 
        'first_name', 
        'last_name',
        'street'
    ];

    /**
     * Indicates soft delete property of model
     * @var bool
     */
    protected $softDelete = true;
}
