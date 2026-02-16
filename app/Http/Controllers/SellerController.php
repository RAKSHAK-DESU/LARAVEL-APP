<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;


class SellerController extends Controller
{
   

    function list(){
        return Seller::find(1)->productData;
    }

     function manyRel(){
        return Seller::find(2)->ProductManyData;
    }

    function manyToOne(){
        return "Many to One Function";
    }
}
