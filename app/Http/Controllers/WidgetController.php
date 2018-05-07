<?php
namespace App\Http\Controllers;
use App\User;
use DB;
use Auth;
use Excel;
use Carbon;
use App\Http\Requests;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use DateTimeZone;

class WidgetController extends Controller
{
    public function __construct(\Maatwebsite\Excel\Excel $excel)
    {
        $this->excel = $excel;
    }
    public function index(Request $request)
    {
        DB::table('customers')->insert(
            ['title' => $request->title, 'name' => $request->name ,'types' =>$request->typepost, 'phone' => $request->phone , 
            'source'=> $request->utm_source, 'medium'=>$request->utm_medium, 'campaign'=>$request->utm_campaign,
            'created_at' => Carbon\Carbon::now('Asia/Ho_Chi_Minh')->format('d/m/Y')]
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
        $customers = DB::table('customers')->where('id','!=',null)->orWhere('name','like', "%".$request->search."%")->get();
        return Voyager::view('voyager::customers.index', ['customers'=>$customers,'check' => $check]);     
    }
	public function downloadExcel()
	{
		return Excel::download(new \App\Exports\InvoicesExport, 'khach-hang.xlsx');
	}
}