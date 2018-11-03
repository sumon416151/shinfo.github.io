<?php

namespace App\Http\Controllers;
use App\Video;
use DB;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function create(){
        return view('admin.video.create');
    }
    public function saveVideo(Request $request){
       // return $request->all();
      //  $this->validate($request,[
          //  'title'=>'required',
          //  'image'=>'mimetypes:video/mp4/,video/avi,video/mpeg,video/quicktime'
            
       // ]);
        $video=$request->file('image');
        $videoName=$video->getClientOriginalName();
        $uploadPath='public/videos/';
        $video->move($uploadPath,$videoName);
        $videoUrl=$uploadPath.$videoName;
        $video=array();
        $video['title']=$request->title;
        $video['description']=$request->description;
        $video['image']=$videoUrl;
        DB::table('videos')->insert($video);
        return redirect('/add-video')->with('message','Video Uploaded Successfully.');
    }
    public function manageVideo(){
        $allVideo= Video::all();
        return view('admin.video.manage',['allVideo'=>$allVideo]);
    }
    public function deleteVideo($id){
        DB::table('videos')->where('id',$id)
               ->delete();
       return redirect('/manage-video');
    }
    
    public function editVideo($id){
        $video= DB::table('videos')
                ->where('id',$id)
                ->first();
        $edit_video= view('admin.video.edit')
                ->with('video',$video);
        return view('admin.master')
        ->with('admin.video.edit',$edit_video);
    }
    
    public function updateVideo(Request $request){
       // $this->validate($request,[
       //     'title'=>'required',
      //      'image'=>'mimetypes:video/mp4/,video/avi,video/mpeg,video/quicktime',
            
     //   ]);
        $videoInfo=Video::where('id',$request->id)->first();
        $video=$request->file('image');
        if($video){
            $oldVideoUrl=$videoInfo->image;
            unlink($oldVideoUrl);
            $imageName=$video->getClientOriginalName();
            $uploadPath='public/videos/';
            $video->move($uploadPath,$imageName);
            $videoUrl=$uploadPath.$imageName;
        }else{
            $videoUrl=$videoInfo->image;
        }
        $video= Video::find($request->id);
        $video->title=$request->title;
        $video->description=$request->description;
        $video->image=$videoUrl;
        $video->save();
       return redirect('/manage-video')->with('message','Video Updated Successfully');
    }
    
    
}
