<?
namespace Solka\Domains\Classes;

use Illuminate\Support\Facades\Route;
use request;


class Location{
    public function init(){

    }

    public static function getLocation(){
        Route::get('ip', function(){
            $ip = $_SERVER['REMOTE_ADDR'];
            $datd = \Location::get($ip);
            dd($data);
        });
    }

}