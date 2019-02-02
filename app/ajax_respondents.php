<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ajax_respondents extends Model
{
    protected $table = 'ajax_respondents';

    protected $fillable = ['firstname','lastname','isready','placetogo','email','thingtodo','birthday','gift','mobile_number'];

    public $timestamps = false;
}
