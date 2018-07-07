<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    /**
     * This function getIndex function will return if there's no parameter set
     *
     * @return array
     */
    public function getIndex()
    {
        return ["error" => false, "message" => "API IS UP!"];
    }
}
