<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Publisher;
use App\Status_pro;
use App\Category;
use App\Author;
use App\Product;
use App\User;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( request $request)
    {

     $list=Product::where('price','>',0);
     if ($request->has('keyword')) {
        $keyword=$request->keyword;
        $list=$list->where('name','like','%'.$keyword.'%');}
        $list=$list->orderBy('price','DESC')->get();
        return view('product.list',['list'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate=Category::pluck('name','id');
        $pub=Publisher::pluck('name','id');
        $auth=Author::pluck('name','id');
        return view('product.create',[
            'cate'=>$cate,
            'pub'=>$pub,
            'auth'=>$auth,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=Auth::User();
        $this->validate($request,[
         'name'=> 'required',
         'price'=> 'required|numeric',
         'noidung'=> 'required',
         'publication_date'=> 'required',
         'id_category'=> 'required',
         'quantity'=> 'required',
         'id_publishing'=> 'required',
         'id_author'=> 'required',
         // 'image'=> 'mimetypes:image/jpeg',
         // 'bookdemo'=> 'mimetypes:application/pdf',
         // 'bookfull'=> 'mimetypes:application/pdf',

     ]);
        $product= new Product();
        $product->name=$request->name;
        $product->price =$request->price;
        $product->noidung=$request->noidung;
        $product->publication_date=$request->publication_date;
        $product->id_category=$request->id_category;
        $product->quantity=$request->quantity;
        $product->id_publishing=$request->id_publishing;
        $product->id_author=$request->id_author;
        $fileName1='';
        $fileName2='';
        $fileName3='';
        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $fileName1=$file->getClientOriginalName();
            $dir=public_path('uploads/product');
            $file->move($dir,$fileName1);
        }
        if ($request->hasFile('bookdemo')) {
            $file=$request->file('bookdemo');
            $fileName2=$file->getClientOriginalName();
            $dir=public_path('uploads/bookdemo');
            $file->move($dir,$fileName2);
        }
        if ($request->hasFile('bookfull')) {
            $file=$request->file('bookfull');
            $fileName3=$file->getClientOriginalName();
            $dir=public_path('uploads/bookfull');
            $file->move($dir,$fileName3);
        }
        $product->image=$fileName1;
        $product->bookdemo=$fileName2;
        $product->bookfull=$fileName3;
        $product->id_user=$user->id;
        $product->save();
        Session::flash("Success"," Update thành công");
        return redirect('admin/product');
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
        $pro=Product::findOrFail($id);
        $cate=Category::pluck('name','id');
        $stt=Status_pro::pluck('name','id');
        $pub=Publisher::pluck('name','id');
        $auth=Author::pluck('name','id');
        
        return view('product.edit',[
            'cate'=>$cate,
            'pub'=>$pub,
            'auth'=>$auth,
            'product'=>$pro,
            'stt'=>$stt,
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
        $user=Auth::User();
        $product=Product::findOrFail($id);
        $product->name=$request->name;
        $product->price =$request->price;
        $product->noidung=$request->noidung;
        $product->publication_date=$request->publication_date;
        $product->id_category=$request->id_category;
        $product->quantity=$request->quantity;
        $product->id_publishing=$request->id_publishing;
        $product->id_author=$request->id_author;
        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $fileName=$file->getClientOriginalName();
            $dir=public_path('uploads/product');
            $file->move($dir,$fileName);
            $product->image=$fileName;
        }

        if ($request->hasFile('bookdemo')) {
            $file=$request->file('bookdemo');
            $fileName1=$file->getClientOriginalName();
            $dir=public_path('uploads/bookdemo');
            $file->move($dir,$fileName1);
            $product->bookdemo=$fileName1;
        }
        if ($request->hasFile('bookfull')) {
            $file=$request->file('bookfull');
            $fileName2=$file->getClientOriginalName();
            $dir=public_path('uploads/bookfull');
            $file->move($dir,$fileName2);
            $product->bookfull=$fileName2;
        }
        $product->id_user=$user->id;
        $product->id_status=$request->id_status;
        $product->save();
        Session::flash("Success"," Update thành công");
        return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $product=Product::findOrFail($id);
        $product->delete();
        Session::flash('succcess','Xóa thành công!');
        return redirect('admin/product');
    }
    public function detail($id)
    {
        $stpr=Status_pro::pluck('name','id');
        $list=Product::all();
        $list=$list->where('id','=',$id);
        return view('product.detail',[
            'list' =>$list,
            'stpr' =>$stpr
        ]);
    }
    public function checkout()
    {
        $list=Product::all();
        $list=$list->where('id_status','>',1);
        return view('product.check',[
            'check'=>$list,


        ]);
    }
    public function check($id)
    {
        $product=Product::findOrFail($id);
        $product->id_status=1;
        $product->save();
        return redirect('admin/checkout');
    }
    
}
