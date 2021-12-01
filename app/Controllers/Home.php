<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function curPostRequest()
    {
        /* Endpoint */
        $url = 'http://localhost/Zid/ProvinsiProjek/ProvinsiProjek/FixAPI/daftardaerah.php?kode=';
    
        /* eCurl */
        $curl = curl_init($url);
    
        /* Data */
        
    
        /* Set JSON data to POST */
        
             
        /* Define content type */
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Content-Type:application/json',
        ));
             
        /* Return json */
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
             
        /* make request */
        $result = curl_exec($curl);
        print_r($result);
        /* close curl */
        curl_close($curl);
    }
}
