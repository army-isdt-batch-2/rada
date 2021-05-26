<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Paysliprecord extends Model
{
    use HasFactory,SoftDeletes;
    protected $table="paysilps_records";

    protected $fillable=[
        'employee_id',
        'payslip_id',
        'date',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
