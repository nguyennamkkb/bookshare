<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use App\Bill_detail;
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
        $bill = Bill::where('user_id','=',Auth::user()->id);
        $billdxn=$bill->where('status_id','=',1)->get();
        $billcxn=$bill->where('status_id','=',3)->get();
        $billgn=$bill->where('status_id','=',2)->get();
        $billdgn=$bill->where('status_id','=',4)->get();
        $this->data['billdxn'] = $billdxn;
        $this->data['billcxn'] = $billcxn;
        $this->data['billgn'] = $billgn;
        $this->data['billdgn'] = $billdgn;
        return view('trang.profile.myorder', $this->data);
    }
}
