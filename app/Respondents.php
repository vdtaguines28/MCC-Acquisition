<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respondents extends Model
{
    protected $table = 'respondents';

    protected $fillable = ['firstname','lastname','isready','placetogo','email','thingtodo','birthday','gift','mobile_number'];

}
