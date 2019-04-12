<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status_pro;
use Session;

class Status_proController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( request $request)
    {
        $list=Status_pro::orderBy('name','desc');
        if ($request->has('keyword')) {
            $keyword=$request->keyword;
            $list=$list->where('name','like','%'.$keyword.'%');
        }
        $list=$list->orderBy('name', 'desc')->get();
        return view('status-pro.list',['list'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('status-pro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            ['name'=>'required']
            );
        $stpro= new Status_pro();
        $stpro->name=$request->name;
        $stpro->save();
        Session::flash('Success','Thêm mới thành công');
        return redirect('admin/status-pro');
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
        $stpro=Status_pro::findOrFail($id);
        return view('status-pro.edit',[
            'stpro'=>$stpro
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
        $stpro=Status_pro::findOrFail($id);
        $stpro->name=$request->name;
        $stpro->save();
        Session::flash('Success','Update Thành công');
        return redirect('admin/status-pro');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $stpro=Status_pro::findOrFail($id);
         $stpro->delete();
         Session::flash('Success','Đã Xóa thành công');
         return redirect('admin/status-pro');
    }
}