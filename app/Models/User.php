<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // Specify the table associated with the model
    protected $table = 'tbluser';

    // Columns that are mass assignable
    protected $fillable = [
        'username',
        'password',
        'gender',
        'jobid'
    ];

    public $timestamps = false;
    protected $primaryKey = 'userid';
    protected $hidden = ['password'];
}