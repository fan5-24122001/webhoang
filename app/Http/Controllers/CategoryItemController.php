<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryGroup;
use App\Models\CategoryItem;
class CategoryItemController extends Controller
{
    public function __construct()
    {   $this->middleware('auth');

    }
    public function List()
    {
        $category = CategoryItem::all();
        return view('admin.categoryItem.list', compact('category'));
    }
    public function Create()
    {
        $CategoryGroup = CategoryGroup::all();
        return view('admin.categoryItem.create',compact('CategoryGroup'));
    }
    public function CreatePost(Request $request)
    {
        $category = new CategoryItem();
        $category->id_category_group = $request->id_category_group;
        $category->name = $request->name;
        $category->save();
        return redirect()->route('CategoryItem.list')->with('success', 'thêm thành công');
    }
    public function Edit($id)
    {
        $CategoryGroup = CategoryGroup::all();
        $category = CategoryItem::findOrFail($id);
        return view('admin.categoryItem.edit', compact(['category','CategoryGroup']));
    }
    public function EditPost($id, Request $request)
    {
        $category = CategoryItem::findOrFail($id);
        $category->id = $request->id;
        $category->name = $request->name;
        $category->id_category_group = $request->id_category_group;
        $category->save();
        return redirect()->route('CategoryItem.list')->with('success', 'Sửa thành công');
    }
    public function Delete(CategoryItem $id)
    {
        $id->delete();
        return redirect()->route('CategoryItem.list')->with('success', 'Đã xóa thành công');
    }
}
