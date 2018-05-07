<?php

namespace TCG\Voyager\Http\Controllers;

use Auth;
use DB;
use Carbon;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

class WidgetController extends Controller {

    public function index(){
        $customers = DB::table('customers')->get();
        return Voyager::view('voyager::customers.index', ['customers'=>$customers]);     
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