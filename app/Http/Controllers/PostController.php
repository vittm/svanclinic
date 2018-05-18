<?php
namespace App\Http\Controllers;
use App\User;
use DB;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

class PostController extends Controller
{
    
    public function category()
    {   
        $category = DB::table('categories')->where('slug','=','dich-vu')->first();
        $post= DB::table('categories')->where('parent_id','=',$category->id)->get();
        return view('services',['news'=>$post,'categories'=>$category]);            
    }
    
    public function index(Request $request)
    {
        $find= DB::table('posts')->where('slug','=',$request->title)->first();
        $users= DB::table('users')->where('id','=',$find->author_id)->first();
        $randomPost = DB::table('posts')->where('slug','!=', $find->slug)->inRandomOrder()->limit(3)->get();
        $more = DB::table('posts')->where('category_id','=',$find->category_id)->inRandomOrder()->limit(3)->get();
        return view('posts.detail',['posts'=>$find, 'users'=> $users, 'randomPost' => $randomPost,'more' => $more]);            
    }
    public function news(){
        $category = DB::table('categories')->where('slug','=','tin-tuc')->first();
        $post= DB::table('categories')->where([['parent_id','=',$category->id],['id','!=','44']])->orderBy('id', 'desc')->get();
        return view('posts.news',['news'=>$post,'categories'=>$category]);            
    }
    public function listNews(Request $request){
        $category = DB::table('categories')->where('slug','=',$request->menu)->first();
        $post= DB::table('posts')->where('category_id','=',$category->id)->orderBy('id', 'desc')->paginate(15);
        return view('posts.list',['news'=>$post,'categories'=>$category]);          
    }

    public function indexknow(Request $request)
    {
        $find= DB::table('posts')->where('slug','=',$request->title)->first();
        $users= DB::table('users')->where('id','=',$find->author_id)->first();
        $randomPost = DB::table('posts')->where('slug','!=', $find->slug)->inRandomOrder()->limit(3)->get();
        $more = DB::table('posts')->where('category_id','=',$find->category_id)->inRandomOrder()->limit(3)->get();
        return view('posts.detail',['posts'=>$find, 'users'=> $users, 'randomPost' => $randomPost,'more' => $more]);            
    }
    public function know(){
        $category = DB::table('categories')->where('slug','=','bi-quyet')->first();
        $post= DB::table('categories')->where([['parent_id','=',$category->id],['id','!=','44']])->orderBy('id', 'desc')->get();
        return view('posts.news',['news'=>$post,'categories'=>$category]);            
    }
    public function listingknow(Request $request){
        $category = DB::table('categories')->where('slug','=',$request->menu)->first();
        $post= DB::table('posts')->where('category_id','=',$category->id)->orderBy('id', 'desc')->paginate(15);
        return view('posts.list',['news'=>$post,'categories'=>$category]);          
    }
    public function search(Request $request){
        $check = true;
        $post = DB::table('posts')->where('title','like', "%".$request->search."%")->paginate(15);
        return Voyager::view('voyager::posts.index', ['news'=>$post,'check' => $check]);
    }
}