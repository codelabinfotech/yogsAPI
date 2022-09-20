<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wallpaper;

class WallpaperController extends Controller
{
    public function index()
    {
        return view('wallpaper.index');
    }

    public function create()
    {
        return view('wallpaper.create');
    }

    public function store(Request $request)
    {
        $data = [
            'title' =>  $request->title,
            'description'   =>  $request->description
        ];

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images'), $filename);
            $data['image']= $filename;
        }

        Wallpaper::create($data);

        return redirect()->route('wallpaper.index');
    }

    public function edit($id)
    {
        $data['wallpaper'] = Wallpaper::where('id', $id)->first();

        return view('wallpaper.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $data = [
            'title' =>  $request->title,
            'description'   =>  $request->description
        ];

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images'), $filename);
            $data['image']= $filename;
        }

        Wallpaper::where('id', $id)->update($data);

        return redirect()->route('wallpaper.index');
    }

    public function delete($id)
    {
        Wallpaper::where('id', $id)->delete();

        return redirect()->route('wallpaper.index');
    }
}
