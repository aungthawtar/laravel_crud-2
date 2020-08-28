<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view ('admin/category/index',compact('categories'));
    }

    public function create()
    {
        return view('admin/category/create');
    }

    public function store(Request $request)
    {
        Category::create([
            'name' => $request->name,
        ]);
        return redirect('admin/category');
    }

    public function show($id)
    {
        // $category = Category::find($id);
        // return view('admin/category/show',compact('category'));
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin/category/edit',compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->update($request->all());
        return redirect('admin/category');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('admin/category');
    }
}
