<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\Bill;
use App\Models\BillDetail;
use Validator;
use Mail;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ShowProduct($slug = null)
    {
        $show_product = [];
        if(empty($slug)){
            $show_category_product = Category::pluck('id')->toArray();
            if(count($show_category_product) > 0){
                $show_product = Post::join('categories','categories.id','=','posts.category_id')
                                        ->select('posts.*','categories.name','categories.parent_id','categories.slug as slug_parent')
                                        ->whereIn('category_id',$show_category_product)
                                        ->paginate(12);
            }
        }else{
            $show_category_product = Category::where('slug',$slug)->first();
            if(!empty($show_category_product)){
                $show_product = Post::join('categories','categories.id','=','posts.category_id')
                                    ->select('posts.*','categories.name','categories.parent_id','categories.slug as slug_parent')
                                    ->where('category_id',$show_category_product->id)
                                    ->paginate(12);
            } 
        }
        return view('frontend.shop.product',compact('show_product','show_category_product'));
    }
    public function SelectCategoryProduct($parent_id = null){
        $categories = [];
        if($parent_id > 0 || $parent_id == null){
          $clause = ['parent_id' => $parent_id];
          $categories = Category::
                where($clause)
                ->get();
        }else{
          $categories = Category::get();
        }
        return $categories;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ShowProductDetail($slug_parent,$slug)
    {
        $show_product_detail = Post::join('categories','categories.id','=','posts.category_id')
                                    ->select('posts.*','categories.name','categories.parent_id','categories.order','categories.slug as slug_parent')
                                    ->where('posts.slug',$slug)->first();
        $optical_products = Post::join('categories','categories.id','=','posts.category_id')
                                ->select('posts.*','categories.name','categories.parent_id','categories.slug as slug_parent')
                                ->get();
        return view('frontend.shop.product-detail',compact('show_product_detail','optical_products'));
    }

    public function postDetailProduct($action = null, Request $request){
        $session_products = session()->get('info_products') ?? null;
        $info_products = [
            "id" => (int)$request->product ?? 0,
            "quantity" => (int)$request->quantity ?? 0,
        ];
        $tmp_session = [];
        if(count($session_products) > 0 && $session_products != null){
            foreach ($session_products as $key => $value) {
                if((int)$info_products['id'] == $value['id']){
                    $info_products['quantity'] +=  $value['quantity'];
                    
                }else{
                    $tmp_session[] = $value;
                }
            }
            $tmp_session[] = $info_products;
        }
        else  $tmp_session[] = $info_products;

        if(count($tmp_session) > 0)  session()->put('info_products', $tmp_session);
        return redirect()->route('show_cart');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ShowCart(Request $request)
    {
        $info_products  = session()->get('info_products') ?? null;
        //handle gio hang
        $cart_detail = [];
        $cart_total = 0;
        if(count($info_products) > 0 && $info_products != null){
            foreach ($info_products as $k => $val) {
                $product = Post::select('id','title', 'price','image')
                            ->where('id', $val['id'])->first();
                if(empty($product)) continue;
                $product->quantity = $val['quantity'];
                $cart_detail[] = $product;
                $cart_total += $val['quantity'] * $product->price;
            }
        }
        return view('frontend.shop.product-cart',compact('cart_detail','cart_total'));
    }


    public function deleteCart($id){

        $info_products  = session()->get('info_products') ?? null;
        $tmp_session = [];

        if($info_products != null && count($info_products) > 0){
            foreach ($info_products as $key => $value) {
                if($value['id'] != (int)$id){
                    $tmp_session[] = $value;
                }
            }
        }

        if(count($tmp_session) > 0)  session()->put('info_products', $tmp_session);
        if(count($tmp_session) == 0)  session()->forget('info_products');
        return redirect()->route('show_cart');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function addCart($product_id = 0){

        $session_products = session()->get('info_products') ?? null;
        $tmp_arr = array(
            'id' => (int)$product_id,
            'quantity' => 1,
        );
        $tmp_session = [];
        if(count($session_products) > 0 && $session_products != null){
            foreach ($session_products as $key => $value) {
                if((int)$product_id == (int)$value['id']){
                    $tmp_arr['quantity'] += 1;
                }else{
                    $tmp_session[] = $value;
                }
            }
            $tmp_session[] = $tmp_arr;
        }else{
            $tmp_session[] = $tmp_arr;
        }
        //handle gio hang
        $cart_detail = [];
        $cart_total = 0;
        if(count($tmp_session) > 0){

            foreach ($tmp_session as $k => $val) {
                $product = Post::select('title','price','image')
                            ->where('id', $val['id'])->first();
                $product->quantity = $val['quantity'];
                $cart_detail[] = $product;
                $cart_total += $val['quantity'] * $product->price;
            }
        }
        session()->put('info_products', $tmp_session);
        return redirect()->route('show_cart');
    }

    public function updateCart(Request $request) {
        $session_products  = session()->get('info_products') ?? null;
        
        $id_products = $request->id_product ?? [];
        $count_products = $request->count_products ?? [];

        //handle info product
        $cart_detail = [];
        $tmp_cart_products = [];
        $cart_total = 0;
        // $count_products = count($id_products);
        for ($i=0; $i < count($id_products); $i++) {

            //hadle data seve session
            $arr_tmp = array(
                'id' => $id_products[$i],
                'quantity' => $count_products[$i],
            );
            $tmp_cart_products[] = $arr_tmp;

            //handle data show cart
            $product = Post::select('id','title', 'price','image')
                        ->where('id', $id_products[$i])->first();
            if(empty($product)) continue;

            $product->quantity = $count_products[$i];
            $cart_detail[] = $product;
            $cart_total += $count_products[$i] * $product->price;
        }

        if(count($tmp_cart_products) > 0)  session()->put('info_products', $tmp_cart_products);

        return redirect()->back()->with('msg', 'The Message');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showInfoClient(Request $request)
    {
        $info_products  = session()->get('info_products') ?? null;
        //handle gio hang
        $cart_detail = [];
        $cart_total = 0;
        if(count($info_products) > 0 && $info_products != null){
            foreach ($info_products as $k => $val) {
                $product = Post::select('id','title', 'price','image')
                            ->where('id', $val['id'])->first();
                if(empty($product)) continue;

                $product->quantity = $val['quantity'];

                $cart_detail[] = $product;
                $cart_total += $val['quantity'] * $product->price;
            }
        }
        return view('frontend.shop.info-client', compact('info_products','cart_total','cart_detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postInfoClient(Request $request){
        //validate params request
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'district' => 'required',
            'city' => 'required',
        ];
        $messages = [
            'name.required' => 'Vui lòng nhập họ tên',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Vui lòng nhập đúng định dạng email',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'address.required' => 'Vui lòng chọn địa chỉ   ',
            'district.required' => 'Vui lòng chọn Quận/huyện',
            'city.required' => 'Vui lòng chọn Tỉnh/TP',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {

            $bill_find = Bill::orderByRaw('cast(code_bill AS SIGNED) DESC')->first();
            $code_bill = ($bill_find) ? ((int)($bill_find->code_bill) + 1).'' : 1000;

            //hadle save bill
            $bill = new Bill();
            $bill->name = $request->name;
            $bill->email = $request->email;
            $bill->phone = $request->phone;
            $bill->address = trim($request->address);
            $bill->district = $request->district;
            $bill->city = $request->city;
            $bill->note = $request->note ?? null;
            $bill->code_bill = $code_bill;
            $info_products  = session()->get('info_products') ?? null;

            if ($bill->save()) {

                $cart_detail = [];
                $cart_total = 0;
                foreach ($info_products as $key => $value) {

                    $detail_bill = Post::select('id','title', 'price','image')
                                ->where('id', $value['id'])->first();
                    if(empty($detail_bill)) continue;

                    $detail_bill->quantity = $value['quantity'];

                    $cart_detail[] = $detail_bill;
                    $cart_total += $detail_bill->quantity * $detail_bill->price;

                    $bill_detail = new BillDetail();
                    $bill_detail->qty = $detail_bill->quantity;
                    $bill_detail->price = $detail_bill->price;
                    $bill_detail->posts_id = $detail_bill->id;
                    $bill_detail->bill_id = $bill->id;
                    $bill_detail->save();
                }
            }

            $data_send['bill'] = $bill;
            Mail::send(
                'frontend.shop.email',
                [
                    'bill' => $bill,
                    'cart_detail' => $cart_detail,
                    'cart_total' => $cart_total,
                ],

                function ($message) use ($data_send) {
                    $message->from('websitedfm@gmail.com', 'naturecircle.local');
                    $message->subject('Đơn hàng: '.$data_send['bill']->code_bill);
                    $message->to($data_send['bill']->email);
                    $message->bcc('truongdfm@gmail.com');
                }
            );
            $request->session()->forget('info_products');
            return redirect()->route('success');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Success()
    {
        return view('frontend.shop.success');
    }
}
