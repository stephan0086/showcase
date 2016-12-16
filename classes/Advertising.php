<?php


/**
 * Class of comercials. The goal is to show the connection between an Advertise
 * published/unpublished and the Showcase
 * 
 */
class Advertising {
  
  protected $isPublished;
  
  public function publish() {
    $this->isPublished = true;
  } 
  
  public function unPublish() {
    $this->isPublished = false;
  }
  
  public function isPublished() {
    
    return $this->isPublished;
    
  }
  
}