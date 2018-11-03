<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Office;
use DB;

class OfficeController extends Controller
{
    public function addPhoto(){
        return view('admin.office.create');
    }
    public function savePhoto(Request $request){
        //return $request->all();
        $office= $request->file('image');
        $imageName=$office->getClientOriginalName();
        $uploadPath='public/office/';
        $office->move($uploadPath,$imageName);
        $officeUrl=$uploadPath.$imageName;
        $office=array();
        $office['title']=$request->title;
        $office['description']=$request->description;
        $office['image']=$officeUrl;
        DB::table('offices')->insert($office);
        return redirect('/add-office')->with('message','Image Uploaded Successfully');
        
    }
    
    public function managePhoto(){
        $allImage= Office::all();
        return view('admin.office.manage',['allImage'=>$allImage]);
    }
    public function editPhoto($id){
        $office= DB::table('offices')
                ->where('id',$id)
                ->first();
        $edit_photo= view('admin.office.edit')
                ->with('office',$office);
        return view('admin.master')
        ->with('admin.office.edit',$edit_photo);
    }
    public function updatePhoto(Request $request){
        $officeImage=Office::where('id',$request->id)->first();
        $office=$request->file('image');
        if($office){
            $oldOfficeUrl=$officeImage->image;
            unlink($officeImage->image);
            $imageName=$office->getClientOriginalName();
            $uploadPath='public/office/';
            $office->move($uploadPath,$imageName);
            $officeUrl=$uploadPath.$imageName;
        }else{
            $officeUrl=$officeImage->image;
        }
        $photo= Office::find($request->id);
       $photo->title=$request->title;
       $photo->description=$request->description;
       $photo->image=$officeUrl;
       $photo->save();
      return redirect('/manage-office');
    }
    
    public function deletePhoto($id){
        DB::table('offices')->where('id',$id)
               ->delete();
       return redirect('/manage-office');
    }
}
