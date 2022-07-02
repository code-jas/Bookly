<?php

 class Notification  { 
   private $type;
   private $subject;
   private $message;
   private $href;
   private $ref_id;


   public function __construct($notif_type, $ref_id) {
      $this->type = $notif_type; 
      $this->ref_id = $ref_id;
   }


  public function checkType(){ 
      switch($this->type) { 
         case "order":
            $this->subject = "Order Placed";
            $this->message = "Your order was submitted successfully. Thanks for shopping with bookly.";
            $this->href = "orderstatus";
            break;

         case "delivered": 
            $this->subject = "Packaged delivered";
            $this->message = "Your $this->ref_id package was delivered. ";
            $this->href = "orderstatus";
            break;
         
         case "update_prof": 
            $this->subject = "Profile Updated";
            $this->message = "Your profile details was successfully updated.";
            $this->href = "overview";
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