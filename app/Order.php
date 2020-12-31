<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'first_name', 'last_name', 'email', 'car_make', 'model', 'fuel_type', 'phone',
        'engine_size', 'desired_date_and_time', 'user_id', 'service_id', 'localization', 'problem'
    ];
}
