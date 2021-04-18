<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table = 'customers';
	protected $fillable = ['customer_name', 'customer_email','customer_phone','discount'];
}
