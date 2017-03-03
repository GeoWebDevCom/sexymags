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
use Log;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ScrappyController extends Controller
{
    /**
     * @var array
     */
    protected $cats = [
        'caoliu'    =>  14,
        'selfie'    =>  11,
        'asian'     =>  12,
        'euus'      =>  13,
        'uniform'   =>  15,
        'anime'    =>  17,
        'psycho'     =>  18,
    ];
    const catNeedle = 20;
    const catLength = 2;

    public function index(Request $request)
    {
        $catgory = $request->id;
        if ( !is_numeric($catgory) ){
            return false;
        }
        if ( !in_array($catgory,$this->cats) ){
            return false;
        }
        $cat = array_keys($this->cats,$catgory);
        echo 'scrapping catgory:' . $cat[0] . PHP_EOL;
        $url = self::getLog($catgory);
        $url = substr($url, 0 , strrpos($url, '/')+1).intval(substr(substr($url, strrpos($url, '/')+1), 0 , strrpos(substr($url, strrpos($url, '/')+1), '.'))-1 ). '.html';
        try{
            self::download(false,$url,$cat[0]);
        }catch (\Exception $e){
            return false;
        }



    }

    /**to get the lastest url
     * @return string
     */
    public function getLog($cat)
    {
        $log = dirname(public_path()) . '/storage/logs/laravel.log';
        $fp  = fopen($log,"r");
        while( !feof($fp) ){
            $str = fgets( $fp , 100);
            if ( preg_match("/local.INFO/",$str ) ){
                $url = trim(substr($str,33));//get url
                $cat_id = substr($url,self::catNeedle,self::catLength);
                if ( $cat == $cat_id ){
                    fclose( $fp );
                    return $url;
                }

            }
        }
    }



    public static function test($url)
    {
        Log::info($url);
        $c = new Client();
        $d = $c->request('get',$url)->getBody()->getContents();
        preg_match_all('/<h1>/',$d,$c);
        if ($c[0]==null){
            return false;
        }
        return $d;
    }

    /** return page title
     * @param $url
     * @return mixed|string
     */
    public static function testTitle($url)
    {
        $c = new Client();
        $d = $c->request('get',$url)->getBody()->getContents();
        preg_match_all('/<title>(.+?)<\/title>/',$d,$c);
        return mb_convert_encoding($c[1][0],'utf-8','gb2312');
    }

    public static function download($flag = false , $u ,$table)
    {

        if ($flag){
            $u = substr($u, 0 , strrpos($u, '/')+1).intval(substr(substr($u, strrpos($u, '/')+1), 0 , strrpos(substr($u, strrpos($u, '/')+1), '.'))-1 ). '.html';
        }

        $preg = "#<img.+?src=\'(.+?)\'.+?>#s";
        $data = self::test($u);
        if (!$data){
            self::download(true,$u,$table);
        }
        preg_match_all($preg,$data,$links);
        preg_match_all('/<title>(.+?)<\/title>/',$data,$tit);
        $title=mb_convert_encoding($tit[1][0],'utf-8','gb2312');
        echo $title . PHP_EOL;
        switch ($table){
            case 'caoliu' :
                $title_id = ClTitle::create([
                    'title' => $title,
                ])->id;
                break;
            case 'selfie' :
                $title_id = SfTitle::create([
                    'title' => $title,
                ])->id;
                break;
            case 'asian' :
                $title_id = AsTitle::create([
                    'title' => $title,
                ])->id;
                break;
            case 'euus' :
                $title_id = EuTitle::create([
                    'title' => $title,
                ])->id;
                break;
            case 'uniform' :
                $title_id = UfTitle::create([
                    'title' => $title,
                ])->id;
                break;
            case 'psycho' :
                $title_id = PyTitle::create([
                    'title' => $title,
                ])->id;
                break;
            case 'anime' :
                $title_id = AnTitle::create([
                    'title' => $title,
                ])->id;
                break;
        }


        for ($i=0;$i<count($links[1]);$i++){
            if ($i>=count($links[1])-1){
                self::download(true,$u,$table);
            }
            switch ($table){
                case 'caoliu' :
                    Caoliu::create([
                        'url' => $links[1][$i],
                        'tid' => $title_id,
                    ]);
                    break;
                case 'selfie' :
                    Selfie::create([
                        'url' => $links[1][$i],
                        'tid' => $title_id,
                    ]);
                    break;
                case 'asian' :
                    Asian::create([
                        'url' => $links[1][$i],
                        'tid' => $title_id,
                    ]);
                    break;
                case 'euus' :
                    Euus::create([
                        'url' => $links[1][$i],
                        'tid' => $title_id,
                    ]);
                    break;
                case 'uniform' :
                    Uniform::create([
                        'url' => $links[1][$i],
                        'tid' => $title_id,
                    ]);
                    break;
                case 'psycho' :
                    Psycho::create([
                        'url' => $links[1][$i],
                        'tid' => $title_id,
                    ]);
                    break;
                case 'anime' :
                    Anime::create([
                        'url' => $links[1][$i],
                        'tid' => $title_id,
                    ]);
                    break;
            }
        }
    }


}
