<?php
namespace App\Http\Controllers;
use App\User;
use DB;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
class ServicesController extends Controller
{
    public function index($title)
    {
        $post= DB::table('serivcesposts')->get();
        return view('detailService',['news'=>$post]); 
    }   
}