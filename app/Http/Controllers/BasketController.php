<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;


class BasketController extends Controller
{
    public function basket()
    {

        $orderId = session('orderId');
        if(!is_null($orderId)){

            $order = Order::findOrFail($orderId);

        }

        //dd($order);
        return view('basket',compact('order'));
    }

    public function basketConfirm(Request $request)
    {

        $orderId = session('orderId');
        if(is_null($orderId))
        {
            return redirect()->route('index');
        }

        $order = Order::find($orderId);
        $success = $order->saveOrder($request->name,$request->phone);

        if($success){

            session()->flash('success','Ваш заказ принят в обработку');
        }else{

            session->flash('waning','Произошла ошибка');
        }

        return redirect()->route('index');
 

        
    }


    public function basketPlace()
    {
        $orderId = session('orderId');
        if(is_null($orderId))
        {
            return redirect()->route('index');
        }

        $order = Order::find($orderId);

        return view('order',compact('order'));
    }

    public function basketAdd($productId)
    {
        $orderId = session('orderId');
        if(is_null($orderId))
        {

            $order = Order::create();
            session(['orderId'=>$order->id]);
        }else
        {
            $order = Order::find($orderId);

        }

        if($order->products->contains($productId)){

            $pivotRow = $order->products()->where('product_id',$productId)->first()->pivot;
            $pivotRow->count++; 
            $pivotRow->update();
            //dd($pivotRow);

        }else
        {

        $order->products()->attach($productId);

        }

        $product = Product::find($productId);

        session()->flash('success','Добавлен товар'. $product->name);


        

        //dump($order->products);

        
        return redirect()->route('basket')  ;
    }

    public function basketRemove($productId)
    {

        $orderId = session('orderId');
        if(is_null($orderId)){
            return redirect()->route('basket');

        }

        $order = Order::find($orderId);


        if($order->products->contains($productId)){

            $pivotRow = $order->products()->where('product_id',$productId)->first()->pivot;

            /*if ($pivotRow->count<2) {
                // code...
            } else {
                // code...
            }*/
            
            $pivotRow->count++; 
            $pivotRow->update();
            //dd($pivotRow);

        }else
        {

        $order->products()->detach($productId);

        }

        $product = Product::find($productId);

        session()->flash('success','Товар удален'. $product->name);

        
        return redirect()->route('basket');


    }
}
