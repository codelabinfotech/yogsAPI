<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Days;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.index');
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        Days::create($request->all());

        return redirect(route('category.index'));
    }

    public function edit($id)
    {
        $data['day'] = Days::where('id', $id)->first();
        
        return view('category.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $data = [
            'days' => $request->days
        ];

        Days::where('id', $id)->update($data);

        return redirect()->route('category.index');
    }

    public function delete($id)
    {
        Days::where('id', $id)->delete();

        return redirect()->route('category.index');
    }
}
