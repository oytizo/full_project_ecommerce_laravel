<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bankModel extends Model
{
    use HasFactory;
    protected $fillable=[
        'first_name',
        'last_name',
        'full_name',
        'birth_date',
        'age',
        'branch_name',
        'card_no',
        'city',
        'expair_date',
        'cvv_no',
        'email',
        'phone',
    ];
}
