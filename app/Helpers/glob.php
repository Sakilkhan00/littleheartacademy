<?php
namespace App\Helpers;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use DateTime;
class glob
{	
	public static function substr($text,$lenght)
	{
		return implode(' ', array_slice(explode(' ', $text), 0, $lenght));
	}

	public static function moreText($text,$lenght)
	{

		return implode(' ', array_slice(explode(' ', $text), $lenght, strlen($text)));
	}

	public static function timeAgo($timestamp){
        
        $datetime1= new DateTime("now");
        $datetime2=date_create($timestamp);
        $diff=date_diff($datetime1, $datetime2);
        $timemsg='';
        if($diff->y > 0){
            $timemsg = $diff->y .' '. ($diff->y > 1 ? "years" : "year");
        }
        else if($diff->m > 0){
            $timemsg = $diff->m .' '. ($diff->m > 1 ? "months" : "month");
        }
        else if($diff->d > 0){
            $timemsg = $diff->d .' '. ($diff->d > 1 ? "days" : "day");
        }
        else if($diff->h > 0){
            $timemsg = $diff->h .' '. ($diff->h > 1 ? "hours" : "hour");
        }
        else if($diff->i > 0){
            $timemsg = $diff->i .' '. ($diff->i > 1 ? "minutes" : "minute");
        }
        else if($diff->s > 0){
            $timemsg = $diff->s .' '. ($diff->s > 1 ? "seconds" : "second");
        }
        if($timemsg == ""){
            $timemsg = "Just now";
        }
        else{
            $timemsg = $timemsg. " ago";
        }
        return $timemsg;
    }
	
}