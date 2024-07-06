<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_income_category;

class IncomeCategoryController extends Controller
{
    //
    public function index(Request $req)
    {
        $category = tbl_income_category::all();
        return  view('income_category.index')->with("category", $category);
    }
    public function store(Request $req)
    {
        $category = new tbl_income_category;
        $category->category_name = $req->category_name;
        $category->user_id = auth()->id(); //Laravel's built-in auth system
        $category->save();
        return redirect()->back();
    }

    // public function showCategory()
    // {
    //     $category = tbl_income_category::all();
    //     return view('income_category.dashboard', compact('category'));
    // }
    public function delete(Request $req)
    {
        $category = tbl_income_category::find($req->id);
        $category->delete();
        return redirect()->back();
    }
    public function edit(Request $req)
    {
        $category = tbl_income_category::find($req->id);
        return view('income_category.edit')->with("category", $category);
    }
    public function update(Request $req)
    {
        $category = tbl_income_category::find($req->id);
        if ($category) {
            $category->update([
                'category_name' => $req->category_name,
            ]);
            return redirect()->route('tbl_income_category.index');
        } else {
            return redirect()->route('tbl_income_category.index')->with('error', 'Category not found');
        }
    }


   
    

    
}
