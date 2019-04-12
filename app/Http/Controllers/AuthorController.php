<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use Session;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $list=Author::orderBy('name', 'desc');
        if ($request->has('keyword')) {
            $keyword=$request->keyword;
            $list=$list->where('name','like','%'.$keyword.'%');
        }
        $list=$list->orderBy('name', 'desc')->get();
        return view('author.list',['list'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('author.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['name'=>'required']);
        
        $au= new Author();
        $au->name=$request->name;
        $au->info=$request->info;
        $au->save();
        Session::flash("Success"," Thêm mới thành công");
        return redirect('admin/author');
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
        $au=Author::findOrFail($id);
        return view('author.edit',['au'=>$au]);
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
        $au=Author::findOrFail($id);
        $au->name=$request->name;
        $au->info=$request->info;
        $au->save();
        Session::flash("Success"," Update thành công");
        return redirect('admin/author');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $au=Author::findOrFail($id);
       $au->delete();
       Session::flash("Success"," Đã xóa thành công");
       return redirect('admin/author');
   }
   public function themtacgia(Request $request){
    if ($request->has('name')) {
        $themtg= new Author();
        $themtg->name=$request->name;
        $themtg->save();
    }
}
}
