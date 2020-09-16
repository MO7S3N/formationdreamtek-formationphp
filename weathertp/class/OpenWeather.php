<?php 
class Openweather 
{
    private $apikey;

    public function __construct(string $apikey)
    {
        $this->apikey=$apikey;
    }

    public function getforcecast(string $city)
    {
         $curl=curl_init("http://api.openweathermap.org/data/2.5/weather?lat=36.7095638&lon=10.40540734&APPID=$this->apikey&units=metric");
         curl_setopt_array($curl,[
            CURLOPT_CAINFO => __DIR__ . DIRECTORY_SEPARATOR . 'cer.cer',
            CURLOPT_RETURNTRANSFER=>true,
            CURLOPT_TIMEOUT=>1
            ]);

         $data=curl_exec($curl);
         if($data == false || curl_getinfo($curl, CURLINFO_HTTP_CODE !==200))
         {   
             echo ' aaaa';
             return null; 
         }
         $results=[];
         $day=json_decode($data,true);
         $results[] = $day;
         /**
          * required fields : 
          */
         return $results;
    }
}