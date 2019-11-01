<?php
namespace App\Http\Controllers;
use App\User;
use DB;
use App;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index(Request $request)
    {
       
        if(App::isLocale('en')){
            $servicesspecialists= DB::table('servicesspecialists')->join('serivcesposts','serivcesposts.id','=','servicesspecialists.link')->where('serivcesposts.location','=',1)->select('servicesspecialists.*','serivcesposts.header_slug')->get();
            $feedbacks= DB::table('userfeadbacks')->where('location','=','en')->get();
            $whyhomes= DB::table('whyhomes')->where('lang_code','=','en')->get();
            $news= DB::table('news')->join('posts','posts.id','=','news.link')->where('posts.location','=','1')->limit('3')->get();
            $videos= DB::table('videos')->where('lang_code','=','en')->orderBy('id', 'desc')->limit('3')->get();
            $banner = DB::table('banners')->where([['home','=','1'],['lang_code','=','en']])->inRandomOrder()->limit(1)->get();
             $find= DB::table('slidehome1s')->where('lang_code','=','en')->orderBy('id', 'desc')->get();
        }else {
            $servicesspecialists= DB::table('servicesspecialists')->join('serivcesposts','serivcesposts.id','=','servicesspecialists.link')->where('serivcesposts.location','!=',1)->select('servicesspecialists.*','serivcesposts.header_slug')->get();
            $feedbacks= DB::table('userfeadbacks')->where('location','=',null)->get();
            $whyhomes= DB::table('whyhomes')->where('lang_code','=',null)->get();
            $news= DB::table('news')->join('posts','posts.id','=','news.link')->where('posts.location','!=',1)->limit('3')->get();
            $videos= DB::table('videos')->where('lang_code','=',null)->orderBy('id', 'desc')->limit('3')->get();
            $banner = DB::table('banners')->where([['home','=','1'],['lang_code','=','vi']])->inRandomOrder()->limit(1)->get();
             $find= DB::table('slidehome1s')->where('lang_code','=','vi')->orderBy('id', 'desc')->get();
        }
        
        $partners= DB::table('partners')->get();
        
        return view('welcome',['slides'=>$find,'whyhomes'=>$whyhomes,'videos'=>$videos,'servicesspecialists'=>$servicesspecialists,'partners'=>$partners,'feedbacks'=>$feedbacks, 'news'=>$news, 'banners' => $banner]);            
    }
    public function info()
    {
        $info= DB::table('infos')->first();
        return view('contact',['info'=>$info]);            
    }
}