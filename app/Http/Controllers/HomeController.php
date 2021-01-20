<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function getSlider(Slider $slider){
        $data=$slider::find(1)->first();
        if ($data){
            return response()->json([
                'title' => $data->title,
                'image' => $data->image,
            ],200);
        }else{
            //maybe return default values
            return response()->json([
                'title' => null,
                'image' => 'Stay With Us',
            ],404);
        }
    }


    public function getAbout(About $about){
        $data=$about::find(1)->first();
        if ($data){
            return response()->json([
                'title' => $data->title,
                'description' => $data->content,
                'picture' => $data->image,
                'video' => $data->video,
            ],200);
        }else{
            //maybe return default values
            return response()->json([
                'title' => $data->title,
                'description' => $data->content,
                'picture' => $data->image,
                'video' => $data->video,
            ],404);
        }
    }



    public function getRooms(){
     return DB::select('select title,cover_picture,price from rooms ORDER BY RAND() LIMIT 3');
    }
    public function getAllRooms(){
        return DB::select('select id,title,cover_picture,price,room_size,adult,kid,bed_type,facilities from rooms ');
    }

    public function getPictures(){
        return DB::select('select image from pictures ORDER BY RAND() LIMIT 4');
    }
    public function getAllPictures(){
        return DB::select('select image from pictures ORDER BY RAND()');
    }
    public function getComments(){
        return DB::select('select content,created_at from comments WHERE approved =1  ORDER BY RAND() LIMIT 6');
    }

    public function getContact(){
        return DB::select('select * from abouts WHERE id  = 1  ');
    }

    public function getRoomDetail($id){
        $data= DB::select("select title,content,room_picture,room_size,bed_type,facilities,price,adult,kid from rooms WHERE rooms.id = '$id'");
        $facilities = explode(",",$data[0]->facilities);
        $images = explode(",",$data[0]->room_picture);
        return [$data,$facilities,$images];
    }

    public function sendMessage(Request $request){
        //Mail::to($request->email)->send(new ContactMail());
        return response()->json([
            'message' => 'Mail has been sent!'
        ],200);
    }
}
