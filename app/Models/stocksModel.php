<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stocksModel extends Model
{
    use HasFactory;
    protected $table='stocks';
    protected $primaryKey='stocks_id';
    protected $guarded=[];
}
