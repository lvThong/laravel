<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    use HasFactory;
    protected $fillable = ['name',  'user_id', 'customer_id', 'status', 'created_at', 'updated_at'];
}
