<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Excercise;
use App\Models\Days;
use App\Http\Resources\ExcersiceResource;

class ExcerciseAPIController extends Controller
{

    public function getDays()
    {
        $data['days'] = Days::all();
        return $data;
    }

    public function getData()
    {
        $data['excersice'] = Excercise::with('day:id,days')->get();
        return $data;
    }

    public function getExcersiceData($id)
    {
        $data = Excercise::where('id', $id)->get();
        return $data;
    }
}
