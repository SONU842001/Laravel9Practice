<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;


    // https://laravel.com/docs/5.6/eloquent#mass-assignment (know abour fillable)


    protected $guarded = [];
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'username',
    //     'password',
    //     'profile_photo'
    // ];
}
