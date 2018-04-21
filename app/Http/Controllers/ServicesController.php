<?php
namespace App\Http\Controllers;
use App\User;
use DB;
use Auth;
use App\Serivcespost;
use App\Http\Requests;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function update(Request $request)
    {
        $data[] = [
            'header_title'=> $request->header_title,
            'header-slug' => $request->header_slug,
            'header_content' => $request->header_description,
            'header_images' =>$request->header_images,
            'result_content'=> $request->result_excerpt,
            'result_images' => $request->result_images,
            'images_before_after' => $request->services_images,
            'productive_images'=> json_encode($request->productive_images),
            'productive_excerpt'=> json_encode($request->productive_excerpt),
            'why'=> $request->why,
            'category_id'=> $request->category_id,
            'technical_description'=> $request->technical_description,
            'technical_images'=> $request->technical_images,
            'why_description'=> $request->why_description,
            'why_images'=> $request->why_images,
            'name_feedback'=> $request->name_feedback,
            'description_feedback'=> $request->description_feedback,
            'images_feedback'=> $request->images_feedback,
            'noted'=> $request->noted_description,
        ];
        Serivcespost::insert($data);
    }   
}