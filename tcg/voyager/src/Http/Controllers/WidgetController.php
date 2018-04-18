<?php

namespace TCG\Voyager\Http\Controllers;

use Auth;
use DB;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

class WidgetController extends Controller {

    public function index(){
        $customers = DB::table('customers')->get();
        return Voyager::view('voyager::customers.index', ['customers'=>$customers]);     
    }
    public function change($value)
    {
        DB::table('customers')->insert(
            ['email' => $email, 'name' => $name , 'phone' => $phone , 'source'=> $utm_source, 'medium'=>$utm_medium, 'campaign'=>$utm_campaign, 'content' => 'null']
        );
        return 'ok';
    }
    public function getCustomer($value,$key)
    {
        if($value == 'yes') {
            $value = Auth::user()->name;
        }else {
            $value = null;
        }
        DB::table('customers')->where('id',$key)->update(['employer' => $value, 'status'=> "notnull"]);
        return 'ok';
    }
}