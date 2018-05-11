<?php

namespace TCG\Voyager\Http\Controllers;

use Auth;
use DB;
use Carbon;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

class PostController extends Controller {

    public function indexAdmin(){
        $post= DB::table('posts')->orderBy('id', 'desc')->paginate(15);
        return view('voyager::posts.index',['news'=>$post]);          
    }
    public function delete($id){
        DB::table('posts')->where('id', '=', $id)->delete();
        return redirect('/admin/posts');
    }
}