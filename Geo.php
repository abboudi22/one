<?php
    
class Geology {
    protected $api = 'http://www.geoplugin.net/php.gp?ip=%s';
    protected $properties = [];
    public function request($ip){
        //sprintf print the formated string and replace the first argument to the first % and ...
        //%s mean string
        $url = sprintf($this->api, $ip);
        $res = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=$ip'));
        echo 'hello from ' . $res['geoplugin_countryName'] . '<br>';
        echo 'your time zone is ' . $res['geoplugin_timezone'];
    }
}