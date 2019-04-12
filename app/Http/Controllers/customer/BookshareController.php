<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth; 
use App\Userdetail;
use App\Publisher;
use App\Status_pro;
use App\Category;
use App\Author;
use App\Product;
use App\User;
use Session;

class BookshareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( request $request)
    {
            }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate1=Category::pluck('name','id');
        $cate=Category::all();
        $pub=Publisher::pluck('name','id');
        $auth=Author::pluck('name','id');
        return view('trang.booksharecus.create',[
            'cate'=>$cate,
            'cate1'=>$cate1,
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
         'image'=> 'mimetypes:image/jpeg',
         'bookdemo'=> 'mimetypes:application/pdf',
         'bookfull'=> 'mimetypes:application/pdf',

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
        return redirect('/');
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

        $cate=Category::pluck('name','id');
        $pub=Publisher::pluck('name','id');
        $auth=Author::pluck('name','id');
        $pro=Product::findOrFail($id);
        return view('product.edit',[
            'cate'=>$cate,
            'pub'=>$pub,
            'auth'=>$auth,
            'product'=>$pro,
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
        //
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
    public function bookshop($id)
    {
        $user=User::findOrFail($id);
        $usdt=Userdetail::where('id_user','=',$user->id)->get();
        $list=Product::where('id_user','=',$id);
        $list=$list->orderBy('price','DESC')->paginate(8);
        return view('trang.booksharecus.bookshare',[
            'pro'=>$list, 
            'user' =>$user,
            'usdt' =>$usdt

        ]);
       
    }
    
}

