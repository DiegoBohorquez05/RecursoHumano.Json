<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable =[
        'id',
        'name',
        'last-name',
        'document',
        'birthdate',
        'age',
        'phone',
        'address',
        'job',
        'area_id',
        'contract_id'
    ];
    
    public function areas()
    {
        return $this->belongsTo(areas::class);
    }

    public function contracts()
    {
        return $this->belongsTo(contracts::class);
    }
}
