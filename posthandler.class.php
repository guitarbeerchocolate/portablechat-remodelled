<?php
require_once 'classes/autoload.php';
class posthandler
{
  private $postObject;
  private $chat;

  function __construct($p)
  {
    $this->postObject = (object) $p;    
    $this->chat = new chat;
    if($this->postObject->method && (method_exists($this, $this->postObject->method)))
    {
      $evalStr = '$this->'.$this->postObject->method.'();';
      eval($evalStr);
    }
    else
    {
      echo 'Invalid method supplied';
    }
  }

  function login()
  { 
    $auth = new authenticate;    
    echo $auth->login($this->postObject->username, $this->postObject->password);    
  }

  function saveMessage()
  { 
    $this->chat->setId($this->postObject->myid);
    $this->chat->setMessage($this->postObject->mymessage);
    echo $this->chat->saveEntry();    
  }
}
new posthandler($_POST);
?>