<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

//connetion to the database
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    //only these fields can be updated, timestamp field automatically updated
    protected $fillable = ['title', 'description', 'completed'];
    protected $guarded = ['id'];

}
