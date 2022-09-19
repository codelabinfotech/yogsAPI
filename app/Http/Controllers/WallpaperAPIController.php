<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Wallpaper;

class WallpaperAPIController extends Controller
{
    public function getData($id)
    {
        $data = Wallpaper::where('id', $id)->select('title','description','image')->get();
        return $data;
    }
}
