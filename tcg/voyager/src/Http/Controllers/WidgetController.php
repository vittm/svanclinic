<?php

namespace TCG\Voyager\Http\Controllers;

use Auth;
use DB;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use Carbon;
class WidgetController extends Controller {

    public function index(){
        echo dd(Carbon\Carbon::now('Asia/Ho_Chi_Minh')->subDay()->format('d/m/y'));
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