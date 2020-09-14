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
}









?>