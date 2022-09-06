<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staffsModel extends Model
{
    use HasFactory;
    protected $table='staffs';
    protected $primaryKey='staffs_id';
    protected $guarded=[];
}
