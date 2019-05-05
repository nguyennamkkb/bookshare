<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Product;
use App\Category;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trangchu(request $request)
    {
        $cate=Category::all();
        $list=Product::where('id_user',1)->orwhere('id_user',3)
            ->paginate(2);
        if ($request->has('keyword')) {
            $keyword=$request->keyword;
            $list=Product::where('name','like','%'.$keyword.'%');
            $list=$list->orderBy('id','DESC')->paginate(2);
        }
        if ($request->has('keywordcate')) {
            $keywordcate=$request->keywordcate;
            $list=Product::where('id_category','=',$keywordcate);
            $list=$list->orderBy('id','DESC')->paginate(2);
        }
        if ($request->has('sort')) {
            $sort=$request->sort;

            $list=Product::orderBy('price',$sort)->paginate(2);
        }
       
        
        // $list=$list->orderBy('id','DESC');
        return view('trang.index',[
            'list'=>$list,
            'cate'=>$cate
        ]);

        
    }

    public function index()
    {
        # code...
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
        //
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
        //
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
    public function getCategory($id)
    {
        $cate=Category::all();
        $pro=Product::where('id_category','=',$id)->paginate(12);
        return view('trang.category',[
            'list'=>$pro,
            'cate'=>$cate
        ]);
    }
    public function vue(){
        return view('trang.vue');
    }
}
