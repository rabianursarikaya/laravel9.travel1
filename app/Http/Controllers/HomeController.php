<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\Place;
use App\Models\Review;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    public static function categoryList()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }
    public static function getsetting()
    {
        return Setting::first();
    }



    public function index(){
        $setting=Setting::first();
        $slider=Place::select('id','title','image','slug')->where('status','=','True')->orderByDesc('id')->get();
        $daily=Place::select('id','title','image','slug')->where('status','=','True')->limit(4)->inRandomOrder()->get();
        $last=Place::select('id','title','image','slug')->where('status','=','True')->limit(4)->orderByDesc('id')->get();
        $picked=Place::select('id','title','image','slug')->where('status','=','True')->limit(4)->inRandomOrder()->get();
        $istanbul = Place::select('id','title','image','slug')->where([
            ['city', '=', 'İstanbul'],
            ['status', '=', 'true']])->limit(4)->inRandomOrder()->get();
        $data=[
            'setting'=>$setting,
            'daily'=>$daily,
            'last'=>$last,
            'picked'=>$picked,
            'slider'=>$slider,
            'istanbul'=>$istanbul,
            'page'=>'home'

        ];
        return view('home.index',$data);
    }
    public function aboutus(){
        $setting=Setting::first();
        return view('home.about',['setting'=>$setting,'page'=>'home']);
    }
    public function getplace(Request $request)
    {
        $search=$request->input('search');
        $count=Place::where('title','like','%'.$search.'%')->get()->count();
        if($count==1)
        {
            $data=Place::where('title','like','%'.$search.'%')->first();
            return redirect()->route('place',['id'=>$data->id,'slug'=>$data->slug]);
        }
        else
        {
            return redirect()->route('placelist',['search'=>$search]);
        }


    }
    public function placelist($search){
        $datalist=Place::where('title','like','%'.$search.'%')->get();

        return view('home.search_places',['search'=>$search,'datalist'=>$datalist]);

    }

    public function place($id,$slug){
        $setting=Setting::first();
        $data=Place::find($id);
        $datalist=Image::where('place_id',$id)->get();
        $reviews=Review::where('place_id',$id)->get();
        return view('home.place_detail',['setting'=>$setting,'data'=>$data,'datalist'=>$datalist,'reviews'=>$reviews]);

    }
    public function categoryplaces($id,$slug){
        $datalist=Place::where('category_id',$id)->get();
        $data=Category::find($id);

        return view('home.category_places',['data'=>$data,'datalist'=>$datalist]);

    }

    public function contact(){
        $setting=Setting::first();
        return view('home.contact',['setting'=>$setting,'page'=>'home']);
    }
    public function faq(){
        $setting=Setting::first();
        $datalist=Faq::all()->sortBy('position');
        return view('home.faq',['datalist'=>$datalist,'setting'=>$setting]);
    }
    public function references(){
        $setting=Setting::first();
        return view('home.references',['setting'=>$setting,'page'=>'home']);
    }
    public function sendmessage(Request $request)
    {
        $data = new Message();

        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');


        $data->save();

        return redirect()->route('contact')->with('success','Mesajınız kaydedilmiştir');
    }



    public function sendreview(Request $request,$id)
    {
        $data = new Review;

        $data->user_id = Auth::id();
        $place = Place::find($id);
        $data->place_id=$id;
        $data->subject = $request->input('subject');
        $data->review = $request->input('review');
        $data->IP = $_SERVER['REMOTE_ADDR'];




        $data->save();

        return redirect()->route('place',['id'=>$place->id,'slug'=>$place->slug])->with('success','Mesajınız kaydedilmiştir');
    }
    public function login(){
        return view('admin.login');
    }
    public function logincheck(Request $request)
    {
        if($request->isMethod('post'))
        {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        else
        {
            return view('admin.login');
        }
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }



}
