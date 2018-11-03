<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;
use App\Slider;
use App\graphics;
use App\Video;
use App\Message;
use DB;

class WelcomeController extends Controller
{
    public function index(){
        $allInfo=Information::all();
        $allSlider=Slider::all();
        return view('frontEnd.home.homeContent',['allInfo'=>$allInfo],['allSlider'=>$allSlider]);
    }
    
    public function about(){
        return view('frontEnd.pages.about');
    }
    
    public function service(){
        return view('frontEnd.pages.service');
    }
    
    
    public function project(){
        $allImage=Graphics::all();
        return view('frontEnd.pages.graphics',['allImage'=>$allImage]);
    }
    
    public function presentation(){
        $allVideo= Video::all();
        return view('frontEnd.pages.presentation',['allVideo'=>$allVideo]);
    }
    
    public function contact(){
        return view('frontEnd.pages.contact');
    }
    
    public function sendMessage(Request $request){
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['description']=$request->description;
        DB::table('messages')->insert($data);
        return redirect('/contact')->with('message','Thanks for your mail, We will replay you as soon as possible' );
        
    }
    
    public function manageMessage(){
        $allMessage=Message::all();
        return view('admin.userMessage.manage',['allMessage'=>$allMessage]);
        
    }
    
    public function deleteMessage($id){
        $message=Message::where('id',$id)
                ->delete();
        return redirect('/manage-message');
        
    }
}
