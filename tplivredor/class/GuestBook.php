<?php
require_once 'message.php';

class GuestBook
{
   public function __construct($file)
   {
       $directory = dirname($file);
       
        if(!file_exists($file))
        {
            touch($file);
        }
        $this->file=$file;
   }



   public function addmessage(Message $message)
   {
       file_put_contents($this->file,$message->tojson() . PHP_EOL,FILE_APPEND);
   }

   public function getmessages() :array
   {
     $content =trim(file_get_contents($this->file));
     $lines= explode(PHP_EOL, $content);
     $messages = [];
     foreach($lines as $line)
        {
            $data = json_decode($line,true);
            $messages[]=new Message ($data['username'] , $data['message'], new DateTime("@" . $data['date']));  
        
        }
      return array_reverse($messages) ;
   }

}









?>