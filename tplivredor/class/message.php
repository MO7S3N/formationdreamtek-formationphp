<?php
class Message
{   
    const LIMIT_USERNAME = 3;
    const LIMIT_MESSAGE = 10;
    private $username;
    private $message;
    private $date;

    public function __construct(string $username, string $message , DateTime $date=null)
    {
        $this->username=$username;
        $this->message=$message;
        $this->date=$date ? : new DateTime();
    }

    public function is_valid()
    {
        return empty($this->getErrors());
    }
    
    public function getErrors()
    {
        $errors =[];
        if(strlen($this->username) < 3)
        {
           $errors['username']= "votre username est trop court" ;
        }
        if(strlen($this->message) < 10)
        {
            $errors['message'] = " votre message est trop court";
        }
        return $errors;
    }

    public function tojson()
    {
      return json_encode  ([
            'username'=>$this->username,
            'message'=>$this->message,
            'date'=> $this->date->getTimestamp()
        ]);
    }
}