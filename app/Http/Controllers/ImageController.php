<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use Session;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index( request $request)
    {

        $list=Image::orderBy('name','desc');
        if ($request->has('keyword')) {
            $keyword=$request->keyword;
            $list=$list->where('name','like','%'.$keyword.'%');
        }
        $list=$list->orderBy('name','desc')->get();
        return view("image.list",['list'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    function create()
    {
        return view('image.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    function store(Request $request)
    {
        $this->validate($request,[
           'name'=> 'required'
       ]);
        $img= new Image();

        $img->id_product=$request->idproduct;
        $img->image1=$request->image1;
        $img->image2=$request->image2;
        $img->image3=$request->image3;
        $img->image4=$request->image4;
        $img->image5=$request->image5;
        $img->image6=$request->image6;
        $img->save();
        Session::flash('succcess','Thêm mới thành công!');
        return redirect('admin/image');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function edit($id)
    {
        $img=Image::findOrFail($id);;

        return view('image.edit',[
            'img'=>$img
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required',
        ]);
        $img=Image::findOrFail($id);
        $img->id_product=$request->idproduct;
        $img->image1=$request->image1;
        $img->image2=$request->image2;
        $img->image3=$request->image3;
        $img->image4=$request->image4;
        $img->image5=$request->image5;
        $img->image6=$request->image6;
        $img->save();
        Session::flash('succcess','Sửa thành công!');
        return redirect('admin/image');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     function destroy($id)
    {
        $img=Image::findOrFail($id);
        $img->delete();
        Session::flash('succcess','Xóa thành công!');
        return redirect('admin/image');
    }
}