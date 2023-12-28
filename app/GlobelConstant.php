<?php
use App\Models\Option;

if(! function_exists('CstmConfig')) {
    function CstmConfig()
    {
        $info = Option::all();
        $config = array();

        foreach ($info as $data){
            $key = $data['option_name'];
            $value = $data['option_value'];
            if($key == 'lang')
                $config['default_lang'] = $value;
    
            if($key == 'site_url'){
                $value = Glofun::get_site_url($value);
            }
            if($key == 'app_url'){
                $site_url = Glofun::get_site_url($value);
                $value = $site_url."php/";
            }
            $config[$key] = $value;
        }
        return $config;
    }
}

if(! function_exists('get_lang_list')) {
    function get_lang_list(){
        $langs = array();

        if ($handle = opendir('../app/lang'))
        {
            while (false !== ($file = readdir($handle)))
            {
                if ($file != '.' && $file != '..')
                {
                    $langv = str_replace('.php','',$file);
                    $langv = str_replace('lang_','',$langv);

                    $langs[]['value'] = $langv;
                }
            }
            closedir($handle);
        }
        
        sort($langs);
        
        foreach ($langs as $key => $value)
        {
            if(CstmConfig()['lang'] == $value['value'])
            {
                $langs[$key]['name'] = ucwords($value['value']);
                $langs[$key]['selected'] = 'selected';
            }
            else
            {
                $langs[$key]['name'] = ucwords($value['value']);
                $langs[$key]['selected'] = '';
            }
        }
        
        return $langs;
    }
}

    if(! function_exists('lang')) {
    function lang(){
        $all_lang = get_lang_list();
        // dd($all_lang);
        $current_lang = '';
        $lang = array();
        foreach($all_lang as $v){
            if(!empty($v['selected'])){
                $current_lang = $v['value'];
            }
        }
        if(empty($current_lang)){
            $current_lang = 'english';
        }
        
        require_once('lang/lang_'.$current_lang.'.php');
        return $lang;
        
    }

    if(! function_exists('get_country')) {
        function get_country()
        {
            $arr = [];
            $arr = SqlFun::get_country_list();
            return $arr;
        }
    }

    if(! function_exists('getPopularCity')) {
        function getPopularCity()
        {
            $count = 1;
            $newErr = [];
            $result = Cities::select('id','asciiname')->where(array('active' => '1'))->orderBy('population', 'desc')->limit(18)->get();
            
            if($result){
                foreach($result as $info){
                    $newErr[$count]['id'] = $info['id'];
                    $newErr[$count]['name'] = $info['asciiname'];
                    $city_count = Product::where('city', $info['id'])->count();
                    $newErr[$count]['count'] = $city_count;
                    $count++;
                }
            }
            return $newErr;

        }
    }

    if(! function_exists('get_html_pages')) {
        function get_html_pages()
        {
            $config = CstmConfig();
            $htmlPages = array();
            $result = Pages::where('translation_lang','en')->get();

            foreach ($result as $info) {
                $htmlPages[$info['id']]['id'] = $info['id'];
                $htmlPages[$info['id']]['title'] = $info['title'];
                
                $htmlPages[$info['id']]['link'] = route('page.view',$info['slug']);

            }
            return $htmlPages;
        }
    }
    




}