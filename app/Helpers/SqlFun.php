<?php
namespace App\Helpers;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use App\Models\Option;


class SqlFun
{	

    public static function update_option($option,$value) {

        $config = CstmConfig();

        $option = trim($option);
        if ( empty($option) ){
            return false;
        }
    
        if(self::check_option_exist($option )){
            // dd("dd",$option);
            // $pdo = ORM::get_db();
            // $data = [
            //     'option_value' => $value,
            //     'option_name' => $option
            // ];

            $config[$option] = $value;

            $query_result = Option::where('option_name', $option)->update(['option_value'=>$value]);
    
            if (!$query_result){
                return false;
            }
            else{
                return true;
            }
        }
        else{
            self::add_option($option,$value);
            return true;
        }
    }

	public static  function check_option_exist($option) {

	        $config = CstmConfig();
	        
	        $option = trim($option);
	        
	        if (empty($option) ){
	            return false;
	        }
	        else{
	            $num_rows = Option::where('option_name',$option)->count();
	            if($num_rows == 1){
	                return true;
	            }
	            else{
	                return false;
	            }
	        }
	    }
   

	      public static function add_option($option, $value = '') {

		        $config = CstmConfig();
		        $option = trim($option);
		        if ( empty($option) ){
		            return false;
		        }
		        $option_id = new Option();
		        $option_id->option_name = $option;
		        $option_id->option_value = $value;
		        $option_id->save();
		        
		        return $option_id->id;
		    }

}

