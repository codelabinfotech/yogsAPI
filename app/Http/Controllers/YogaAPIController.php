<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Yoga;

class YogaAPIController extends Controller
{
    public function getData($id)
    {
        $data = Yoga::where('id', $id)->select('title','description','image')->get();
        return $data;
    }
}
