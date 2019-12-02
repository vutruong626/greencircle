<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use DB;
class ProductController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ShowProducts()
    {
        $show_Products = Post::orderBy('numerical_order','ASC')->orderBy('id', 'DESC')->paginate(3);
        return view('frontend.page.products.product',compact('show_Products'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ShowProductsDetail()
    {
        return view('frontend.page.products.product-detail');
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ShowCart(Request $request, $idsp, $qty = 0)
    {
        $show_sp = Post::first();
        $data = session()->get('cart');
        $total = 0;
        $ids = [];
        $show_sp = [];
        $cart_detail = [];
        if ($qty > 0) {
            $data[$id] = $qty;
        }
        if (count($data) > 0) {
            foreach ($data as $key => $value) {
                $greencicle = Post::select('id', 'title', 'image', 'price')
                    ->where('id', $key)
                    ->first();
                $total += $value;
                @$cart_detail['weight'] += $value * $greencicle->price;
                $greencicle['qty'] = $value;
                array_push($show_sp, $greencicle);
            }
        } else {
            @$cart_detail['weight'] = 0;
        }
        return view('frontend.page.products.cart',compact('cart_detail', 'show_sp'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function handleCart($act, $idsp, $qty = 0)
    {
        $data = session()->get('cart');
        // dd($data);
        if ($act == 'add') {
            @$data[$idsp]++;
        }
        if ($act == 'remove') {
            unset($data[$idsp]);
        }
        if ($qty > 0) {
            $data[$idsp] = $qty;
        }
        $cart_detail = [];
        foreach ($data as $key => $value) {
            $product = DB::table('posts')
                            ->select('title', 'price', 'image')
                            ->where('id', $key)->first();
            $product->qty = $value;
            $cart_detail[$key] = $product;
            @$cart_detail['total'] += $value * $product->price;
        }
        // dd($cart_detail);
        session()->put('cart', $data);
        session()->put('cart_detail', $cart_detail);
        return redirect()->route('cart_product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function UpdataProduct(Request $request)
    {
        // dd($request->all());
        $carts = session()->get('cart');
        // dd($carts);
        $params = $request->all();
        // dd($params);
        $id_products = $params['id_product'];
        $num_products = $params['number_product'];
        for ($i = 0; $i < count($id_products); $i++) {
            $carts[$id_products[$i]] = $num_products[$i];
        }
        session()->put('cart', $carts);
        return redirect()->back()->with('msg', 'The Message');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ShowCheckout()
    {
        return view('frontend.page.products.checkout');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postShowCheckout(Request $request, $idsp, $qty = 0)
    {
        // dd($request->all());
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ];
        $messages = [
            'name.required' => 'Vui lòng nhập họ tên',
            'address.required' => 'Vui lòng chọn địa chỉ   ',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Vui lòng nhập đúng định dạng email',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $data_dh = new bills();
            $data_dh->name = $request->name;
            $data_dh->phone = $request->phone;
            $data_dh->address = $request->address;
            $data_dh->email = trim($request->email);
            $data_dh->city = $request->city;
            $data_dh->district = $request->district;
            $data_dh->company = $request->company;
            $data_dh->note = $request->note;
        }
        if ($data_dh->save()) {
            $data = session()->get('cart');
            // update chuyen qua mail
            $cart_detail = [];
            $total = 0;
            foreach ($data as $key => $value) {
                $greencirle = Post::select('id', 'title', 'image', 'price')
                    ->where('id', $key)
                    ->first();
                $greencirle['qty'] = $value;
                $total += $value * $greencirle->price; // update chuyen qua mail
                array_push($cart_detail, $greencirle); // update chuyen qua mail
                $ctdonhang = new BillDetail();
                $ctdonhang->qty = $value;
                $ctdonhang->price = $greencirle->price;
                $ctdonhang->post_id = $greencirle->id;
                $ctdonhang->bill_id = $data_dh->id;
                $ctdonhang->save();
            }
            $cart_detail['total'] = $total; // update chuyen qua mail
        }
        
        $area['payment_label'] = trim($request->payment_label);
        Mail::send('frontend.email.email', ['data_dh' => $data_dh, 'cart_detail' => $cart_detail], function ($message) use ($data_dh) {
            $message->from('vutruongdfm@gmail.com', 'greencirle.local');
            $message->subject('Đơn hàng #');
            $message->bcc($data_dh->email);
            $message->to('vutruongdfm@gmail.com');
        });
        $request->session()->forget('cart');
        $request->session()->forget('cart_detail');

        return redirect()->route('success');
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
}