<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;
    protected $fillable =[
        'id',
        'salary',
        'start_date',
        'end_date',
        'type_contract_id'
    ];
    public function typeContracts()
    {
        return $this->belongsTo(typeContracts::class);
    }
}
