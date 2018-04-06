<?php

namespace app\lib;

use App\model\crud;
use Illuminate\Http\Request;

class CrudLib
{

    public function fetchData()
    {

        return	crud::get();

    }




}
