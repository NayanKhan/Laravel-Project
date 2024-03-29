<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'designation',
        'slug',
        'overview',
        'phone',
        'address',
        'email',
        'fiver_img',
        'fiver_url',
        'upwork_img',
        'upwork_url',
        'profile_pic',
        'status',
    ];
}
