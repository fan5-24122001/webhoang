<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\CategoryGroup;
use App\Models\CategoryItem;

class CategoryGroupController extends Controller
{
    public function __construct()
    {   $this->middleware('auth');

    }
    public function List()
    {
        $category = CategoryGroup::all();
        return view('admin.categoryGroup.list', compact('category'));
    }
    public function Create()
    {
        return view('admin.categoryGroup.create');
    }
    public function CreatePost(Request $request)
    {
        $category = new CategoryGroup();
        $category->name = $request->name;
        $category->save();
        return redirect()->route('CategoryGroup.list')->with('success', 'thêm thành công');
    }
    public function Edit($id)
    {
        $category = CategoryGroup::findOrFail($id);
        return view('admin.categoryGroup.edit', compact('category'));
    }
    public function EditPost($id, Request $request)
    {
        $category = CategoryGroup::findOrFail($id);
        $category->id = $request->id;
        $category->name = $request->name;
        $category->save();
        return redirect()->route('CategoryGroup.list')->with('success', 'Sửa thành công');
    }
    public function Delete(CategoryGroup $id)
    {
        $id->delete();
        return redirect()->route('CategoryGroup.list')->with('success', 'Đã xóa thành công');
    }
}
