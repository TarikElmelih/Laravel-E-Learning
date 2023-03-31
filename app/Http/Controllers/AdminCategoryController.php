<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminCategoryController extends Controller
{
    public function show()
    {
        return view('admin.category.index', [
            'categories' => category::latest()->get()
        ]);
    }

    public function Create()
    {
        $attributes = request()->validate([
            'title' => ['required',Rule::unique('categories', 'title')],
        ]);
        category::create($attributes);
        return redirect()->route('ShowCategories.admin');
    }

    public function store(){
        return view('admin.category.create');
    }

    public function EditShow(category $category)
    {
        return view('admin.category.edit', ['category' => $category]);
    }

    public function Edit(category $category)
    {
        $attributes = request()->validate([
            'title' => ['required',Rule::unique('categories', 'title')->ignore($category)],
        ]);
        category::update($attributes);
        return redirect()->route('ShowCategories.admin');
    }

    public function Delete(category $category)
    {
        $category->delete();
        return redirect()->route('ShowCategories.admin');
    }
}
