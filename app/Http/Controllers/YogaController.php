<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Yoga;

class YogaController extends Controller
{
    public function index()
    {
        return view('yoga.index');
    }

    public function create()
    {
        return view('yoga.create');
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

        Yoga::create($data);

        return redirect()->route('yoga.index');
    }

    public function edit($id)
    {
        $data['yoga'] = Yoga::where('id', $id)->first();

        return view('yoga.edit', $data);
    }

    public function update($id, Request $request)
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

        Yoga::where('id', $id)->update($data);

        return redirect()->route('yoga.index');
    }

    public function delete($id)
    {
        Yoga::where('id', $id)->delete();

        return redirect()->route('yoga.index');
    }
}
