<?php
namespace App\Http\Controllers;
use App\User;
use DB;
use Auth;
use Illuminate\Support\Facades\Input;
use App\Serivcespost;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use TCG\Voyager\Facades\Voyager;

class ServicesController extends Controller
{
    public function updateImages($name,$request,$slug,$row,$type){
        $images=array();
        switch ($type) {
            case 'images':
                if ($request->hasFile($name)) {
                    $path = $slug.'/'.date('FY').'/';
                    $filename = Str::random(20);
                    $fullPath = $path.$filename.'.'.$row->getClientOriginalExtension();
                    $image = file_get_contents($row);
                    Storage::disk(config('voyager.storage.disk'))->put($fullPath, $image, 'public');
                    return $fullPath;
                }else{
                    return $fullPath=" ";
                }
                break;
            case 'multipleImages':
                if ($files=$request->file($name)) {
                    foreach($files as $row){
                        $path = $slug.'/'.date('FY').'/';
                        $filename = Str::random(20);
                        $fullPath = $path.$filename.'.'.$row->getClientOriginalExtension();
                        $image = file_get_contents($row);
                        Storage::disk(config('voyager.storage.disk'))->put($fullPath, $image, 'public');
                        $images[] = array('data' => $fullPath);
                    }
                    return json_encode($images);
                }else{
                    return $fullPath="";
                }
                break;
        }
    }
    public function update(Request $request)
    {
            foreach ($request->productive_excerpt as $key => $value) {
                $data1 = array(
                    'name' => $this->updateImages('productive_images',$request,'servicesposts',$request->productive_images[$key],'images'),
                    'description' => $request->productive_excerpt[$key]
                );
                $array_productive[] = $data1;
            }
            
            foreach ($request->images_feedback as $key => $value) {
                $data2 = array(
                    "name" => $request->name_feedback[$key],
                    "description" => $request->description_feedback[$key],
                    "images" => $this->updateImages('images_feedback',$request,'servicesposts',$request->images_feedback[$key],'images') 
                );
                $array_feedback[] = $data2;
            }
        
        $data[] = [
            'header_title'=> $request->header_title,
            'header_slug' => $request->header_slug,
            'header_content' => $request->header_description,
            'header_images' =>$this->updateImages('header_images',$request,'servicesposts',$request->header_images,'images'),
            'result_content'=> $request->result_excerpt,
            'result_images' =>$this->updateImages('result_images',$request,'servicesposts',$request->result_images,'images'),
            'images_before_after' => $this->updateImages('services_images',$request,'servicesposts',$request->services_images,'multipleImages'),
            'productive'=> json_encode($array_productive),
            'category_id'=> $request->category_id,
            'technical_description'=> $request->technical_description,
            'technical_images'=>$this->updateImages('technical_images',$request,'servicesposts',$request->technical_images,'images'),
            'why_description'=> $request->why_description,
            'why_images'=> $this->updateImages('why_images',$request,'servicesposts',$request->why_images,'images'),
            'feedback'=> json_encode($request->array_feedback),
            'noted'=> $request->noted_description,
        ];

        Serivcespost::insert($data);
        return redirect('admin/serivcesposts');
    }
    public function editing(Request $request,$id)
    {
        foreach ($request->productive_excerpt as $key => $value) {
            $data1 = array(
                'name' => ($request->hasFile('productive_images') ? $this->updateImages('productive_images',$request,'servicesposts',$request->productive_images[$key],'images') : $request->productive_images_hidden[$key]),
                'description' => ($request->productive_excerpt ? $request->productive_excerpt[$key] : $request->productive_excerpt_hidden[$key] )
            );
            $array_productive[] = $data1;
        }

        $db = DB::table('serivcesposts')->where('id','=',$id)->first();
        $db_feedback = json_decode($db->feedback,JSON_BIGINT_AS_STRING);
        foreach ($request->images_feedback as $keys => $values) {
            for ($i=0; $i < $db_feedback ; $i++) { 
                echo dd($db_feedback[$keys]->images);
            }
        }
        
        $data2 = array(
            "name" => ,
            "description" =>,
            "images" =>
        );
        $array_feedback[] = $data2;
        $data= ([
            'header_title'=> $request->header_title,
            'header_slug' => $request->header_slug,
            'header_content' => $request->header_description,
            'header_images' =>($request->header_images ? $this->updateImages('header_images',$request,'servicesposts',$request->header_images,'images') : $request->header_images_hidden),
            'result_content'=> $request->result_excerpt,
            'result_images' =>($request->result_images ? $this->updateImages('result_images',$request,'servicesposts',$request->result_images,'images') : $request->result_images_hidden),
            'images_before_after' =>($request->services_images ? $this->updateImages('services_images',$request,'servicesposts',$request->services_images,'multipleImages') : $request->services_images_hidden),
            'productive'=> json_encode($array_productive),
            'category_id'=> $request->category_id,
            'technical_description'=> $request->technical_description,
            'technical_images'=>($request->technical_images ? $this->updateImages('technical_images',$request,'servicesposts',$request->technical_images,'images') : $request->technical_images_hidden),
            'why_description'=> $request->why_description,
            'why_images'=> ($request->why_images ? $this->updateImages('why_images',$request,'servicesposts',$request->why_images,'images') : $request->why_images_hidden),
            'feedback'=>  json_encode($array_feedback),
            'noted'=> $request->noted_description,
        ]);
        
        DB::table('serivcesposts')->where('id', $id)->update($data);
        return redirect('admin/serivcesposts');
    }
}