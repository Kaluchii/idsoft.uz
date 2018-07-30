<?php namespace App\Http\Controllers;

use App\raiting;
use App\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Interpro\Answerer\Concept\AnswerListFactory;
use Interpro\QuickStorage\Concept\QueryAgent;

class RaitingController extends Controller
{
    public function saveRaiting(Request $req)
    {
        $rating = new Rating();
        $ipAddress = $_SERVER['REMOTE_ADDR'];
        $data = $req->all();
        if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
            $tmp = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            $ipAddress = array_pop($tmp);
        }
        if ( $rating->addRating($ipAddress, $data['entity_name'],$data['value'])  ){
            return ['status' => true, $rating->getRatingView($data['entity_name'])];
        }else{
            return ['status' => false ];
        }

    }

}
