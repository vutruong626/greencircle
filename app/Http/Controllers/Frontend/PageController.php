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
use App\Models\Slider;
use App\Models\CommentNews;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show_slider = Slider::orderBy('number')->get();
        $show_about = About::orderBy('numerical_order','ASC')->orderBy('id', 'DESC')->first();
        $show_product = Post::join('categories','categories.id','=','posts.category_id')
                            ->select('posts.*','categories.name','categories.parent_id','categories.slug as slug_parent')
                            ->orderBy('weight')->get();
        $show_news = News::join('news_categories','news_categories.id','=','news.category_id')
                            ->select('news.*','news_categories.name','news_categories.parent_id','news_categories.slug as slug_parent')
                            ->orderBy('id','DESC')->get();
        $show_company = CompanyActivity::orderBy('numerical_order','ASC')->orderBy('id', 'DESC')->get();
        $show_barner = Partnere::orderBy('id', 'DESC')->get();
        return view('frontend.page.home',compact('show_about','show_news','show_company','show_barner','show_product','show_slider'));
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
   // Show News
    public function ShowNews($slug = null){
        $show_news = [];
        if(empty($slug)){
            $show_category_news = NewsCategory::pluck('id')->toArray();
            if(count($show_category_news) > 0){
                $show_news = News::join('news_categories','news_categories.id','=','news.category_id')
                ->select('news.*','news_categories.name','news_categories.parent_id','news_categories.slug as slug_parent')
                ->whereIn('category_id',$show_category_news)
                ->orderBy('id','DESC')
                ->paginate(12);
            }
        }else{
            $show_category_news = NewsCategory::where('slug',$slug)->first();
            if(!empty($show_category_news)){
                $show_news = News::join('news_categories','news_categories.id','=','news.category_id')
                    ->select('news.*','news_categories.name','news_categories.parent_id','news_categories.slug as slug_parent')
                    ->where('category_id',$show_category_news->id)
                    ->orderBy('id','DESC')
                    ->paginate(12);
            } 
        }
        
        return view('frontend.news.news',compact('show_news','show_category_news'));
    }

    public function SelectCategory($parent_id = null){
        $categories = [];
        if($parent_id > 0 || $parent_id == null){
        $clause = ['parent_id' => $parent_id];
        $categories = NewsCategory::
                where($clause)
                ->get();
        }else{
        $categories = NewsCategory::get();
        }
        return $categories;
    }


    public function ShowNewsDetail($news_categories,$slug){

        $show_news = News::join('news_categories','news_categories.id','=','news.category_id')
                            ->select('news.*','news_categories.name','news_categories.parent_id','news_categories.slug as slug_parent')
                            ->where('news.slug',$slug)
                            ->first();
        $show_news_list = News::join('news_categories','news_categories.id','=','news.category_id')
                            ->select('news.*','news_categories.name','news_categories.parent_id','news_categories.slug as slug_parent')
                            ->orderBy('id','DESC')->get();
        $show_comment_news = CommentNews::where('active','>', 0)->orderBy('id','DESC')->get();
        // dd($show_comment_news);
        return view('frontend.news.news-detail',compact('show_news','show_news_list','show_comment_news'));
    }

    public function postShowNewsComment(Request $request){
        $comment = new CommentNews();
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->body = $request->body;
        $comment->user_id = $request->user_id == 1;
        $comment->news_id = $request->news_id;
        $comment->save();
        return back()->with('success',"Bạn đã gửi bình luận thành công");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // Company Activity
    public function CompanyActivity($slug = null){
        $show_company = [];
        if(empty($slug)){
            $show_category_company = CompanyCategory::pluck('id')->toArray();
            if(count($show_category_company) > 0){
                $show_company = CompanyActivy::join('company_categories','company_categories.id','=','company_activies.company_category_id')
                                                ->select('company_activies.*','company_categories.name','company_categories.slug as slug_parent')
                                                ->whereIn('company_category_id',$show_category_company)
                                                ->orderBy('id','DESC')
                                                ->paginate(8);
            }
        }else{
            $show_category_company = CompanyCategory::where('slug',$slug)->first();
            if(!empty($show_category_company)){
                $show_company = CompanyActivy::join('company_categories','company_categories.id','=','company_activies.company_category_id')
                                                ->select('company_activies.*','company_categories.name','company_categories.slug as slug_parent')
                                                ->where('company_category_id',$show_category_company->id)
                                                ->orderBy('id','DESC')
                                                ->paginate(8);
            }
        }
        return view('frontend.company-activity.company-activity',compact('show_company','show_category_company'));
    }

    public function SelectCategoryCompany($parent_id = null){
        $categories = [];
        if($parent_id > 0 || $parent_id == null){
          $clause = ['parent_id' => $parent_id];
          $categories = CompanyCategory::
                where($clause)
                ->get();
        }else{
          $categories = CompanyCategory::get();
        }
        return $categories;
    }

    public function CompanyActivityDetail($company_categories,$slug){
        $show_company = CompanyActivy::join('company_categories','company_categories.id','=','company_activies.company_category_id')
                            ->select('company_activies.*','company_categories.name','company_categories.slug as slug_parent')
                            ->where('company_activies.slug',$slug)
                            ->first();
        $show_cate_company = CompanyActivy::join('company_categories','company_categories.id','=','company_activies.company_category_id')
                            ->select('company_activies.*','company_categories.name','company_categories.slug as slug_parent')
                            ->orderBy('id','DESC')
                            ->skip(0)->take(8)
                            ->get();
        return view('frontend.company-activity.company-detail',compact('show_company','show_cate_company'));                    
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
    // Show Contact
    public function Contact(){
        $show_contact = Contact::orderBy('id','DESC')->first();
        return view('frontend.page.contact',compact('show_contact'));
    }

    public function postContact(Request $request){
        $post_contact = new MailContact();
        $post_contact->name = $request->name;
        $post_contact->phone = $request->phone;
        $post_contact->email = $request->email;
        $post_contact->message = $request->message;
        $post_contact->save();
        Mail::send(
            'frontend.page.mail-contact',
            [
                'post_contact' => $post_contact,
            ],
            function ($message) use ($post_contact) {
                $message->from('websitedfm@gmail.com', 'naturecircle.local');
                $message->to('websitedfm@gmail.com');
            }
        );
        return back()->with('submit_mail',"Bạn đã gửi mail thành công");
    }
    
}
