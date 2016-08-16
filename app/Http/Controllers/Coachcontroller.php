<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Coachcontroller extends Controller
{
    public function getCoach($id)
    {
        if($id == 1)
        {
        	return view('hopf');
        }
        if($id == 2)
        {
        	return view('haggs');
        }
        if($id == 3)
        {
        	return view('camp');
        }
        if($id == 4)
        {
        	return view('schomp');
        }
        if($id == 5)
        {
        	return view('heather');
        }

    }
}
