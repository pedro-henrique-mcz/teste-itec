<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;

class EventController extends Controller
{
    public function index(){
        
        $notice = Notice::all();
        
        return view('welcome',['notice'=>$notice]);
    }

    public function create(){
        return view('notice.create');
    }

    public function store(Request $request){

        $notice = new Notice;

        $notice ->title = $request->title;
        $notice ->tema1 = $request->tema1;
        $notice ->tema2 = $request->tema2;

        if($request->hasFile('image') && $request->file('image')->isValid()){
            
            $requestImage = $request->image;
            $extension =  $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." .$extension;
            $requestImage->move(public_path('assents/imgs/notices'), $imageName);
            $notice->image = $imageName;
        }

        $notice -> save();
        return redirect('/')->with('msg', 'Notícia Adicionada');
    }
}
