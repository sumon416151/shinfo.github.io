<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

use DB;

class SliderController extends Controller
{
    public function create(){
        return view('admin.slider.create');
    }
    public function saveSlider(Request $request){
       // return $request->all();
        $slider=$request->file('image');
        $sliderName=$slider->getClientOriginalName();
        $uploadPath='public/slider/';
        $slider->move($uploadPath,$sliderName);
        $sliderUrl=$uploadPath.$sliderName;
        $slider= array();
        $slider['title']=$request->title;
        $slider['description']=$request->description;
        $slider['image']=$sliderUrl;
        DB::table('sliders')->insert($slider);
        return redirect('/add-slider')->with('message','Slider uploaded successfully.');
    }
    
    public function manageSlider(){
        $allSlider= Slider::all();
        return view('admin.slider.manage',['allSlider'=>$allSlider]);
    }
    public function editSlider($id){
        $slider= DB::table('sliders')
                ->where('id',$id)
                ->first();
        $edit_slider= view('admin.slider.edit')
                ->with('slider',$slider);
        return view('admin.master')
        ->with('admin.slider.edit',$edit_slider);
    }
    public function updateSlider(Request $request){
        $sliderImage=Slider::where('id',$request->id)->first();
        $slider=$request->file('image');
        if($slider){
            $oldSliderUrl=$sliderImage->image;
            unlink($oldSliderUrl);
            $imageName=$slider->getClientOriginalName();
            $uploadPath='public/slider/';
            $slider->move($uploadPath,$imageName);
            $sliderUrl=$uploadPath.$imageName;
        }else{
            $sliderUrl=$sliderImage->image;
        }
               $slider= Slider::find($request->id);
               $slider->title=$request->title;
               $slider->description=$request->description;
               $slider->image=$sliderUrl;
               $slider->save();
               return redirect('/manage-slider')->with('message','Slider Info updated Successfully.');
    }
    public function deleteSlider($id){
        DB::table('sliders')->where('id',$id)
               ->delete();
       return redirect('/manage-slider');
    }
}
