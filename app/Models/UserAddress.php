<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $fillable = ['user_id', 'zip', 'country', 'city', 'street', 'house_number', 'extra_information', 'first_name', 'last_name', 'gender'];
}
