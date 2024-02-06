<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required',
            'no_rak'    => 'required',
        ]);

        $category = Category::create([
            'name'      => $request->input('name'),
            'no_rak'    => $request->input('no_rak'),
        ]);

        $category->save();

         flash()->success('Kategory buku berhasil dibuat');

        return redirect()->back();
    }

}
