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
            foreach ($request->name_feedback as $key => $value) {
                $data2 = array(
                    "name" => $request->name_feedback[$key],
                    "description" => $request->description_feedback[$key],
                    "images" => $this->updateImages('images_feedback',$request,'servicesposts',$request->images_feedback[$key],'images') 
                );
                $array_feedback[] = $data2;
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
            'feedback'=> json_encode($array_feedback),
            'noted'=> $request->noted_description,
        ]);
            
        Serivcespost::insert($data);
        return redirect('admin/serivcesposts');
    }
    public function editing(Request $request,$id)
    {
        $db = DB::table('serivcesposts')->where('id','=',$id)->first();
        $db_productive = json_decode($db->productive,JSON_BIGINT_AS_STRING);
        if(!$db_productive){
            foreach ($request->productive_excerpt as $key => $value) {
                $data1 = array(
                    'name' => $this->updateImages('productive_images',$request,'servicesposts',$request->productive_images[$key],'images'),
                    'description' => $request->productive_excerpt[$key]
                );
                $array_productive[] = $data1;
            }
        }
        if($db_productive && count($db_productive) > 0){
            if($request->productive_images){
                foreach ($request->productive_images as $keys => $values) {
                    for ($i=0; $i < $db_productive ; $i++) { 
                        $db_productive[$keys]['name'] = $this->updateImages('productive_images',$request,'servicesposts', $values,'images') ; 
                        break;       
                    }
                }
            }
            if($request->productive_excerpt){
                foreach ($request->productive_excerpt as $keys => $values) {
                    for ($i=0; $i < $db_productive ; $i++) { 
                        $db_productive[$keys]['description'] = $values;
                        break;
                    }
                }
            }
            $array_productive_change = json_encode($db_productive);
        }
        foreach ($request->productive_excerpt as $key => $value) {
            $data1 = array(
                'name' => ($request->hasFile('productive_images') ? $this->updateImages('productive_images',$request,'servicesposts',$request->productive_images[$key],'images') : $request->productive_images_hidden[$key]),
                'description' => ($request->productive_excerpt ? $request->productive_excerpt[$key] : $request->productive_excerpt_hidden[$key] )
            );
            $array_productive[] = $data1;
        }
        $db_feedback = json_decode($db->feedback,JSON_BIGINT_AS_STRING);
        if($db_feedback && count($db_feedback) > 0){
            if($request->images_feedback){
                foreach ($request->images_feedback as $keys => $values) {
                    for ($i=0; $i < $db_feedback ; $i++) { 
                        $db_feedback[$keys]['images'] = $this->updateImages('images_feedback',$request,'servicesposts', $values,'images') ; 
                        break;       
                    }
                }
            }
            if($request->name_feedback){
                foreach ($request->name_feedback as $keys => $values) {
                    for ($i=0; $i < $db_feedback ; $i++) { 
                        $db_feedback[$keys]['name'] = $values;
                        break;
                    }
                }
            }
            if($request->description_feedback){
                foreach ($request->description_feedback as $keys => $values) {
                    for ($i=0; $i < $db_feedback ; $i++) { 
                        $db_feedback[$keys]['description'] = $values;
                        break;
                    }
                }
            }
            $array_feedback_img = json_encode($db_feedback);
        }
        if(!$db_feedback){
            foreach ($request->name_feedback as $key => $value) {
                $data2 = array(
                    "name" => $request->name_feedback[$key],
                    "description" => $request->description_feedback[$key],
                    "images" => $this->updateImages('images_feedback',$request,'servicesposts',$request->images_feedback[$key],'images')
                );
                $array_feedback[] = $data2;
            }
        }
        $data= ([
            'header_title'=> $request->header_title,
            'header_slug' => $request->header_slug,
            'header_content' => $request->header_description,
            'header_images' =>($request->header_images ? $this->updateImages('header_images',$request,'servicesposts',$request->header_images,'images') : $request->header_images_hidden),
            'result_content'=> $request->result_excerpt,
            'result_images' =>($request->result_images ? $this->updateImages('result_images',$request,'servicesposts',$request->result_images,'images') : $request->result_images_hidden),
            'images_before_after' =>($request->services_images ? $this->updateImages('services_images',$request,'servicesposts',$request->services_images,'multipleImages') : $request->services_images_hidden),
            'productive'=> ($db_productive ? $array_productive_change : json_encode($array_productive)),
            'category_id'=> $request->category_id,
            'technical_description'=> $request->technical_description,
            'technical_images'=>($request->technical_images ? $this->updateImages('technical_images',$request,'servicesposts',$request->technical_images,'images') : $request->technical_images_hidden),
            'why_description'=> $request->why_description,
            'why_images'=> ($request->why_images ? $this->updateImages('why_images',$request,'servicesposts',$request->why_images,'images') : $request->why_images_hidden),
            'feedback'=> ($db_feedback ? $array_feedback_img : json_encode($array_feedback)),
            'noted'=> $request->noted_description,
        ]);
        
        DB::table('serivcesposts')->where('id', $id)->update($data);
        
        return redirect('admin/serivcesposts');
    }
    public function childcategory($name){
        $category = DB::table('categories')->where('slug','=',$name)->first();
        $post= DB::table('serivcesposts')->where('category_id','=',$category->id)->get();
        return view('childCategory',['news'=>$post,'categories'=>$category]);
    }
    public function detail(Request $request)
    {
        $find= DB::table('serivcesposts')->where('header_slug','=',$request->title)->first();
        $category = DB::table('categories')->where('id','=', $find->category_id)->first();
        $randomPost = DB::table('serivcesposts')->where('header_slug','!=', $find->header_slug)->inRandomOrder()->get();
        return view('detailService',['posts'=>$find, 'randomPost' => $randomPost,'categories' =>$category]);            
    }
}