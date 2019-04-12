<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( request $request)
    {
        $list=Category::orderBy('name','desc');
        if ($request->has('keyword')) {
            $keyword=$request->keyword;
            $list=$list->where('name','like','%'.$keyword.'%');
        }
        $list=$list->orderBy('name', 'desc')->get();
        return view("category.list",['list'=>$list]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
         'name'=> 'required',
     ]);
        $cate= new Category();
        $cate->name=$request->name;
        $cate->save();
        Session::flash('succcess','Thêm mới thành công!');
        return redirect('admin/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cate=Category::findOrFail($id);;

        return view('category.edit',[
            'cate'=>$cate
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request,[
            'name'=>'required',
        ]);
        $cate=Category::findOrFail($id);
        $cate->name=$request->name;
        $cate->save();
        Session::flash('succcess','Sửa thành công!');
        return redirect('admin/category');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=category::findOrFail($id);
        $category->delete();
        Session::flash('succcess','Xóa thành công!');
        return redirect('admin/category');
    }
    function themcate(Request $request){
        if ($request->has('name')) {
        $cate= new Category();
        $cate->name=$request->name;
        $cate->save();

    }
      
    }
}