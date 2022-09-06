<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ordersModel extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $primaryKey='orders_id';
    protected $guarded=[];
}
