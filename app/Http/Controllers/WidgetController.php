<?php
namespace App\Http\Controllers;
use App\User;
use DB;
use Auth;
use Excel;
use Carbon;
use App\Countbutton;
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
            'source'=> $request->utm_source, 'medium'=>$request->utm_medium, 'campaign'=>$request->utm_campaign,
            'created_at' => Carbon\Carbon::now('Asia/Ho_Chi_Minh')->format('d/m/Y H:i:s')]
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
        $date = $request->search;
        $date = str_replace('/', '-', $date);
        $convert= date('Y-m-d', strtotime($date));
        $customers   = DB::table('customers')->where('updated_at', 'like',  "%".$convert."%")->paginate(15);
        return Voyager::view('voyager::customers.index', ['customers'=>$customers,'check' => $check]);     
    }
	public function downloadExcel()
	{
		return Excel::download(new \App\Exports\InvoicesExport, 'khach-hang.xlsx');
	}
	public function count(Request $request)
	{
	    $check= DB::table('countbuttons')->where('post_id',$request->id)->count();
	    if($check > 0){
	        $object= DB::table('countbuttons')->where('post_id',$request->id)->first();
	        $data= ([
                'count'=> $object->count + 1,
            ]);
            DB::table('countbuttons')->where('post_id', $request->id)->update($data);
            return redirect('admin/countbuttons');
	    }else {
	        $data= ([
	            'name' => $request->name_btn,
	            'post_id'=> $request->id,
                'count'=> 1,
            ]);
            Countbutton::insert($data);
            return redirect('admin/countbuttons');
	    }
	}
}