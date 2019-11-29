<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\News;
use App\Models\CategoryNews;
use App\Models\CompanyActivity;
use App\Models\Partnere;
use App\Models\Post;
use App\Models\Category;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show_about = About::orderBy('numerical_order','ASC')->orderBy('id', 'DESC')->first();
        $show_products = Post::orderBy('numerical_order','ASC')->orderBy('id', 'DESC')->get();
        $show_news = News::orderBy('numerical_order','ASC')->orderBy('id', 'DESC')->get();
        $show_company = CompanyActivity::orderBy('numerical_order','ASC')->orderBy('id', 'DESC')->get();
        $show_barner = Partnere::orderBy('id', 'DESC')->get();
        return view('frontend.page.home',compact('show_about','show_news','show_company','show_barner','show_products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function About()
    {
        $show_about = About::orderBy('numerical_order','ASC')->orderBy('id', 'DESC')->first();
        return view('frontend.page.about',compact('show_about'));
        
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ShowNews()
    {
        $show_news = News::orderBy('numerical_order','ASC')->orderBy('id', 'DESC')->paginate(2);
        $show_cate_news = CategoryNews::orderBy('id', 'DESC')->get();
        return view('frontend.page.news',compact('show_news','show_cate_news'));
        
    }
    public function getAjaxCategoryNews(Request $request,$show_category_news){
        if($show_category_news > 0){
            return News::where('category_news_id', $show_category_news)->get();
        }

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ShowNewsDetail($slug)
    {
        $show_news = News::orderBy('numerical_order','ASC')->orderBy('id', 'DESC')->get();
        $show_detail_new = News::where('slug',$slug)->first();
        return view('frontend.page.news-detail',compact('show_detail_new','show_news'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ShowCompanyActivity()
    {
        $show_company_active = CompanyActivity::orderBy('numerical_order','ASC')->orderBy('id', 'DESC')->paginate(2);
        return view('frontend.page.company-activity',compact('show_company_active'));

    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ShowCompanyActivityDetail($slug){

        $show_company_detail = CompanyActivity::where('slug',$slug)->first();
        $show_company_active = CompanyActivity::orderBy('numerical_order','ASC')->orderBy('id', 'DESC')->paginate(2);
        return view('frontend.page.company-detail',compact('show_company_active','show_company_detail'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ShowTablePrice()
    {
        return view('frontend.page.table-price');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ShowContact()
    {
        return view('frontend.page.contacts');

    }
    
}
