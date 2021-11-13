<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailsModel extends Model
{
    use HasFactory;
    protected $table = 'details';
    protected $fillable = [
        'company_name',
        'phone',
        'address',
        'short_des',
        'location',
        'status',
    ];
}
