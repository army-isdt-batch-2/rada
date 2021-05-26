<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Load extends Model
{
    use HasFactory,SoftDeletes;
    protected $table="loads";

    protected $fillable=[
        'employee_id',
        'loan_type',
        'amount',
        'months_payable',
        'notes',
        'created_at',
        'updated_at',
        'deleted_at'
}
