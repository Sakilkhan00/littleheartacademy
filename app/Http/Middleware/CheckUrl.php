<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class CheckUrl {

    public function handle($request, Closure $next){
    	$response = $next($request);

	    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
	        $url = "https";
		else $url = "http";
		    $url .= "://";
		    $url .= $_SERVER['HTTP_HOST'];
		    $url .= $_SERVER['REQUEST_URI'];
			$pattern = '/p=324/i';

			if(preg_match($pattern, $url) == 1){
            	return redirect('/');
			}

			// $ptText ='/www/i';
			// if(preg_match($ptText, $url) == 1){
   //          	$pattern3 = '/www/i';
			// 	$new_site_url = preg_replace($pattern3, '', $url);
			// 	return redirect()->intended($new_site_url)->with('ifWww', 'if have www in url then show.');
			// }



			$pattern2 = '/www./i'; 

			if(preg_match($pattern2, $url) == 1){
            	$pattern3 = '/www./i';
				$new_site_url = preg_replace($pattern3, '', $url);
				return redirect()->intended($new_site_url)->with('ifWww', 'if have www in url then show.');
			}

      		return $response;
			// $pattern = '/www./i';
			// $new_site_url = preg_replace($pattern, '', $url);
			// return redirect()->intended($new_site_url);
    }



}