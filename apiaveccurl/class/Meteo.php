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
         $curl=curl_init("http://api.openweathermap.org/data/2.5/weather?q=$city&APPID=$this->apikey");
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
         $data=json_decode($data,true);
         foreach($data['coord'] as $day)
         {
             $results = [
                 'temp'=>$day['temp']['day'],
                 'description'=>$day['weather'][0]['description'],
                 'date'=>new DateTime($day['dt'])
             ];
         }
         return $results;
    }
}