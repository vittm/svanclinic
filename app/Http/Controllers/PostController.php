<?php
namespace App\Http\Controllers;
use App\User;
use DB;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use App;
class PostController extends Controller
{
    
    public function category()
    {   
        $category = DB::table('categories')->where('slug','=','dich-vu')->first();
        if(App::isLocale('en')){
            $post= DB::table('categories')->where([['parent_id','=',$category->id],['lang_code','=','en']])->get();
        }else {
            $post= DB::table('categories')->where([['parent_id','=',$category->id],['lang_code','=','vi']])->get();
        }
        return view('services',['news'=>$post,'categories'=>$category]);            
    }
    
    public function index(Request $request)
    {
        $find= DB::table('posts')->where('slug','=',$request->title)->first();
        $users= DB::table('users')->where('id','=',$find->author_id)->first();
        $randomPostArr = DB::table('posts')->where([['status','=','PUBLISHED'],App::isLocale('en') ? ['location','=',1] : ['location','!=',1]])->orderBy('id', 'desc')->limit(10)->get();
        $randomPost= $randomPostArr->shuffle();
        $more = DB::table('posts')->where([['category_id','=',$find->category_id],App::isLocale('en') ? ['location','=',1] : ['location','!=',1]])->limit(3)->get();
        $banner = DB::table('banners')->where('detail','=','1')->first();
        return view('posts.detail',['posts'=>$find, 'users'=> $users, 'randomPost' => $randomPost,'more' => $more,'banner'=>$banner]);            
    }
    public function news(){
        $category= DB::table('menuhome_trans')->join('menuhomes','menuhomes.id','=','menuhome_trans.trans_id')->where([['menuhome_trans.slug','=',App::isLocale('en')? 'news': 'tin-tuc'],['menuhome_trans.lang_code','=',App::isLocale('en')? 'en': 'vi']])->first();
        $imgCate =  DB::table('categories')->where('id','=',$category->child)->first();
        $post= DB::table('categories')->where([['parent_id','=',$category->child],['id','!=','44'],App::isLocale('en') ? ['lang_code','=','en'] : ['lang_code','=','vi']])->orderBy('id', 'desc')->get();
        return view('posts.news',['news'=>$post,'categories'=>$category,'imgCate'=>$imgCate ]);            
    }
    public function listNews(Request $request){
        $category = DB::table('categories')->where('slug','=',$request->menu)->first();
        $post= DB::table('posts')->where([['category_id','=',$category->id]])->orderBy('id', 'desc')->paginate(15);
        return view('posts.list',['news'=>$post,'categories'=>$category]);          
    }

    public function indexknow(Request $request)
    {
        $find= DB::table('posts')->where('slug','=',$request->title)->first();
        $users= DB::table('users')->where('id','=',$find->author_id)->first();
        $randomPostArr = DB::table('posts')->where([['status','=','PUBLISHED'],App::isLocale('en') ? ['location','=',1] : ['location','!=',1]])->orderBy('id', 'desc')->orderBy('id', 'desc')->limit(10)->get();
        $randomPost= $randomPostArr->shuffle();
        $more = DB::table('posts')->where([['category_id','=',$find->category_id],App::isLocale('en') ? ['location','=',1] : ['location','=',0]])->limit(3)->get();
        $banner = DB::table('banners')->where('detail','=','1')->first();
        return view('posts.detail',['posts'=>$find, 'users'=> $users, 'randomPost' => $randomPost,'more' => $more,'banner'=>$banner]);            
    }
    public function know(){
        $category= DB::table('menuhome_trans')->join('menuhomes','menuhomes.id','=','menuhome_trans.trans_id')->where([['menuhome_trans.slug','=',App::isLocale('en')? 'secret': 'bi-quyet'],['menuhome_trans.lang_code','=',App::isLocale('en')? 'en': 'vi']])->first();
        $imgCate =  DB::table('categories')->where('id','=',$category->child)->first();
        $post= DB::table('categories')->where([['parent_id','=',$category->child],['id','!=','44'],App::isLocale('en') ? ['lang_code','=','en'] : ['lang_code','=','vi']])->orderBy('id', 'desc')->get();
        return view('posts.news',['news'=>$post,'categories'=>$category,'imgCate'=>$imgCate ]);            
    }
    public function listingknow(Request $request){
        $category = DB::table('categories')->where('slug','=',$request->menu)->first();
        $post= DB::table('posts')->where([['category_id','=',$category->id]])->orderBy('id', 'desc')->paginate(15);
        return view('posts.list',['news'=>$post,'categories'=>$category]);          
    }
    public function search(Request $request){
        $check = true;
        $post = DB::table('posts')->where('title','like', "%".$request->search."%")->paginate(15);
        return Voyager::view('voyager::posts.index', ['news'=>$post,'check' => $check]);
    }
}