<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Excercise;
use App\Models\Days;

class ExcerciseController extends Controller
{
    public function index()
    {
        return view('excersise.index');
    }

    public function create()
    {
        $data['days'] = Days::all();
        return view('excersise.create', $data);
    }

    public function store(Request $request)
    {
        $data = [
            'title' =>  $request->title,
            'day_id'    =>  $request->day,
            'description'   =>  $request->description
        ];

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images'), $filename);
            $data['image']= $filename;
        }

        Excercise::create($data);

        return redirect()->route('exercise.index');
    }

    public function edit($id)
    {
        $data['excersice'] = Excercise::where('id', $id)->first();
        $data['days'] = Days::all();

        return view('excersise.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $data = [
            'title' =>  $request->title,
            'day_id'    =>  $request->day,
            'description'   =>  $request->description
        ];

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images'), $filename);
            $data['image']= $filename;
        }

        Excercise::where('id', $id)->update($data);

        return redirect()->route('exercise.index');
    }

    public function delete($id)
    {
        Excercise::where('id', $id)->delete();

        return redirect()->route('exercise.index');
    }
}
