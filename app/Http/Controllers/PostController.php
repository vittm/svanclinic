<?php
namespace App\Http\Controllers;
use App\User;
use DB;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
class PostController extends Controller
{
    public function index($title)
    {
        $find= DB::table('posts')->where('slug','=',$title)->first();
        $users= DB::table('users')->where('id','=',$find->author_id)->first();
        $randomPost = DB::table('posts')->where('slug','!=', $find->slug)->inRandomOrder()->get();
        return view('posts.detail',['posts'=>$find, 'users'=> $users, 'randomPost' => $randomPost]);            
    }
    public function category($menu)
    {   
        $category = DB::table('categories')->where('slug','=',$menu)->first();
        $post= DB::table('categories')->where('parent_id','=',$category->id)->get();
        return view('services',['news'=>$post]);            
    }
    public function childcategory($name){
        $category = DB::table('categories')->where('slug','=',$name)->first();
        $post= DB::table('posts')->where('category_id','=',$category->id)->get();
        return view('childCategory',['news'=>$post]);
    }
    
    public function news($name){
        $category = DB::table('categories')->where('slug','=',$name)->first();
        $post= DB::table('categories')->where('parent_id','=',$category->id)->get();
        return view('posts.news',['news'=>$post]);            
    }
    public function listNews($name){
        $category = DB::table('categories')->where('slug','=',$name)->first();
        $post= DB::table('posts')->where('category_id','=',$category->id)->get();
        return view('posts.list',['news'=>$post]);          
    }
}