<?php
namespace App\Http\Controllers;
use App\User;
use DB;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
class WidgetController extends Controller
{
    public function index($name,$email,$phone,$utm_source,$utm_medium,$utm_campaign)
    {
        DB::table('customers')->insert(
            ['email' => $email, 'name' => $name , 'phone' => $phone , 'source'=> $utm_source, 'medium'=>$utm_medium, 'campaign'=>$utm_campaign, 'content' => 'null']
        );
        return 'ok';
    }

}