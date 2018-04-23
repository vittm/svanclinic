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
                        $images[] = $fullPath;
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
        $array_productive = array();
        if(null !== $request->productive_excerp){
            $lenght = count($request->productive_excerp);
            for($idx = 0; $idx <  $lenght; $idx++){
                $data1 = array(
                    'name' => $this->updateImages('productive_images',$request,'servicesposts',$request->productive_images[$idx],'images'),
                    'description' => $request->productive_excerp[$idx]
                );
                $array_productive[] = $data1;
            }
        }
        if(null !== $request->images_feedback){
            $lenght = count($request->images_feedback);
            for($idx = 0; $idx < $lenght ; $idx++){
                $data2 = array(
                    "name" => $request->name_feedback[$idx],
                    "description" => $request->description_feedback[$idx],
                    "images" => $this->updateImages('images_feedback',$request,'servicesposts',$request->images_feedback[$idx],'images') 
                );
                $array_feedback[] = $data2;
            }
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
        foreach($request->productive_excerpt as $idx=>$name){
            
            $array_productive = array([
                "images" => $this->updateImages('productive_images',$request,'servicesposts',$request->productive_images[$idx],'images'),
                "excerpt" => $request->productive_excerpt[$idx],   
            ]);
        };
        foreach($request->name_feedback as $idx=>$name){
            $array_feedback = array([
                "name" => $request->name_feedback[$idx],
                "description" => $request->description_feedback[$idx],
                "images" => $this->updateImages('images_feedback',$request,'servicesposts',$request->images_feedback[$idx],'images') 
            ]);
        }
        $data= ([
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
        ]);
        
        DB::table('serivcesposts')->where('id', $request->id)->update($data);
        return redirect('admin/serivcesposts');
    }
}