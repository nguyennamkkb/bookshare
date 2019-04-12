<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userdetail;
use Session;


class UserdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $detail=Userdetail::where('id_user','=',$id)->firstOrFail();
        return view('userdetail.edit',['detail'=>$detail]);
       
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

        $ud=Userdetail::findOrFail($id);
        $id_user=$ud->id_user;
        $ud->fullname=$request->fullname;
        $ud->sex=$request->sex;
        $ud->address=$request->address;
        $ud->birthday=$request->birthday;
        $ud->phone_number=$request->phone_number;
        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $fileName=$file->getClientOriginalName();
            $dir=public_path('uploads/user');
            $file->move($dir,$fileName);
            $ud->image=$fileName;
        }
        $ud->save();
        Session::flash('succcess','Thay đổi thành công!');
        return redirect('admin/user/'.$id_user.'/detail');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
