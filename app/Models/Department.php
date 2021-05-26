<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory,SoftDeletes;
    protected $table="departments";

    protected $fillable=[
        'department_name',
        'created_at',
        'updated_at',
        'deleted_at'
    ];



}
