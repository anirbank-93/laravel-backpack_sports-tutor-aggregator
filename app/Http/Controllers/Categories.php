<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class Categories extends Controller
{
    public function index() {
        $categories = Category::all(); // ::get();

        return view('categories/list', ['categories'=>$categories]);
    }

    public function create() {
        return view('categories/create-form');
    }

    public function store(Request $req) {
        // dd($req->categoryName);
        $category = new Category;
        
        $category->title = $req->categoryName;
        $category->description = $req->categoryDesc;
        $category->active = 1;

        $category->save();

        return redirect('/categories');
    }

    public function edit($id) {
        // dd($id);
        $category = Category::where('id',$id)->first();
        
        return view('categories/edit-form', ['category'=>$category]);

    }

    public function update(Request $req,$id) {
        $category = Category::where('id',$id)->first();

        $category->title = $req->categoryName;
        $category->description = $req->categoryDesc;

        $category->save();

        return redirect('/categories');
    }
}
