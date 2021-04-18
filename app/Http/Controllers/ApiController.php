<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Customers;
use DB;
use Redirect;

class ApiController extends Controller
{
   public function createCustomer(Request $request) {
	   //dd($request['name']);
      $request->validate([
            
			'name' => 'required',
			'email' => 'required|email|unique:customers',
			'customer_phone' => 'required|numeric|unique:customers'
			
			
		]);
		//dd($request('name'));
		//$customer= Input::all();
		$customer = new Customers();
		$customer->customer_name 			= $request['name'];
        $customer->email 			= $request['email'];
		$customer->customer_phone 		    = $request['customer_phone'];
		
		  
		  $customer->save();
		  $customer->id;
		$discount = [
			'10000' => 1,
			'5000' => 2,
			'2000' => 4,
			'1000' => 5,
			'500' => 8,
			'50' => 15,
			'200' => 10,
			'100' => 12,
			
		];
		

			$max_discount = 0;
			foreach($discount as $key => $val) {
				$max_discount += $val;
			}

			$rand = mt_rand(1, $max_discount);
//dd($rand) ;
			$cur = 0;
			foreach($discount as $key => $val) {
				$cur += $val;
				if($rand <= $cur){
					$discount = DB::table('discounts')->where('discount',  $key )->first();
					$discount_count= Customers::where('discount',$key)->count();
					if($discount_count<$discount->given_time){
						
						DB::table('customers')->where('id',  $customer->id )->update([
					'discount' => $key
					]);
						return Redirect::back()->with("message"," Congreates I get $key Discount");
					}
					else{
						return Redirect::back()->with("message"," Sorry Better luck next time with another email and phone number");
					}
					
					
					
				}
					
			}
		  //return Redirect::back()->with('message',' Successful !');
    }
}
