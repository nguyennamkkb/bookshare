<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status_order;
use Session;

class Status_orderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( request $request)
    {
        $list=Status_order::orderBy('name','desc');
        if ($request->has('keyword')) {
            $keyword=$request->keyword;
            $list=$list->where('name','like','%'.$keyword.'%');
        }
        $list=$list->orderBy('name', 'desc')->get();
        return view('status-od.list',['list'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('status-od.create');
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
        $stod= new Status_order();
        $stod->name=$request->name;
        $stod->save();
        Session::flash('Success','Thêm mới thành công');
        return redirect('admin/status-od');
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
        $stod=Status_order::findOrFail($id);
        return view('status-od.edit',[
            'stod'=>$stod
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
        $stod=Status_order::findOrFail($id);
        $stod->name=$request->name;
        $stod->save();
        Session::flash('Success','Update Thành công');
        return redirect('admin/status-od');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $stod=Status_order::findOrFail($id);
         $stod->delete();
         Session::flash('Success','Đã Xóa thành công');
         return redirect('admin/status-od');
    }
}
