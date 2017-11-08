<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class formController extends Controller
{
    /**
     * Logic Goes here.
     *
     * @param  Request  $request
     * @return Response
     */
    public function formHandle(Request $request)
    {
        echo $request->name;
        echo "<br>";
        echo $request->phone;
        echo "<br>";
        echo $request->email;
    }
}
