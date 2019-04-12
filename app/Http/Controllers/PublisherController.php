<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publisher;
use Session;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( request $request)
    {

        $list=Publisher::orderBy('name','desc');
        if ($request->has('keyword')) {
            $keyword=$request->keyword;
            $list=$list->where('name','like','%'.$keyword.'%');
        }
        $list=$list->orderBy('name','desc')->get();
        return view("publisher.list",['list'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publisher.create');
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
           'name'=> 'required'
       ]);
        $publ= new Publisher();
        $publ->name=$request->name;
        $publ->save();
        Session::flash('succcess','Thêm mới thành công!');
        return redirect('admin/publisher');
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
        $pul=Publisher::findOrFail($id);;

        return view('publisher.edit',[
            'pul'=>$pul
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
        $publ=Publisher::findOrFail($id);
        $publ->name=$request->name;
        $publ->save();
        Session::flash('succcess','Sửa thành công!');
        return redirect('admin/publisher');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publ=Publisher::findOrFail($id);
        $publ->delete();
        Session::flash('succcess','Xóa thành công!');
        return redirect('admin/publisher');
    }
    public function themnxb(Request $request)
    {
        if ($request->has('name')) {
            $nxb= new Publisher();
            $nxb->name=$request->name;
            $nxb->save();

        }
    }
}
