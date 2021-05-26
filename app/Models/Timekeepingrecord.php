<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Timekeepingrecord extends Model
{
    use HasFactory,SoftDeletes;
    protected $table="timekeeping_records";

    protected $fillable=[
        'clockin',
        'clockout',
        'total',
        'employee_id',
        'timekeeping_id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
