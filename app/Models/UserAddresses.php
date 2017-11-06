<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddresses extends Model
{
    protected $fillable = ['user_id', 'zip', 'country', 'city', 'street', 'house_number', 'extra_information', 'first_name', 'last_name', 'gender'];
}
