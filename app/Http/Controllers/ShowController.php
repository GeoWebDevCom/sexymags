<?php

namespace App\Http\Controllers;

use App\Anime;
use App\AnTitle;
use App\Asian;
use App\AsTitle;
use App\Caoliu;
use App\ClTitle;
use App\EuTitle;
use App\Euus;
use App\Psycho;
use App\PyTitle;
use App\Selfie;
use App\SfTitle;
use App\UfTitle;
use App\Uniform;
use Illuminate\Http\Request;


class ShowController extends Controller
{
    public function caoliu(Request $request)
    {
        if ($request->id){
            $pics = Caoliu::where('tid',$request->id)->get();
            $title = ClTitle::where('id',$request->id)->first();
            return view('show',[
                'pics' => $pics,
                'title'=> $title->title,
            ]);
        }
        $titles = ClTitle::paginate(50);
        return view('index',[
            'titles' => $titles,
            'cat'    => 'caoliu',
        ]);
    }

    public function uniform(Request $request)
    {
        if ($request->id){
            $pics = Uniform::where('tid',$request->id)->get();
            $title = UfTitle::where('id',$request->id)->first();
            return view('show',[
                'pics' => $pics,
                'title'=> $title->title,
            ]);
        }
        $titles = UfTitle::paginate(50);
        return view('index',[
            'titles' => $titles,
            'cat'    => 'uniform',
        ]);
    }

    public function euus(Request $request)
    {
        if ($request->id){
            $pics = Euus::where('tid',$request->id)->get();
            $title = EuTitle::where('id',$request->id)->first();
            return view('show',[
                'pics' => $pics,
                'title'=> $title->title,
            ]);
        }
        $titles = EuTitle::paginate(50);
        return view('index',[
            'titles' => $titles,
            'cat'    => 'euus',
        ]);
    }
    public function asian(Request $request)
    {
        if ($request->id){
            $pics = Asian::where('tid',$request->id)->get();
            $title = AsTitle::where('id',$request->id)->first();
            return view('show',[
                'pics' => $pics,
                'title'=> $title->title,
            ]);
        }
        $titles = AsTitle::paginate(50);
        return view('index',[
            'titles' => $titles,
            'cat'    => 'asian',
        ]);
    }

    public function selfie(Request $request)
    {
        if ($request->id){
            $pics = Selfie::where('tid',$request->id)->get();
            $title = SfTitle::where('id',$request->id)->first();
            return view('show',[
                'pics' => $pics,
                'title'=> $title->title,
            ]);
        }
        $titles = SfTitle::paginate(50);
        return view('index',[
            'titles' => $titles,
            'cat'    => 'selfie',
        ]);
    }

    public function anime(Request $request)
    {
        if ($request->id){
            $pics = Anime::where('tid',$request->id)->get();
            $title = AnTitle::where('id',$request->id)->first();
            return view('show',[
                'pics' => $pics,
                'title'=> $title->title,
            ]);
        }
        $titles = AnTitle::paginate(50);
        return view('index',[
            'titles' => $titles,
            'cat'    => 'anime',
        ]);
    }

    public function psycho(Request $request)
    {
        if ($request->id){
            $pics = Psycho::where('tid',$request->id)->get();
            $title = PyTitle::where('id',$request->id)->first();
            return view('show',[
                'pics' => $pics,
                'title'=> $title->title,
            ]);
        }
        $titles = PyTitle::paginate(50);
        return view('index',[
            'titles' => $titles,
            'cat'    => 'psycho',
        ]);
    }


}
