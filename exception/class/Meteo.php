<?php 
class Openweather 
{
    private $apikey;

    public function __construct(string $apikey)
    {
        $this->apikey=$apikey;
    }

    public function getforcecast(string $city)
    {    $this->apikey;
         $curl=curl_init("https://api.openweathermap.org/data/2.5/onecall?lat=33.441792&lon=-94.037689&%20exclude=hourly,daily&appid=$this->apikey");
         curl_setopt_array($curl,[
            CURLOPT_CAINFO => __DIR__ . DIRECTORY_SEPARATOR . 'cer.cer',
            CURLOPT_RETURNTRANSFER=>true,
            CURLOPT_TIMEOUT=>1
            ]);

         $data=curl_exec($curl);
         if($data==false)
         {
             $error=curl_error($curl);
             throw new Exception($error);
         }
         if($data == false || curl_getinfo($curl, CURLINFO_HTTP_CODE !==200))
         {   
             throw new Exception($data); 
         }
         $results=[];
         $data=json_decode($data,true);
         var_dump($data);
         die;
         foreach($data['list'] as $day)
         {
             $results = [
                 'description'=>$day['weather'][0]['description'],
                 'date'=>new DateTime("@" . $day['dt'])
             ];
         }
         return $results;
    }
}