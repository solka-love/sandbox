<?
namespace Solka\Domains\Classes;
use request;


class Domain{
    public function init(){

    }

    public static function getDomain(){
        $data = Request::getHttpHost();
        $tmp = explode('.', $data);
        $tmp = array_slice($tmp, 0, -2);
        $str = implode(".", $tmp);
        
        return $str;
    }

}