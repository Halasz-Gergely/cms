<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){
        return view('createcategory');
    }

    public function store(Request $request){
        $request->validate([
            'newcatname' => 'bail|required|max:30'
        ]);
        $data   = $request->all();
        $db     = new Category();

        $db->name = $data['newcatname'];
        $db->save();

        session()->flash('success','Category created successfully');
        return redirect('categories/new');
    }

    public function index(){
        $categoryAll = Category::all();
        return view('categories')->with('categories',$categoryAll);
    }

    public function destroy($catId){
        $recordId = Category::find($catId);
        $recordId->delete();
        session()->flash('success','Category deleted successfully');
        return redirect('categories');
    }

    public function show($catId){
        $recordToDelete = Category::find($catId);
        return view('edit')->with('category',$recordToDelete);
    }

    public function update(Request $request, $catId){
        $recordToUpdate = Category::find($catId);
        $newData        = $request->all();

        $recordToUpdate->name = $newData['name'];
        $recordToUpdate->save();
        session()->flash('success','Category updated successfully');
        return redirect('categories');
    }
}
