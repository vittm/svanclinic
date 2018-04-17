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
        $videos= DB::table('videos')->get();
        $servicesspecialists= DB::table('servicesspecialists')->join('posts','posts.id','=','servicesspecialists.link')->select('servicesspecialists.*','posts.slug')->get();
        $partners= DB::table('partners')->get();
        $feedbacks= DB::table('feedbacks')->get();
        $news= DB::table('news')->join('posts','posts.id','=','news.link')->select('news.*','posts.slug')->get();
        return view('welcome',['slides'=>$find,'whyhomes'=>$whyhomes,'videos'=>$videos,'servicesspecialists'=>$servicesspecialists,'partners'=>$partners,'feedbacks'=>$feedbacks, 'news'=>$news]);            
    }

}