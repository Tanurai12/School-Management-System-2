<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Subscriber;

use App\Models\Slider;
use App\Models\Getstumsg;
use App\Models\Data;
use App\Models\Product;
use App\Models\School;

use App\Models\Studentdata;
use App\Models\Testimonial;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $req)
    {
        $datas = Studentdata::get();
        $products = Product::all();
        $subs = Subscriber::all();
        $msgs = Getstumsg::all();
        $testis = Testimonial::all();

        $search = $req['search']  ?? "";
        if ($search != "") {

            $queries = Getstumsg::where('name', 'LIKE', "%$search%")->get();
        } else {
            $queries = Getstumsg::get();
        }

        $query = compact('queries', 'search');
 
        return view('home', compact('datas','products','subs','msgs','testis'))->with('query');
    }
    public function addNav()
    {
        return view('addNav');
    }
    public function formNav(Request $req)
    {
        $data = new Menu();
        $data->label=$req->label;
        $data->url=$req->url;
        $data->parent_id=$req->parent_id;

        $data->save();

    }
    

    public function game()
    {
        return view('TicTacToe');
    }
    public function host()
    {
        return view('host');
    }
   
    public function form()
    {
        return view('form1');
    }
    public function stutab()
    {

        $datas = Studentdata::get();
        return view('stutab', compact('datas'));
    }
    public function register(Request $req)
    {

        $data = new Studentdata();
        $req->validate([
            'name' => 'required ',
            'email' => 'required |email | unique:studentdatas',
            'phone' => 'required |max:10 |unique:studentdatas',
            'class' => 'required',
            'address' => 'required',
        ]);

        $data->name = $req->name;
        $data->email = $req->email;
        $data->phone = $req->phone;
        $data->class = $req->class;
        $data->address = $req->address;
        $data->save();

        if ($data) {
            return redirect()->back()->with('success_msg', 'Student Added Successfully');
        } else {
            return redirect()->back()->with('failed_msg', 'Student Added Successfully');
        }
    }

    public function delete($id)
    {

        $data = Studentdata::find($id);
        if ($data) {
            $data->delete();
            return redirect()->back()->with('del_msg', 'Record Deleted Successfully !');
        }
    }

    public function edit($id)
    {
        $data = Studentdata::find($id);
        return view('edit', compact('data'));
    }
    public function update(Request $req, $id)
    {
        $data = Studentdata::find($id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->phone = $req->phone;
        $data->class = $req->class;
        $data->address = $req->address;
        $data->update();

        if ($data) {
            return redirect()->back()->with('success_msg', 'Record Updated Successfully');
        } else {
            return redirect()->back()->with('failed_msg', 'Something Went Wrong !!!');
        }
    }

    public function imageupload()
    {
        return view('upload');
    }
    public function upload(Request $req)
    {
        $data = new Slider();
        $fileuplod = time() . "_tanu." . $req->file('image')->getClientOriginalExtension();
        $req->file('image')->move(public_path('images'), $fileuplod);
        $data->image = 'images/' . $fileuplod;
        $data->title = $req->title;
        $data->description = $req->description;
        $data->status = $req->input('status') == true ? 1 : 0;
        $data->save();
        if ($data) {
            return redirect('displayImage')->with('success_msg', 'Image Submitted Successfully');
        }
    }

    public function displayImage(Request $req)
    {
        $search = $req['search']  ?? "";
        if ($search != "") {

            $datas = Slider::where('title', 'LIKE', "%$search%")->get();
        } else {
            $datas = Slider::get();
        }

        $data = compact('datas', 'search');
        return view('imagesfetch')->with($data);
    }


    public function slide()
    {
        // $menu=[];
        $menuItems = Menu::get();
        
        foreach($menuItems as $menuItem)
        {
            
            $menu[$menuItem->parent_id][]=$menuItem;
            // dd($menu);
        }
        $datas = Slider::all();
        $schoolinfo = School::all();
        $testis = Testimonial::all();
        return view('slide', compact('datas','schoolinfo','menu','testis'));
    }

    // public function slide()
    // {
    //     $slider = Fileupload::where('status','0')->get();
    //     return view('slide',compact('slider'));
    // }

    public function addimage()
    {
        return view('upload');
    }

    public function deleteimage($id)
    {

        $data = Slider::find($id);
        // dd($data);
        if ($data) {
            $data->delete();
            return redirect('displayImage')->with('del_msg', 'Record Deleted Successfully !');
        }
    }


    public function editimage($id)
    {
        $datas = Slider::find($id);
        return view('editimage', compact('datas'));
    }

    public function updateimage(Request $req, $id)
    {
        $data = Slider::where('id', $id)->first();
        if ($req->hasFile('image') && $req->file('image')->isValid()) {
            $fileuplod = time() . "_banner." . $req->file('image')->getClientOriginalExtension();
            $req->file('image')->move(public_path('images'), $fileuplod);
            $data->image = 'images/' . $fileuplod;
        } else {
            $data->title = $req->title;
            $data->description = $req->description;
        }
        $data->title = $req->title;
        $data->description = $req->description;
        $data->update();
        if ($data) {
            return redirect('displayImage')->with('upd_msg', 'Image Updated Successfully');
        }
    }

    public function form1()
    {
        return view('form');
    }
    public function contact(Request $req)
    {
        // dd($req);
        // return ['hii'=>$req->all()];
        $data = new Data();
        $data->name = $req->name;
        $data->save();
        if ($data) {
            return redirect('form1')->with('msg', 'data submitted successfully');
        }
    }
    public function schoolinfo()
    {
        return view('schoolinfo');
    }
    public function logo(Request $req)
    {
        $data = new School();
        $data->schoolname = $req->schoolname;
        $fileuplod = time() . "-logo." . $req->file('logo')->getClientOriginalExtension();
        $req->file('logo')->move(public_path('logos'), $fileuplod);
        $data->logo = 'logos/' . $fileuplod;
        $data->save();
    }
    public function fetchschoolinfo()
    {
        $datas  = School::all();
        return view('fetchsclinfo',compact('datas'));
    }
    
    public function editlogoname($id)
    {
        $datas  = School::find($id);
        return view('updatelogoname',compact('datas'));
    }
    public function uploadnamelogo(Request $req, $id)
    {
        $data  = School::where('id',$id)->first();

        $data->schoolname=$req->schoolname;
        if ($req->hasFile('logo') && $req->file('logo')->isValid())
        {
        $fileuplod = time() . "-logo." . $req->file('logo')->getClientOriginalExtension();
        $req->file('logo')->move(public_path('logos'), $fileuplod);
        $data->logo = 'logos/' . $fileuplod;
        }

        $data->update();
        if($data){
            return redirect('disp-name-logo')->with('msg','data updated successfully !');
        }

    }

    public function getintouch(Request $req)
    {
        $data = new Getstumsg();
        $data->name = $req->name;
        $data->phone = $req->phone;
        $data->email = $req->email;
        $data->msg = $req->msg;
        $data->save();
        if($data){
            return redirect('slide')->with('msg','We will Back To You Soon !');
        }
    }
    public function subscribe(Request $req)
    {
        
        $data = new Subscriber();
        $data->subscribers = $req->subscribers;
        $data->save();
        if($data){
            return redirect('slide')->with('msg','We will Back To You Soon !');
        }
    }
    public function uploadTestimonial(Request $req)
    {
        $data = new Testimonial();
       
        $fileuplod = time() . "-testimonial." . $req->file('image')->getClientOriginalExtension();
        $req->file('image')->move(public_path('images'), $fileuplod);
        $data->img = 'images/' . $fileuplod;
        $data->name = $req->name;
        $data->msg = $req->msg;
        $data->save();
        if($data){
            return redirect('home')->with('msg','data uploaded !');
        }
    }


}
