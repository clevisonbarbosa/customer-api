<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'telephone',
        'birth',
    ];

    public static $rules = [];
    
    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
