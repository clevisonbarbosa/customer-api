<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'zipcode',
        'city',
        'publicPlace',
        'complement',
        'district',
        'uf',
    ];

    public static $rules = [];

    public function customers()
    {
        return $this->belongsTo(Customer::class);
    }
}
