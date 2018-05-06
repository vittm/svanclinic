<?php
namespace App\Http\Controllers;
use App\User;
use DB;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index()
    {
        $find= DB::table('slidehome1s')->get();
        $whyhomes= DB::table('whyhomes')->get();
        $videos= DB::table('videos')->limit('3')->get();
        $servicesspecialists= DB::table('servicesspecialists')->join('serivcesposts','serivcesposts.id','=','servicesspecialists.link')->select('servicesspecialists.*','serivcesposts.header_slug')->get();
        $partners= DB::table('partners')->get();
        $feedbacks= DB::table('userfeadbacks')->get();
        $banner = DB::table('banners')->inRandomOrder()->first();
        $news= DB::table('news')->join('posts','posts.id','=','news.link')->select('news.*','posts.slug')->limit('3')->get();
        return view('welcome',['slides'=>$find,'whyhomes'=>$whyhomes,'videos'=>$videos,'servicesspecialists'=>$servicesspecialists,'partners'=>$partners,'feedbacks'=>$feedbacks, 'news'=>$news, 'banners' => $banner]);            
    }
    public function info()
    {
        $info= DB::table('infos')->first();
        return view('contact',['info'=>$info]);            
    }
}