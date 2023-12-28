<?php
namespace App\Helpers;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use App\Models\{HeaderFooter,SiteSeo};

class helper
{	
	public static function slug($request)
	{
		return strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $request->title));
	}
	public static function date_format($request)
	{
		$date = explode('-', $request->date);
        $day   = $date[0];
        $month = $date[1];
        $year  = $date[2];
        return $year .'-'. $month .'-'. $day;
	}
	public static function listHeaderFooterSetting()
	{
	    return HeaderFooter::first();
	}
	public static function listSiteSeo()
	{
	    return SiteSeo::first();
	}
}