<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Cart;
use App\Product;
use App\Category;
use Mail;
use App\Bill;
use App\Bill_detail;
use App\Customer;


class CartController extends Controller
{
    public function getAddCart($id)
    {
    	$product=Product::findOrFail($id);
    	Cart::add(['id' => $id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price,'options' => ['image' => $product->image]]);

    	return back();

    }
    public function getshowCart(){
    	$data['total']=Cart::total();
    	$data['items']=Cart::content();
        $cate=Category::all();
        return view('trang.cart',$data,['cate'=>$cate]);
    }
    public function deleteCart($id)
    {
    	if ($id=='all'){
    		Cart::destroy();
    	}else{
    		Cart::remove($id);
    	}
    	return back();
    }
    public function getUpdateCart(Request $request)
    {
    	Cart::update($request->rowId,$request->qty);
    }
    public function checkout()
    {
        $data['total']=Cart::total();
        $data['items']=Cart::content();
        return view('trang.checkout',$data);
    }
    public function postComplete(Request $request)
    {
        
    }
    public function postcheckout(Request $request)
    {
        $user=Auth::user();
        $cartInfor = Cart::content();
        // validate
        $rule = [
            'ho' => 'required',
            'ten' => 'required',
            'email' => 'required|email',
            'diachinhan' => 'required',
            'phoneNumber' => 'required|digits_between:10,12'

        ];
        //   $validator = Validator::make(Input::all(), $rule);
        
        // if ($validator->fails()) {
        //     return redirect('/checkout')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }
        
        try {
            // save

            $customer = new Customer;
            $customer->name = $request->ho.' '.$request->ten ;
            $customer->email = $request->email;
            $customer->address = $request->diachinhan;
            $customer->phone_number = $request->phone;
            //$customer->note = $request->note;
            $customer->save();

            $bill = new Bill;
            $bill->customer_id = $customer->id;
            $bill->user_id=$user->id;
            $bill->date_order = date('Y-m-d H:i:s');
            $bill->total = str_replace(',', '', Cart::total());
            // $bill->note = Request::get('note');
            $bill->save();

            if (count($cartInfor) >0) {
                foreach ($cartInfor as $key => $item) {
                    $billDetail = new Bill_detail;
                    $billDetail->bill_id = $bill->id;
                    $billDetail->product_id = $item->id;
                    $billDetail->quantily = $item->qty;
                    $billDetail->price = $item->price;
                    $billDetail->save();
                    

                }
            }
          // del
            Cart::destroy();
            return redirect('');

        } catch (Exception $e) {
            echo $e->getMessage();
        }

        

       

    }
    public function getMyOder()
    {
        
    }
}
