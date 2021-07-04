<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\OrderDetail;
use App\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{
    //
    public function __construct()
    {
        $this->index = 'front.index';
        $this->login = 'front.login';
        $this->productIndex = 'front.product.index';
        $this->step_1 = 'front.cart.step-1';
        $this->step_2 = 'front.cart.step-2';
        $this->step_3 = 'front.cart.step-3';
        $this->step_4 = 'front.cart.step-4';
    }

    public function index()
    {
        return view($this->index);
    }

    public function login()
    {
        return view($this->login);
    }

    public function cart_step_1()
    {
        // 取出購物車所有內容
        // $cartProducts = \Cart::getContent();
        // dd($cartProducts);
        // 根據 Key(ID) 去排序
        $cartProducts = \Cart::getContent()->sortKeys();
        // dd($cartProducts);
        return view($this->step_1, compact('cartProducts'));
    }

    public function update(Request $request)
    {
        // update 成自己想要的 value
        \Cart::update($request->productId, array(
            'quantity' => array(
                'relative' => false,
                // fetch 內 append 的 key => value
                'value' => $request->newQty
            ),
        ));
        return 'success';
    }

    public function delete(Request $request)
    {
        \Cart::remove($request->productId);
        return 'success';
    }

    public function cart_step_2()
    {
        // $cartProducts = \Cart::getContent();
        // dd($cartProducts);
        // $qty = \Cart::getTotalQuantity();
        // $subTotal = \Cart::getSubTotal();
        // // 三元運算子，條件 ? true : false ;
        // $shippingFee = \Cart::getSubTotal() > 1000 ? 0 : 60;
        // $total = \Cart::getTotal();

        return view($this->step_2, $this->cartCalc());
    }

    public function paymentCheck(Request $request)
    {
        // dd($request->all());
        // 資料暫存在 Session ，再導入第三頁
        Session::put('pay', $request->pay);
        Session::put('delivery', $request->delivery);
        return redirect('/cart/step-3');
    }

    public function cart_step_3()
    {
        // 判斷第二頁有勾選才進到第三頁
        if (Session::has('pay') && Session::has('delivery')) {
            return view($this->step_3, $this->cartCalc());
        } else {
            return redirect('/cart/step-2');
        }
    }

    public function shipmentCheck(Request $request)
    {
        // dd($request->all());
        // dd('DP'.time().rand(1,999));
        $cartProducts = \Cart::getContent();
        $order = Order::create([
            'order_no' => 'DP'.time().rand(1,999),
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'county' => $request->county,
            'district' => $request->district,
            'zipcode' => $request->zipcode,
            'address' => $request->address,
            'price' => 99999999,
            'pay_type' => Session::get('pay'),
            'shipping' => Session::get('delivery'),
            'shipping_fee' => 99999999,
            'shipping_status_id' => 0,
            'order_status_id' => 0,
        ]);


        $totalPrice = 0;
        foreach ($cartProducts as $cartProduct) {
            $product = Product::find($cartProduct->id);
            $totalPrice += $product->price * $cartProduct->quantity;

            OrderDetail::create([
                'order_id'=>$order->id,
                'product_id'=>$product->id,
                'qty'=>$cartProduct->quantity,
                'old'=> json_encode($product)
            ]);
        }
        // 總價是放在 create 之後，所以在這裡更新他
        $order->update([
            'price'=>$totalPrice,
            'shipping_fee' => $totalPrice > 1000 ? 0 : 60,
        ]);

        Session::forget('pay');
        Session::forget('delivery');
        \Cart::clear();

        // redirect 直接到下一頁網址，用 with 帶資料，資料在下一頁必須用 Session::get() 取出來
        // 如果用 return view ， F5 就會一直增加同一筆訂單
        return redirect('/cart/step-4')->with('order',$order);
    }

    public function cart_step_4()
    {
        if (Session::has('order')) {
            return view($this->step_4);
        } else {
            return view($this->index);
        }


    }

    public function productIndex(Request $request)
    {

        $categorys = ProductCategory::get();
        if ($request->category_id) {
            $products = Product::where('product_category_id', $request->category_id)->get();
        } else {
            $products = Product::get();
        }
        return view($this->productIndex, compact('products', 'categorys'));
    }

    public function add(Request $request)
    {
        // array format
        // cart import沒作用
        // dd($request->all());
        $product = Product::find($request->productId);
        \Cart::add(array(
            'id' => $product->id, // inique row ID
            'name' => $product->product_name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(
                'photo' => $product->product_img
            )
        ));

        return 'success';
    }

    public function content()
    {
        $cartCollection = \Cart::getContent();
        dd($cartCollection);
    }

    public function clear()
    {
        \Cart::clear();
        return 'success';
    }

    public function cartCalc()
    {
        // 打包成 function 用 $this 呼叫
        $qty = \Cart::getTotalQuantity();
        $subTotal = \Cart::getSubTotal();
        // 三元運算子，條件 ? true : false ;
        $shippingFee = \Cart::getSubTotal() > 1000 ? 0 : 60;
        $total = \Cart::getTotal();
        return compact('qty', 'subTotal', 'shippingFee', 'total');
    }
}
