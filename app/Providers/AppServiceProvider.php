<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Schema;
use App\Models\Post;
use App\Models\Contact;
use Illuminate\Support\Facades\Session;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('*', function ($view) 
        {
            $info_products = \Session::get('info_products') ?? [];
            //this code will be executed when the view is composed, so session will be available
            
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
            $data['cart_detail'] = $cart_detail;
            $data['cart_total'] = $cart_total;

            $view->with('info_products' ,$data ); 
        });
        $hosts = 'http://'.$_SERVER['SERVER_NAME'].'/public';
        $show_contact = Contact::orderBy('id','DESC')->first();
        $data = [
            'hosts'=> $hosts,
            'show_contact'=> $show_contact,
        ];
        View::share('common_data', $data);
    }
}
