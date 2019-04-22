<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth; 
use App\Product;
use App\Category;
use App\Comment;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function detail($id)
    {
        $cm=Comment::where('id_product','=',$id)->get();
        $cate=Category::all();
        $pro=Product::findOrFail($id);
        $allpro=Product::limit(5)->get();
        
        return view('trang.product.detail',[
            'pro'=>$pro, 
            'cate' =>$cate, 
            'comment'=>$cm,
            'allpro' =>$allpro
        ]);
    }
    public function postReview(Request $request, $id)
    {
        $cm= new Comment;
        $cm->id_user=Auth::user()->id;
        $cm->id_product=$id;
        $cm->comment=$request->reviewct;
        $cm->save();
        return back();


    }
}
