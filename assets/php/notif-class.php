<?php

 class Notification  { 
   private $type;
   private $subject;
   private $message;
   private $href;


  public function __construct($notif_type) {
      $this->type = $notif_type; 
   }


  public function checkType(){ 
      switch($this->type) { 
         case "order":
            $this->subject = "Order";
            $this->message = "You have a new order";
            $this->href = "orderstatus.php";
            break;

         case "delivery": 
            $this->subject = "Parcel delivered";
            $this->message = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quia.";
            $this->href = "orderstatus.php";
            break;
         
      }
   }



  public function setType($type) {
      $this->type = $type; 
   }
  public function getType(){ 
      return $this->type; 
   }


   public function setSubject($subject) {
      $this->subject = $subject; 
   }
   public function getSubject(){ 
      return $this->subject; 
   }


   public function setMessage($message) {
      $this->message = $message; 
   }
   public function getMessage(){ 
      return $this->message; 
   }

   
   public function setHref($href) {
      $this->href = $href; 
   }
   public function getHref(){ 
      return $this->href; 
   }

   public function print_all(){ 
      echo $this->type;
      echo $this->subject;
      echo $this->message;
      echo $this->href;
      
   }


 }

?>