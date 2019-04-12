<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Userdetail;
use Session;
use App\Role;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $list=User::orderBy('name', 'desc');
        if ($request->has('keyword')) {
            $keyword=$request->keyword;
            $list=$list->where('name','like','%'.$keyword.'%');
        }
        $list=$list->orderBy('name', 'desc')->get();
        return view('user.list',['list'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $user=User::findOrFail($id);
        $role=Role::pluck('name','id');

        return view('user.edit',[
            'user'=>$user,
            'role'=>$role
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
        $au=User::findOrFail($id);
        $au->id_role=$request->id_role;
        $au->save();
        Session::flash("Success"," Update thành công");
        return redirect('admin/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $au=User::findOrFail($id);
        $au->delete();
        Session::flash("Success"," Đã xóa thành công");
        $ud=Userdetail::where('id_user','=',$id)->delete();
        return redirect('admin/user');
    }
    public function detail($id)
    {
        $user=User::findOrFail($id);
        $list=Userdetail::all();
        $list=$list->where('id_user','=',$id);
        if ($list=='[]') {
            $us = new Userdetail();
            $us->id_user=$id;
            $us->save();
            return view('userdetail.nhap',[
                'user'=>$user,
                'list' =>$list,]);
        }else{
            return view('userdetail.list',[
                'user'=>$user,
                'list' =>$list,]);

        }
        
        
        
    }
    public function dangxuat()
    {
        echo "string";
    }
}
