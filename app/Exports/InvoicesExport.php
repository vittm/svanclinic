<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Customer;
use DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class InvoicesExport implements FromView
{
    
    public function view(): View
    {
        $variable = DB::table('customers')->get();
        $array = [];
        foreach ($variable as $key => $value) {
            if($value->types == "posts"){
                $post = DB::table('posts')->where('id','=',$value->title)->first();   
            }elseif($value->types == "services") {
                $post = DB::table('serivcesposts')->where('id','=',$value->title)->first();
            }elseif($value->types == 'contact') {
                $post = 'Form liên hệ';
            }
            if(isset($post->title)){
                    $title = $post->title;
            } 
            else{
                $title = "Rỗng"; 
            }
            $postArray = ([
                'date'=> $value->created_at,
                'name' => $value->name,
                'mobile' => $value->phone,
                'title' =>  $title,
                'source' => $value->source,
                'medium' => $value->medium,
                'campaign' => $value->campaign
            ]);
            $array[] = $postArray;
        }   
        return view('exports.invoices', [
            'invoices' => collect($array)
        ]);
    }
}