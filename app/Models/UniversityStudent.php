<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniversityStudent extends Model
{
   
    protected $table = "universitystudents";

    function testFun(){
        return "This is DUmmy  Test Function";
    }
}
