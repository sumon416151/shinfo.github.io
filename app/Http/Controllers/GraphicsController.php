<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Graphics;
use DB;

class GraphicsController extends Controller
{
    public function addPhoto(){
        return view('admin.graphics.photo');
    }
    
    public function store(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'image'=>'nullable|image',
            
        ]);
       // dd($request->all());
        //$image= new Graphics;
       // $image->title=$request->title;
       // $image->description=$request->description;
       
        //if($request->hasFile('image')){
         //   $image->image=$request->image->store('public/graphics');
       // }
        //return $request->all();
       //$image->save();
       // return redirect('/add-photo')->with('message','Image Uploaded Successfully.');
        $photo=$request->file('image');
        $photoname=$photo->getClientOriginalName();
        $uploadPath='public/graphics/';
        $photo->move($uploadPath, $photoname);
        $photoUrl=$uploadPath.$photoname;
        $data=array();
        $data['title']=$request->title;
        $data['description']=$request->description;
        $data['image']=$photoUrl;
        DB::table('graphics')->insert($data);
        return redirect('/add-photo')->with('message','Image Uploaded Successfully.');
        }
    
    public function manageImage(){
        $allImage= Graphics::all();
        return view('admin.graphics.manage',['allImage'=>$allImage]);
    }
    
   Public function editImage($id){
      // return view('admin.graphics.edit');
       //$imageById= Graphics::where('id',$id)->first();
       //return view('admin.graphics.edit',['imageById',$imageById]);
       $photo= DB::table('graphics')
                ->where('id',$id)
                ->first();
        $edit_photo= view('admin.graphics.edit')
                ->with('photo',$photo);
        return view('admin.master')
        ->with('admin.graphics.edit',$edit_photo);
      
   }
   public function updateImage(Request $request){
       //dd($request->all());
      
       $photoById=Graphics::where('id',$request->id)->first();
       $photo=$request->file('image');
       if($photo){
           $oldPhotoUrl=$photoById->image;
           unlink($oldPhotoUrl);
           $photoName=$photo->getClientOriginalName();
           $uploadPath='public/graphics/';
           $photo->move($uploadPath, $photoName);
           $photoUrl=$uploadPath.$photoName;
       }else{
           $photoUrl=$photoById->image;
          // $photoUrl=$singlePhoto->image;
       }
       $photo= Graphics::find($request->id);
       $photo->title=$request->title;
       $photo->description=$request->description;
       $photo->image=$photoUrl;
       $photo->save();
      return redirect('/manage-graphics')->with('message','Image Updated Successfully.');
   }
   
   public function deleteImage($id){
       DB::table('graphics')->where('id',$id)
               ->delete();
       return redirect('/manage-graphics')->with('message','Image Deleted Successfully.');
   }
    
}
