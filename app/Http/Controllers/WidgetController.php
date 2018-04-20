<?php
namespace App\Http\Controllers;
use App\User;
use DB;
use Auth;
use Carbon;
use App\Http\Requests;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use DateTimeZone;

class WidgetController extends Controller
{
    public function index($name,$email,$phone,$utm_source,$utm_medium,$utm_campaign)
    {
        DB::table('customers')->insert(
            ['email' => $email, 'name' => $name , 'phone' => $phone , 
            'source'=> $utm_source, 'medium'=>$utm_medium, 'campaign'=>$utm_campaign,
            'created_at' => Carbon\Carbon::now('Asia/Ho_Chi_Minh')->subDay()->format('d/m/y')]
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
        DB::table('customers')->where('id',$key)->update(['employer' => $value, 'status'=> "NULL"]);
        return 'ok';
    }
    public function search(Request $request)
    {
        $check = true;
        $customers = DB::table('customers')->where([['employer','like' ,"%".$request->search."%"]])->get();
        if(count($customers) == '0'){
            $customers = DB::table('customers')->whereDate('created_at','like', "%".$request->search."%")->get();
        }
        return Voyager::view('voyager::customers.index', ['customers'=>$customers,'check' => $check]);     
    }
}