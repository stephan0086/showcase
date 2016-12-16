<?php

/**
 * Class of Showcase. The goal is to show the connection between Showcase that
 * contain Advertise published and unpublished
 * 
 */
class Showcase {

  protected $advertising;
  protected $isPublished;

  
  // Showcase to be alive needs an advertising
  public function __construct(Advertising $advertising) {
    $this->advertising = $advertising;
    echo "constructor advertising ok<br>";
  }

  public function unPublishAdvertising($advertising = true) {
    if ($advertising === true) {

      $this->advertising->unPublish();
    }
    
    $this->isPublished = false;
    
    echo "advertising unpublished<br>";
  }
  
  public function publishAdvertising() {
    if ($this->advertising->isPublished() == false) {

      $this->advertising->publish();
    }
    
    $this->isPublished = true;
    echo "advertising published<br>";
  }

}
