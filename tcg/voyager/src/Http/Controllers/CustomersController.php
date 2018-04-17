<?php

namespace TCG\Voyager\Http\Controllers;

use Auth;
use DB;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

class CustomersController extends Controller
{
    public function index(){
        $customers = DB::table('customers')->get();
        return Voyager::view('voyager::customers.index', ['customers'=>$customers]);     
    }
}