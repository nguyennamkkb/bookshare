<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use App\Bill_detail;
use App\Category;
use Illuminate\Support\Facades\Auth; 


class BillController extends Controller
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
    public function getMyOder()
    {
        $cate=Category::all();
        $id=Auth::user()->id;
        // $bill = Bill::where('user_id','=',$id);
        
        $billcxn=Bill::where([
            ['status_id',2],
            ['user_id','=',$id],
        ])->get();
        $billcxn1= $billcxn->first();
        
        $billdanggiao=Bill::where([
            ['status_id',3],
            ['user_id','=',$id],
        ])->get();
         $billdanggiao1= $billdanggiao->first();
        
        $billdagiao=Bill::where([
            ['status_id',4],
            ['user_id','=',$id],
        ])->get();
        $billdagiao1= $billdagiao->first();
        
        $billhuy=Bill::where([
            ['status_id',5],
            ['user_id','=',$id],
        ])->get();
        $billhuy1= $billhuy->first();


        
        $this->data['billcxn'] = $billcxn;
        $this->data['billcxn1'] =$billcxn1;

        $this->data['billdagiao'] = $billdagiao;
        $this->data['billdagiao1'] = $billdagiao1;

        $this->data['billdanggiao'] = $billdanggiao;
        $this->data['billdanggiao1'] = $billdanggiao1;
        
        $this->data['billhuy'] = $billhuy;
        $this->data['billhuy1'] = $billhuy1;
        $this->data['cate']=$cate;
        
        

        return view('trang.profile.myorder', $this->data);
    }
    public function getDetailOd($id)
    {
        $cate=Category::all();
        $billInfo=Bill::find($id);
        $billDetail=Bill_detail::where('bill_id',$id)->get();
       
        
        return view('trang.profile.detailod', [
            'billInfo' => $billInfo,
            'billDetail' =>$billDetail,
            'cate' => $cate,
        ]);
    }
}
