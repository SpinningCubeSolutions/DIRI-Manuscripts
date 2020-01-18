<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manuscript extends Model
{
    protected $fillable = [
        'physical_location',
        'classmark',
        'subject',
        'author',
        'place_of_origin',
        'date_of_creation',
        'associated_persons',
        'physical_description',
        'material',
        'format',
        'binding',
        'images',
        'user_id',


    ];
}
