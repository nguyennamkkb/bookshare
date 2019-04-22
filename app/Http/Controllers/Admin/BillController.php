<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Bill;
use App\Bill_detail;
use App\Status_order;
class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bill = Bill::all();
        $this->data['bill'] = $bill;
        return view('bill.list', $this->data);
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
        $billInfo=Bill::find($id);
        $billDetail=Bill_detail::where('bill_id',$id)->get();
        $stoder=Status_order::pluck('name','id');
        
        return view('bill.edit', [
            'billInfo' => $billInfo,
            'billDetail' =>$billDetail,
            'stoder' =>$stoder

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
        $bill = Bill::find($id);
        $bill->status_id = $request->status;
        $bill->save();
        Session::flash('message', "Successfully updated");

        return Redirect::to('admin/bill');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bill = Bill::find($id);
        $bill->delete();
        Session::flash('message', "Successfully deleted");

        return Redirect::to('admin/bill');
    }
    public function getMyOder(){
        // $billInfo=Bill::find($id);
        // $billwaiting=Bill_detail::where([
        //     ['bill_id',$billInfo->id],
        //     ['status_id',2],
        // // ])->get();
        // $billwaiting=Bill::where('status_id',2)->get();
        // $billdelivey=Bill::where('status_id',3)->get();
        // $billordered=Bill::where('status_id',4)->get();
        // $billcancel=Bill::where('status_id',5)->get();
        // $
        
   }
}
