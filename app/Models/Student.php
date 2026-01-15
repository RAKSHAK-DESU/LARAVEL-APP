<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "college_student";

    function testFun(){
        return "This is DUmmy Function";
    }
}
