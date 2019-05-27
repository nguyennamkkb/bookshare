<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth; 
use App\Userdetail;
use App\User;
use App\Product;
use App\Category;
use Session;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $cate=Category::all();
        // $user=Auth::user();
        // return view('trang.profile.profile',['cate'=>$cate]);
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


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {    if (Auth::user()->id==$id) {
            $cate=Category::all();
            $userdt=Userdetail::where('id_user',$id)->firstOrFail();
            return view('trang.profile.editprofile',[
            'cate'=>$cate,
            'detail'=>$userdt
         ]);
        }else {
         return back();
    }
         

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
        return redirect('profile/'.$id_user.'/detail');
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
    public function profile($id)
    {
        $cate=Category::all();
        $user=Auth::user();
        $pro=Product::where('id_user',$id)->get();
        $userdetail=Userdetail::where('id_user','=',$id)->get();
        if ($userdetail=='[]') {
            $us = new Userdetail();
            $us->id_user=$id;
            $us->save();
            return view('trang.profile.nhap',[
                'cate'=>$cate,
                'pro' => $pro
            ]);

        }
        return view('trang.profile.profile',[
            'user'=>$user,
            'userdt'=>$userdetail,
            'cate'=>$cate,
            'pro' => $pro
        ]);

        
    }
}
