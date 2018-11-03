<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;
use DB;
class MyInfoController extends Controller
{
    public function addInfo(){
        return view('admin.info.create');
    }
    public function saveInfo(Request $request){
        //return $request->all();
        $info= $request->file('file');
        $imageName=$info->getClientOriginalName();
        $uploadPath='public/images/';
        $info->move($uploadPath,$imageName);
        $infoUrl=$uploadPath.$imageName;
        $info=array();
        $info['fname']=$request->fname;
        $info['lname']=$request->lname;
        $info['email']=$request->email;
        $info['village']=$request->village;
        $info['pcode']=$request->pcode;
        $info['district']=$request->district;
        $info['birthday']=$request->birthday;
        $info['designation']=$request->designation;
        $info['objective']=$request->objective;
        $info['file']=$infoUrl;
        DB::table('information')->insert($info);
        return redirect('/add-me')->with('message','Image Uploaded Successfully');
        
    }
    public function manageInfo(){
        $allInfo= Information::all();
        return view('admin.info.manage',['allInfo'=>$allInfo]);
    }
    
    public function editInfo($id){
        $infos= DB::table('information')
                ->where('id',$id)
                ->first();
        $edit_info= view('admin.info.edit')
                ->with('infos',$infos);
        return view('admin.master')
        ->with('admin.info.edit',$edit_info);
    }
    public function updateInfo(Request $request){
        $myImage=Information::where('id',$request->id)->first();
        $info=$request->file('file');
        if($info){
            $oldImageUrl=$myImage->file;
            unlink($oldImageUrl);
            $imageName=$info->getClientOriginalName();
            $uploadPath='public/images/';
            $info->move($uploadPath,$imageName);
            $infoUrl=$uploadPath.$imageName;
        }
        else{
            $infoUrl=$myImage->file;
        }
        $info= Information::find($request->id);
       $info->fname=$request->fname;
        $info->lname=$request->lname;
        $info->email=$request->email;
        $info->village=$request->village;
        $info->pcode=$request->pcode;
        $info->district=$request->district;
        $info->birthday=$request->birthday;
        $info->designation=$request->designation;
        $info->objective=$request->objective;
       $info->file=$infoUrl;
       $info->save();
      return redirect('/manage-me');
    }
    public function deleteInfo($id){
        DB::table('information')->where('id',$id)
               ->delete();
       return redirect('/manage-me');
    }
    
   
}
