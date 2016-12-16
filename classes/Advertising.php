<?php


/**
 * Class of comercials. The goal is to show the connection between an Advertise
 * published/unpublished and the Showcase
 * 
 */
class Advertising {
  
  protected $isPublished;
  
  // Publish
  public function publish() {
    $this->isPublished = true;
  } 
  
  // Unpublish method
  public function unPublish() {
    $this->isPublished = false;
  }
  
  // Check the state of the advertising
  public function isPublished() {
    
    return $this->isPublished;
    
  }
  
}