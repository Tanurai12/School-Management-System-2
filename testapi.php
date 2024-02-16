<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Gamedata;


class testapi extends Controller
{
    public function getnumber()
        {
            return view('getnumber');
        }
        public function senddata($point, $id = 1)
        {
            $data = new Gamedata();
            $data->value = $point;
            $data->player_id = $id;
            $data->save();
            if ($id == 1) {
                file_get_contents('http://192.168.1.9:8000' . '/api/senddata/' . $point . '/1');
                // file_get_contents('http://192.168.1.34:8000' . '/api/senddata/' . $point . '/1');
            }
            return true;
        }
        // public function getall()
        // {
        //     $data = Gamedata::get();
        //     return redirect('getnumber',compact('data'));
        // }
    
        public function host()
        {
            return view('host');
        }
}
